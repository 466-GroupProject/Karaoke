<html><head><title>Karaoke</title></head><body>
 
<?php
    include("library.php");
    include("Styles.php");
?>

<br>
<h1 style="text-align: center">Welcome To Our Karaoke</h1> <br>

<div class="btn-group" style="width:100%">

    <form action="CreateAccount.php" method='POST'>
        <button style="float: center" type="Submit">Sign Up</button>
    </form>

    
    <button style="float: center" onclick="DropDownNames()" class="dropbtn" name="existing">Choose Existing</button>
    <div id="DropDownNames" class="dropdownC">
        <form action="SearchSong.php" method='POST'>
            <button>StageName</button>
        </form>
    </div>


    <form action="DJInterface.php" method='POST'>
        <button type="Submit" style="text-align: center" >I'm The DJ</button>
    </form>
</div>

</body>
</html>