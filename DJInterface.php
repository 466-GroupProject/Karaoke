<html><head><title>DJ Interface</title></head>

<h1 style="text-align: center">Welcome DJ</h1>
<h2 style="text-align: center">Choose a song to play next</h2>
<?php
include("library.php");
include("Styles.php");


echo "<h1 text-align: left > Priotity Queue <h1>";
echo "<h1 text-align: right > Free Queue <h1>";
$sql = 'Select * FROM Song';
try {
    $pdo = new PDO($dsn, $username, $password, $options);
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    drawTable($rows);
} catch (PDOException $e) {
	die("<p>Query failed: {$e->getMessage()}</p>\n");
}

?>

</html>