<?php
    session_start();
    include("library.php");
    include("Styles.php"); 

    if(isset($_POST['PhoneNumPicked']))
    {
        $_SESSION['post-data'] = $_POST['PhoneNumPicked'];
        
        $_SESSION['post-data3'] = substr($_SESSION['post-data'],15,15);
    }
?>

<html><head><title>Search Songs</title></head><body>

<h1 style="text-align: center">Welcome <?php echo substr($_SESSION['post-data'],0,15);?> your ID is: <?php echo $_SESSION['post-data3'];?> </h1>
<div class="btn-group">
    <form action="KaraokeMain.php" method="POST">
        <button style="margin-right: 650px;" onclick="history.go(-1);" > Back </button>
    </form>

</div>
<div class="btn-group">
    <form action="SearchSong.php" method="POST">
        <button style="margin-center: 0px;" > Search by Song Title </button>
    </form>

</div>
<h1 style="text-align: center">Search for a Musician</h1> <br>

<div class="midnav">
    <div class="search-container">
        <form action="SearchContrib.php" method='POST'>
            <input type="text" placeholder="Search for a Musician" name="Search1" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
    
<?php

if( !empty($_POST["Search1"])) {
    $newSong = $_POST["Search1"];

    $Search = '%' . $newSong . '%';
    
    echo "<br> <h1 style='font-size:200%;'> You Searched for a Musician Named $newSong.</h1>";

    $sql = "SELECT * 
            FROM Song, Contributor, Creates 
            WHERE Song.SongID = Creates.SongID
            AND Creates.ContributorID = Contributor.ContributorID
            AND Name LIKE ?;";
	try {
        $pdo = new PDO($dsn, $username, $password, $options);
        $statement = $pdo->prepare($sql);
        $statement->execute([$Search]);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(empty($rows))
        {
            echo "<h3> There were no results for $newSong </h3>";
        }
        else
        {
            drawTable($rows);
        }
	} catch (PDOException $e) {
		die("<p>Query failed: {$e->getMessage()}</p>\n");
	}

} else {
    echo "<br> <h1 style='font-size:200%;'> Please Enter an Artist or a Contributor. </h1>";
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
    //Does NOT insert into sign up table
    if( !empty($_POST["EnterSongID"]) ) {

        $SID = $_POST["EnterSongID"];
        $UID = $_SESSION['post-data3'];

        if(isset($_POST['FreeQ'])){
            $sql = 'INSERT INTO SignUp (UsersId,SongID,SignUpTime,QueueType,Cost)
                     VALUES (?,?,"2023-04-29 11:54:00","F",NULL)';
           try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$UID,$SID]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }

        }else if (isset($_POST['PaidQ']) && !empty($_POST["EnterAmount"]) ){

            $AmountP = $_POST['PaidQ'];
            $sql = 'INSERT INTO SignUp (UserId,SongID,SignUpTime,QueueType,Cost) VALUES (?,?,"2023-04-29 11:54:00","P",?)';
            try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$UID,$SID,$AmountP]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }
        }else{
            $sql = "SELECT * FROM SignUp";
        }

    }

?>


</body>
</html>