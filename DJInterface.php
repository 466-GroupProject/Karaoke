<html><head><title>DJ Interface</title></head>

<h1 style="text-align: center">Welcome DJ</h1>
<h2 style="text-align: center">Choose a song to play next</h2>

<h1 style ='text-align: right;'> Priotity Queue <h1>
<h1 style ='text-align: left;' > Free Queue <h1>

<?php
    include("library.php");
    include("Styles.php");

    /*
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
    */
?>

</html>