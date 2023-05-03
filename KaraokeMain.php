<html><head><title>Karaoke</title></head><body>
 
<?php
    include("library.php");
    include("Styles.php");
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 style="text-align: center">Welcome To Group 302 Karaoke</h1> <br>

<div class="btn-group" style="width:100%">

    <form action="CreateAccount.php" method='POST'>
        <button style="margin-right: 100px;" class="button1" type="Submit">Sign Up</button>
    </form>

    <form action="DJInterface.php" method='POST'>
        <button type="Submit" class="button3" style="margin-right: 10px;" >I'm The DJ</button>
    </form>

    <div class="button2">
        <button style="margin-right: 10px;" onclick="DropDownNames()" class="dropbtn" name="existing">Choose Existing</button>
        <div id="DropDownNames" class="dropdownC">
            <form action="choosesearch.php" method='POST'>
                <?php
                    
                    $sql= "SELECT PhoneNum, UsersID, Balance FROM Users ORDER BY UsersID ASC"; 
                    $pdo = new PDO($dsn, $username, $password, $options);
                    
                    foreach ($pdo->query($sql) as $row){
                        $PhoneNum = $row['PhoneNum'];
                        $IDNum = $row['UsersID'];
                        $Bal = $row['Balance'];
                        echo "<button name='PhoneNumPicked' value='$PhoneNum$IDNum'> $row[PhoneNum]</button>";
                    }
                    
                ?>
            </form>
        </div>
    </div>     

</div>

</body>
</html>