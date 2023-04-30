<?php
    session_start();
    include("library.php");
    include("Styles.php"); 

    if(isset($_POST['PhoneNumPicked']))
    {
        $_SESSION['post-data'] = $_POST['PhoneNumPicked'];
        $_SESSION['post-data3']= $_POST['UserIDNum'];
    }
?>

<html><head><title>Search Songs</title></head><body>

<h1 style="text-align: center">Welcome <?php echo $_SESSION['post-data']; ?> this is your ID: <?php echo $_SESSION['post-data3']; ?></h1>
<div class="btn-group">
    <form action="KaraokeMain.php" method="POST">
        <button style="margin-right: 650px;" onclick="history.go(-1);" > Back </button>
    </form>

</div>
<h1 style="text-align: center">Search for a Song</h1> <br>

<div class="midnav">
    <div class="search-container">
        <form action="SearchSong.php" method='POST'>
            <input type="text" placeholder="Search for a Artist or a Title" name="Search1" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
    
<?php

if( !empty($_POST["Search1"])) {
    $newSong = $_POST["Search1"];
    
    echo "<br> <h1 style='font-size:200%;'> You Searched for a Song or Artist named $newSong.</h1>";

    $sql = 'Select * FROM Song WHERE Artist = ? OR Title = ? ';
	try {
        $pdo = new PDO($dsn, $username, $password, $options);
        $statement = $pdo->prepare($sql);
        $statement->execute([$newSong,$newSong]);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        drawTable($rows);
	} catch (PDOException $e) {
		die("<p>Query failed: {$e->getMessage()}</p>\n");
	}

} else {
    echo "<br> <h1 style='font-size:200%;'> Please Enter an Artist or a Title. </h1>";
}

?>


<h1 style="text-align: center" class="fixedh1"> Sign up for a Song</h1>

<div class="midnav">
    <div class="search-container2">
        <form action="SearchSong.php" method='GET'>
            <input type="text" placeholder="Enter SongID" name="EnterSongID" required>
            <button type="submit" name="FreeQ">Free</button>
            <button type="submit" name="PaidQ">Paid</button>
            <input type="text" placeholder="Enter an Amount" name="EnterAmount">
        </form>
    </div>
</div>

<?php 
    
    if(!empty($_POST["EnterSongID"])) {
        $SID = $_POST["EnterSongID"];
        
        if(isset($_POST['FreeQ'])){
            $sql = 'INSERT INTO SignUp (UserId,SongID,SignUpTime,QueueType,Cost) VALUES ("1","30","2023-04-29 113:54:00","F",NULL)';
           
            try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<meta http-equiv="refresh" content="0">';
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }

        }else if (isset($_POST['PaidQ'])){
            $QT = 'P';
            $AmountP = $_POST['PaidQ'];
            $sql = 'INSERT INTO SignUp (UserId,SongID,QueueType,Cost) VALUES (?,?,?,?,?)';

            try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$Name,$SName,$Balance,$Email,$PhNum]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<meta http-equiv="refresh" content="0">';
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }

        }else{
            echo "Niether Happened";
        }  
    }

?>


</body>
</html>