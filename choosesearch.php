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

<h1 style="text-align: center">Welcome <?php echo substr($_SESSION['post-data'],0,15);?> your ID is: <?php echo $_SESSION['post-data3'];?> </h1>
<div class="btn-group">
    <form action="KaraokeMain.php" method="POST">
        <button style="margin-right: 650px;" onclick="history.go(-1);" > Back </button>
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