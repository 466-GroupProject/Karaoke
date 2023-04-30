<html><head><title>DJ Interface</title></head>

<h1 style="text-align: center">Welcome DJ</h1>
<h2 style="text-align: center">Choose a song to play next</h2>

<h1 style ='text-align: right;'> Priotity Queue <h1>
<h1 style ='text-align: left;' > Free Queue <h1>

<?php
    include("library.php");
    include("Styles.php");

    try 
    {
        //connect to database
        $dsn = "mysql:host=courses; dbname=z1696323";
        $pdo = new PDO($dsn, $username, $password);
    
        //run query
        $rs = $pdo->query("Select Name, StageName, Song.SongID, Title, Artist, SignUpTime FROM Song, Users, SignUp WHERE Song.SongID = SignUp.SongID AND SignUp.UsersID = Users.UsersID AND QueueType = 'F' ORDER BY SignUpTime ASC;");
        $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
            
        //label and draw table
        echo "<h1> Free Queue </h1>" ;	
        draw_table($rows);
    
        //run querry
        $rs = $pdo->query("Select Name, StageName, Song.SongID, Title, Artist, SignUpTime, Cost FROM Song, Users, SignUp WHERE Song.SongID = SignUp.SongID AND SignUp.UsersID = Users.UsersID AND QueueType = 'P' ORDER BY Cost DESC;");
        $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
            
        //label and draw table
        echo "<h1> Priority Queue </h1>";
        draw_table($rows);
    } 
    catch (PDOException $e) {
        die("<p>Query failed: {$e->getMessage()}</p>\n");
    }
    
?>

</html>