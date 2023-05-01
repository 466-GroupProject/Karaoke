<?php
    session_start();
    include("library.php");
    include("Styles.php"); 

    if(isset($_POST['PhoneNumPicked']))
    {
        $_SESSION['post-data'] = $_POST['PhoneNumPicked'];//all data sent
        $_SESSION['post-data3'] = substr($_SESSION['post-data'],14,15);//ID
        //var_dump($_SESSION);
    }
?>

<html><head><title>Search Songs</title></head><body>

<h1 style="text-align: center">Welcome <?php echo substr($_SESSION['post-data'],0,14);?></h1>
<div class="btn-group">
    <form action="KaraokeMain.php" method="POST">
        <button style="margin-right: 650px;" onclick="history.go(-1);" > Home </button>
    </form>

</div>
<div class="btn-group">
    <form action="SearchContrib.php" method="POST">
        <button style="margin-center: 0px;" > Search by Musician </button>
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
        </form>
    </div>
</div>

<?php 
    
    if( !empty($_POST["EnterSongID"]) ) {

        if(isset($_POST['FreeQ'])){
            $SID = $_POST["EnterSongID"];
            $UID = $_SESSION['post-data3'];
            $sql = 'INSERT INTO SignUp (UsersId,SongID,SignUpTime,QueueType,Cost)
                     VALUES (?,?,"2023-04-29 11:54:00","F",NULL)';
           try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$UID,$SID]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<meta http-equiv="refresh" content="0">';
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }

        }else if (isset($_POST['PaidQ']) && !empty($_POST["EnterAmount"] && $_POST["EnterAmount"] >= 1) ){
            $SID = $_POST["EnterSongID"];
            $UID = $_SESSION['post-data3'];
            $AmountP = $_POST['EnterAmount'];
            $sql = 'INSERT INTO SignUp (UsersId,SongID,SignUpTime,QueueType,Cost) 
                     VALUES (?,?,"2023-04-29 11:57:00","P",?)';
            try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$UID,$SID,$AmountP]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<meta http-equiv="refresh" content="0">';
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }
        }else{
            echo "<h2>Please Enter a valid SongID and Amount within the Balance.</h2>";
        }

    }

?>


</body>
</html>