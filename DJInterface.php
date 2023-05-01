<html><head><title>DJ Interface</title></head>

<div class="btn-group">
    <form action="KaraokeMain.php" method="POST">
        <button onclick="history.go(-1);" > Home </button>
    </form>
</div>

<h1 style="text-align: center">Welcome DJ</h1>
<h2 style="text-align: center">Choose a File to play next</h2>


<?php

    include("library.php");
    include("Styles.php");
    include("hiddeninfo.php");

    try 
    {
        // connect to database
        $dsn = "mysql:host=courses; dbname=z1696323";
        $pdo = new PDO($dsn, $username, $password);


        // set SQL For free queue
        $sql = "SELECT FileID, Name, StageName, Title, Artist, SignUpTime
                FROM Song, Users, SignUp 
                WHERE Song.SongID = SignUp.SongID 
                AND SignUp.UsersID = Users.UsersID 
                AND QueueType = 'F' 
                ORDER BY SignUpTime ASC;";

        // prepare, execut and fetch
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Set FileID to play on button press        
        $File = (empty($rows)) ? "None Available" : $rows[0]['FileID'];


        // label Table
        echo "<h1> Free Queue </h1>" ;

        // Button to remove top entry of the table
        echo "<form action=\"DJInterface.php\" method=\"POST\">";
        echo "<input type=\"submit\" name=\"Free\" value=\"Play File $File\"/>";
        echo "</form>";

        if (empty($rows))
        {
            echo "<h3> There is currently no one signed up to sing in the free queue. </h3>";
        }
        else
        {

        // print free Table
        draw_table($rows);

        }
        
        // if button is pressed
        if(isset($_POST['Free'])) 
        {
            // set SQL
            $sqlPlay = "DELETE FROM SignUp WHERE QueueType = 'F' ORDER BY SignUpTime ASC LIMIT 1;";
            
            // Prepare, execute, and fetch
            $statement = $pdo->prepare($sqlPlay);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

            // refresh page to display new results
            echo '<meta http-equiv="refresh" content="0">';
        }

        $Sorted = (isset($_POST['Time'])) ? "Time" : "Cost";

        // Set SQL For Priority Queue
        // if The Cost Button was pressed
        if (isset($_POST['Cost']))
        {
            // set SQL statement
            $sql = "SELECT FileID, Name, StageName, Title, Artist, SignUpTime, Cost    
                    FROM Song, Users, SignUp 
                    WHERE Song.SongID = SignUp.SongID 
                    AND SignUp.UsersID = Users.UsersID 
                    AND QueueType = 'P' 
                    ORDER BY Cost DESC;";
            
            // set Sorted 
            $Sorted = "Cost";
        }

        // if the Time Button was pressed
        else if (isset($_POST['Time']))
        {
            // Set SQL statement
            $sql = "SELECT FileID, Name, StageName, Title, Artist, SignUpTime, Cost    
                    FROM Song, Users, SignUp 
                    WHERE Song.SongID = SignUp.SongID 
                    AND SignUp.UsersID = Users.UsersID 
                    AND QueueType = 'P' 
                    ORDER BY SignUpTime ASC;";
            
            // set Sorted
            $Sorted = "Time";
        }

        // if no button was pressed sort by Cost by default
        else
        {
            // set SQL statement
            $sql = "SELECT FileID, Name, StageName, Title, Artist, SignUpTime, Cost    
                    FROM Song, Users, SignUp 
                    WHERE Song.SongID = SignUp.SongID 
                    AND SignUp.UsersID = Users.UsersID 
                    AND QueueType = 'P' 
                    ORDER BY Cost DESC;";
            
            // set Sorted
            $Sorted = "Cost";
        }

        // prepare, execute, and fetch Priority Table
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Set FileID to play on button press  
        $File = (empty($rows)) ? "None Available" : $rows[0]['FileID'];
            
        // label table
        echo "<h1> Priority Queue </h1>";
        echo "<h2> Sorted by $Sorted </h2>";

        // button to remove top entry from table
        echo "<form action=\"DJInterface.php\" method=\"POST\">";
        echo "<input type=\"hidden\" name=\"Hidden\" value = $Sorted />";
        echo "<input type=\"submit\" name=\"Priority\" value=\"Play File $File\"/>";
        echo "</form>";



        //Sort Button Cost
        echo "<form action=\"DJInterface.php\" method=\"POST\">";
        echo "<input type=\"submit\" name=\"Cost\" value=\"Sort By Cost\"/>";
        echo "</form>";

        //sort Button Time
        echo "<form action=\"DJInterface.php\" method=\"POST\">";
        echo "<input type=\"submit\" name=\"Time\" value=\"Sort By Sign Up Time\"/>";
        echo "</form>";

                // prepare, execute, and fetch Priority Table
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        

        if (empty($rows))
        {
            echo "<h3> There is currently no one signed up to sing in the priority queue. </h3>";
        }
        else
        {
            // Print priority table
            draw_table($rows);
        }

        // if button is pressed and sorted by cost
        if(isset($_POST['Priority']) && $_POST['Hidden'] == "Cost") 
        {
            // set SQL statement
            $sqlPlay = "DELETE FROM SignUp 
                        WHERE QueueType = 'P' 
                        ORDER BY Cost DESC LIMIT 1;";
                    
            // Prepare, execute, and fetch
            $statement = $pdo->prepare($sqlPlay);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        
            // refresh to show results
            echo '<meta http-equiv="refresh" content="0">';
        }
        
        // if button is pressed and sorted by Time
        else if(isset($_POST['Priority']) && $_POST['Hidden'] == "Time") 
        {
            // Set SQL statement
            $sqlPlay = "DELETE FROM SignUp 
                        WHERE QueueType = 'P' 
                        ORDER BY SignUpTime ASC LIMIT 1;";
                    
            // Prepare, execute, and fetch
            $statement = $pdo->prepare($sqlPlay);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                    
            // refresh to show results
            echo '<meta http-equiv="refresh" content="0">';
        }
    } 
    catch (PDOException $e) {
        die("<p>Query failed: {$e->getMessage()}</p>\n");
    }
 
?>

</html>