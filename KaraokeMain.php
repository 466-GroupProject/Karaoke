<html><head><title>Karaoke</title></head><body>
 
<?php
    include("library.php");
    include("Styles.php");
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 style="text-align: center">Welcome To Our Karaoke</h1> <br>

<div class="btn-group" style="width:100%">

    <form action="CreateAccount.php" method='POST'>
        <button style="margin-right: 100px;" class="button1" type="Submit">Sign Up</button>
    </form>

    <div class="button2">
        <button style="margin-right: 10px;" onclick="DropDownNames()" class="dropbtn" name="existing">Choose Existing</button>
        <div id="DropDownNames" class="dropdownC">
            <form action="SearchSong.php" method='POST'>
                <button>PhoneNumber 1</button>
                <button>PhoneNumber 2</button>
                <button>PhoneNumber 3</button>
                <button>PhoneNumber 4</button>
                <button>PhoneNumber 5</button>
            </form>
        </div>
    </div>


    <form action="DJInterface.php" method='POST'>
        <button type="Submit" class="button3" style="margin-right: 10px;" >I'm The DJ</button>
    </form>
</div>

</body>
</html>