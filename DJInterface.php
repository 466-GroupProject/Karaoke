<html><head><title>DJ Interface</title></head>

<h1 style="text-align: center">Welcome DJ</h1>
<h2 style="text-align: center">Choose a song to play next</h2>


<?php
    include("library.php");
    include("Styles.php");
    include("hiddeninfo.php");

    print_r($_POST);

    try 
    {
        //connect to database
        $dsn = "mysql:host=courses; dbname=z1696323";
        $pdo = new PDO($dsn, $username, $password);
    
        //run query
        $sql = "Select Name, StageName, Song.SongID, Title, Artist, SignUpTime 
        FROM Song, Users, SignUp 
        WHERE Song.SongID = SignUp.SongID 
        AND SignUp.UsersID = Users.UsersID 
        AND QueueType = 'F' 
        ORDER BY SignUpTime ASC;";
        $rs = $pdo->query($sql);
        $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
            
        //label and draw table
        echo "<h1> Free Queue </h1>" ;	
        echo "<form action=\"DJInterfacecopy.php\" method=\"POST\">";
        echo "<input type=\"submit\" name=\"Free\" value=\"Play Next Free Queue Song\"/>";
        echo "</form>";
        draw_table($rows);
    

            
        //label table
        echo "<h1> Priority Queue </h1>";

        echo "<form action=\"DJInterface.php\" method=\"POST\">";
        echo "<input type=\"submit\" name=\"Priority\" value=\"Play Next Free Priority Song\"/>";
        echo "</form>";

        //Sort Button Cost
        echo "<form action=\"DJInterface.php\" method=\"POST\">";
        echo "<input type=\"submit\" name=\"Cost\" value=\"Sort By Cost\"/>";
        echo "</form>";
        //sort Button Time
        echo "<form action=\"DJInterfacecopy.php\" method=\"POST\">";
        echo "<input type=\"submit\" name=\"Time\" value=\"Sort By Sign Up Time\"/>";
        echo "</form>";

        if (isset($_POST['Cost']))
        {
            $sql = "Select Name, StageName, Song.SongID, Title, Artist, SignUpTime, Cost    
                    FROM Song, Users, SignUp 
                    WHERE Song.SongID = SignUp.SongID 
                    AND SignUp.UsersID = Users.UsersID 
                    AND QueueType = 'P' 
                    ORDER BY Cost DESC;";
        }
        else if (isset($_POST['Time']))
        {
            $sql = "Select Name, StageName, Song.SongID, Title, Artist, SignUpTime, Cost    
                    FROM Song, Users, SignUp 
                    WHERE Song.SongID = SignUp.SongID 
                    AND SignUp.UsersID = Users.UsersID 
                    AND QueueType = 'P' 
                    ORDER BY SignUpTime ASC;";
        }
        else
        {
            $sql = "Select Name, StageName, Song.SongID, Title, Artist, SignUpTime, Cost    
                    FROM Song, Users, SignUp 
                    WHERE Song.SongID = SignUp.SongID 
                    AND SignUp.UsersID = Users.UsersID 
                    AND QueueType = 'P' 
                    ORDER BY Cost DESC;";
        }
        $rs = $pdo->query($sql);
        $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
        draw_table($rows);
    } 
    catch (PDOException $e) {
        die("<p>Query failed: {$e->getMessage()}</p>\n");
    }
    
?>

</html>