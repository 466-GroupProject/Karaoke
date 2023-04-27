<html><head><title>Search Songs</title></head><body>
 
<?php
    include("library.php");
    include("Styles.php");
?>

<h1 style="text-align: center">Welcome <?php $_POST["StageName"] ?> </h1>

<h1 style="text-align: center">Search for a Song</h1> <br>

<div class="midnav">
    <div class="search-container">
        <form action="SearchSong.php" method='POST'>
            <input type="text" placeholder="Search for a Artist or a Title" name="Search1">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<?php

if( !empty($_POST["Search1"])) {
    $newSong = $_POST["Search1"];
    echo "<h1 style='font-size:200%;'> You Selected the Song Titled $newSong.</h1>";

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
}    

?>

<br><br><br><br><br><br><br><br>

<div class="btn-group">
    <form action="KaraokeMain.php" method="POST">
        <button onclick="history.go(-1);" > Back </button>
    </form>
</div>

</body>
</html>