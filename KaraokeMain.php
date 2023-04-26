<html><head><title>Karaoke</title></head><body>
 
<div class="topnav">

    <form action="CreateAccount.php" method='POST'>
        <button type="Submit" style="align: center;">Sign Up</button>
    </form>

</div>

<br><br>

<div class="midnav">
    <div class="search-container">
        <form action="KaraokeMain.php" method='POST'>
            <input type="text" placeholder="Search for a Artist or a Title" name="Search1">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<?php
include("library.php");
include("Styles.php");

if( !empty($_POST["Search1"])) {
    $newSong = $_POST["Search1"];
    echo "<h1 style='font-size:200%;'> You Selected the Song Titled $newSong.</h1>";

    $sql = 'Select * FROM Song WHERE Title = ?';
	try {
        $pdo = new PDO($dsn, $username, $password, $options);
        $statement = $pdo->prepare($sql);
        $statement->execute([$newSong]);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        drawTable($rows);
	} catch (PDOException $e) {
		die("<p>Query failed: {$e->getMessage()}</p>\n");
	}
}


?>

</body>
</html>