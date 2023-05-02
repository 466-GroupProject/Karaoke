<?php
    session_start();
    include("library.php");
    include("Styles.php"); 

    if(isset($_POST['PhoneNumPicked']))
    {
        $_SESSION['post-data'] = $_POST['PhoneNumPicked'];//all data sent
        //var_dump($_SESSION);
    }
   
    $num = substr($_SESSION['post-data'],0,12);

    //echo "This is the num $num";
    $sql = "SELECT * FROM Users WHERE PhoneNum = ? ;";

	try {
        // connect to database
        $pdo = new PDO($dsn, $username, $password);

        $statement = $pdo->prepare($sql);
        $statement->execute([$num]);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(empty($rows)) {
            echo "<h3> There were no results for </h3>";
        }else{
            $_SESSION['post-data4'] = $rows[0]['Balance']; 
            $_SESSION['post-data5'] = $rows[0]['Name'];
            $_SESSION['post-data3'] = $rows[0]['UsersID'];
        }
   
    }
    catch (PDOException $e) {
        die("<p>Query failed: {$e->getMessage()}</p>\n");
    }
    
?>

<html><head><title>Search Songs</title></head><body>

<h1 style="text-align: center">Welcome <?php echo $_SESSION['post-data5'];?> Balance: <?php echo $_SESSION['post-data4'];?></h1>

<div class="btn-group">

    <form action="KaraokeMain.php" method="POST">
        <button style="margin-right: 750px;" onclick="history.go(-1);" > Back </button>
    </form>

    <form action="SearchContrib.php" method="POST">
        <button style="margin-center: 0px;" > Search by Musician </button>
    </form>

</div>

<div class="midnav">
    <div class="search-container3">
         <form action="SearchSong.php" method="POST">
            <input type="text" placeholder="Add Amount" name="AddedAmount" required>
            <button type="submit">Add Funds</button>
        </form>
    </div>
</div>

<h1 style="text-align: center">Search for a Song Title</h1> <br>

<div class="midnav">
    <div class="search-container">
        <form action="SearchSong.php" method='POST'>
            <input type="text" placeholder="Search for a Song Title" name="Search1" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
    
<?php

if (!empty($_POST["AddedAmount"])) { 

    if ($_POST["AddedAmount"] > 0 && $_POST["AddedAmount"] <= 1000) {

        $newAmount = $_POST["AddedAmount"];
        $UID = $_SESSION['post-data3'];

        $sql = 'UPDATE Users SET Balance = Balance + ? WHERE UsersID = ?';
        try {
                    
            $pdo = new PDO($dsn, $username, $password, $options);
            $statement = $pdo->prepare($sql);
            $statement->execute([$newAmount,$UID]);
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo '<meta http-equiv="refresh" content="0">';

            echo '<script> alert("Successfully Added Funds!") </script>';
        } catch (PDOException $e) {
            die("<p>Query failed: {$e->getMessage()}</p>\n");
        }
    }else{
        echo '<script> alert("Enter a valid fund amount between 1-1000!") </script>';
    }

}

if( !empty($_POST["Search1"])) {
    $newSong = $_POST["Search1"];

    $Search = '%' . $newSong . '%';
    
    echo "<br> <h1 style='font-size:200%;'> You Searched for a Song or Title named $newSong.</h1>";

    //$sql = 'Select * FROM Song WHERE Artist = ? OR Title = ? ';
    $sql = "SELECT DISTINCT Creates.SongID, Song.*, ReleaseDate  
            FROM Song, Contributor, Creates 
            WHERE Song.SongID = Creates.SongID
            AND Creates.ContributorID = Contributor.ContributorID
            AND Title LIKE ? ;";

	try {
        $pdo = new PDO($dsn, $username, $password, $options);
        $statement = $pdo->prepare($sql);
        $statement->execute([$Search]);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(empty($rows)) {
            echo "<h3> There were no results for $newSong </h3>";
        }else { 
            drawTable($rows);
        }

	} catch (PDOException $e) {
		die("<p>Query failed: {$e->getMessage()}</p>\n");
	}

} else {
    echo "<br> <h1 style='font-size:200%;'> Please Enter an Song or a Title. </h1>";
}

?>

<h1 style="text-align: center" class="fixedh1"> Sign up for a Song</h1>

<div class="midnav">
    <div class="search-container2">
        <form action="SearchSong.php" method='POST'>
            <input type="text" placeholder="Enter SongID" name="EnterSongID" required>
            <button type="submit" name="FreeQ">Free</button>
            <button type="submit" name="PaidQ">Paid</button>
            <input type="text" placeholder="Enter an Amount" name="EnterAmount">
            <input type='radio' name='NumS' value='Solo' Checked/> Solo
            <input type='radio' name='NumS' value='Duet' /> Duet
        </form>
    </div>
</div>

<?php 

    if( !empty($_POST["EnterSongID"]) && $_POST["EnterSongID"] > 0 && $_POST["EnterSongID"] <= 34 ) {

        if(isset($_POST['FreeQ'])){
            $SID = $_POST["EnterSongID"];
            $UID = $_SESSION['post-data3'];
            $date = date('Y-m-d H:i:s');
            $Ver = $_POST["NumS"];

            if($Ver == 'Solo') { $P5 = 0.0; } else { $P5 = 0.5; }

            $sql = 'INSERT INTO SignUp (UsersID,SongID,SignUpTime,QueueType,Cost,FileID,Versions)
                     VALUES (?,?,?,"F", NULL,? + ?,?)';
           try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$UID,$SID,$date,$SID,$P5,$Ver]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<meta http-equiv="refresh" content="0">';
                echo '<script> alert("Successfully Added You To The Free Queue!") </script>';
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }

        }else if (isset($_POST['PaidQ']) && !empty($_POST["EnterAmount"]) && $_POST["EnterAmount"] >= 1 && $_POST["EnterAmount"] <= $_SESSION['post-data4']) {

            $SID = $_POST["EnterSongID"];
            $UID = $_SESSION['post-data3'];
            $AmountP = $_POST['EnterAmount'];
            $date = date('Y-m-d H:i:s');
            $Ver = $_POST["NumS"];

            if($Ver == 'Solo') { $P5 = 0.0; } else { $P5 = 0.5; }

            $sql = 'INSERT INTO SignUp (UsersID,SongID,SignUpTime,QueueType,Cost,FileID,Versions) 
                     VALUES (?,?,?,"P",?,? + ?,?)';
            try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$UID,$SID,$date,$AmountP,$SID,$P5,$Ver]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                
                $sql = 'UPDATE Users SET Balance = Balance - ? WHERE UsersID = ?';
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$AmountP,$UID]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<meta http-equiv="refresh" content="0">';

                echo '<script> alert("Successfully Added You To The Paid Queue!") </script>';
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }

        }else{
            echo '<script> alert("Enter a vaid SongID and Amount in your Balance!") </script>';
        }

    }

?>

</body>
</html>