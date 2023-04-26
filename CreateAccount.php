<html><head><title>Create an Account</title></head>

<body>
<h1 style="text-align: center">Sign Up Form</h1>

<form action="KaraokeMain.php" method='POST'>
    <label for="ID"><b>ID</b></label>
    <input type="text" placeholder="Enter ID" name="ID" required>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>

    <label for="StageName"><b>StageName</b></label>
    <input type="text" placeholder="Enter StageName" name="StageName" required>

    <br><br>

    <label for="Balance"><b>Balance</b></label>
    <input type="text" placeholder="Enter a Balance" name="Balance"required><label>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required>

    <label for="PhoneNumber"><b>PhoneNumber</b></label>
    <input type="text" placeholder="Enter PhoneNumber" name="PhoneNumber" required>

    <br><br>

    <button type="button">Cancel</button>
    <button type="submit">Sign Up</button>
</form>

<?php
    include("library.php");
    include("Styles.php");

    if( !empty($_POST["ID"]) && !empty($_POST["Name"])  && !empty($_POST["StageName"]) 
        && !empty($_POST["Balance"]) && !empty($_POST["Email"]) && !empty($_POST["PhoneNumber"])){

        $ID = $_POST["ID"];
        $Name = $_POST["Name"];
        $PhNum = $_POST["PhoneNumber"];
        $SName = $_POST["StageName"];
        $Email = $_POST["Email"];
        $Balance = $_POST["Balance"];

        $sql = 'INSERT INTO Users VALUES (?,?,?,?,?,?)';
        try {
            $pdo = new PDO($dsn, $username, $password, $options);
            $statement = $pdo->prepare($sql);
            $statement->execute([$ID,$Name,$SName,$Balance,$Email,$PhNum]);
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo '<meta http-equiv="refresh" content="0">';
        } catch (PDOException $e) {
            die("<p>Query failed: {$e->getMessage()}</p>\n");
        }
    }

 /*$ID,$Name,$SName,$Balance,$Email,$PhNum*/
?>

</body>
</html>