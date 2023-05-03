<?php
    session_start();
    include("library.php");
    include("Styles.php"); 

    if(isset($_POST['PhoneNumPicked']))
    {
        //var_dump($_SESSION);
        $_SESSION['post-data'] = $_POST['PhoneNumPicked'];//all data sent
        $_SESSION['post-data3'] = substr($_SESSION['post-data'],14,15);//ID
        //var_dump($_SESSION);
    }
    $num = substr($_SESSION['post-data'],0,12);

    //echo "This is the num $num";
    $sql = "SELECT * 
        FROM Users
        WHERE PhoneNum = ? ;";
	try 
    {
        // connect to database
        $pdo = new PDO($dsn, $username, $password);

        $statement = $pdo->prepare($sql);
        $statement->execute([$num]);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(empty($rows))
        {
            echo "<h3> There were no results for </h3>";
        }
        else
        {
            $_SESSION['post-data5'] = $rows[0]['Name'];
            $_SESSION['post-data4'] = $rows[0]['Balance'];
        }

    }
    catch (PDOException $e) {
        die("<p>Query failed: {$e->getMessage()}</p>\n");
    }

?>

<h1 style="text-align: center">Welcome <?php echo $_SESSION['post-data5'];?> Balance: <?php echo $_SESSION['post-data4'];?></h1>
<div class="btn-group">
    <form action="KaraokeMain.php" method="POST">
        <button style="margin-right: 650px;" onclick="history.go(-1);" > Sign Out </button>
    </form>

</div>

<br><br><br><br><br><br><br><br>

<h1 style="text-align: center">Choose your search Method</h1>


<div class="btn-group">
    <form action="SearchSong.php" method="POST">
        <button class="button3" > Search By Song Title </button>
    </form>

</div>

<div class="btn-group">
    <form action="SearchContrib.php" method="POST">
        <button class="button2"> Search By Contributor </button>
    </form>

</div>