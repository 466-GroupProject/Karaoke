<html><head><title>Create an Account</title></head>

<?php
    include("library.php");
    include("Styles.php");
?>

<body>
<h1 style="text-align: center">Sign Up Form</h1>

<form action="CreateAccount.php" method='POST'>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>

    <label for="StageName"><b>StageName</b></label>
    <input type="text" placeholder="Enter StageName" name="StageName" required>

    <br><br>

    <label for="Balance"><b>Balance</b></label>
    <input type="number" min="0" max="1000" placeholder="$0-1000" name="Balance"required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Example@gmail.com" name="Email" required>

    <label for="PhoneNumber"><b>PhoneNumber</b></label>
    <input type="tel" id="phone" name="PhoneNumber" pattern = "[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-453-6780" required>

    <br><br>
    
    <button> Sign Up </button>
</form>

<form action="KaraokeMain.php" method='POST'>
    <button onclick="history.go(-1);" > Back </button>
</form>

<?php
    
    if(!empty($_POST["Name"])  && !empty($_POST["StageName"]) && !empty($_POST["Balance"]) && !empty($_POST["Email"]) && !empty($_POST["PhoneNumber"]) ){

        $sql = "SELECT * FROM Users WHERE PhoneNum = ? OR Email = ?";
        $pdo = new PDO($dsn, $username, $password);
        $statement = $pdo->prepare($sql);
        $statement->execute([$_POST["PhoneNumber"], $_POST["Email"]]);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        $conditions1 = strlen($_POST["Name"]) <= 50 && strlen($_POST["StageName"]) <= 50;
        $conditions2 = preg_match('~[0-9]+~', $_POST["Name"]) == 0;
        $conditions3 = empty($rows) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}+$/', $_POST["PhoneNumber"]) == 1 && strlen($_POST["Email"]) <= 50;

        if($conditions1 && $conditions2 && $conditions3){ 
            $Name = $_POST["Name"];
            $PhNum = $_POST["PhoneNumber"];
            $SName = $_POST["StageName"];
            $Email = $_POST["Email"];
            $Balance = $_POST["Balance"];

            $sql = 'INSERT INTO Users (Name,StageName,Balance,Email,PhoneNum) VALUES (?,?,?,?,?)';
            try {
                $pdo = new PDO($dsn, $username, $password, $options);
                $statement = $pdo->prepare($sql);
                $statement->execute([$Name,$SName,$Balance,$Email,$PhNum]);
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<meta http-equiv="refresh" content="0">';
                echo '<script> alert("Your information was added!") </script>';
            } catch (PDOException $e) {
                die("<p>Query failed: {$e->getMessage()}</p>\n");
            }
            
        }else{
            echo '<script> alert("Enter vaid information and follow the format!") </script>';
        }
    }

?>

</body>
</html>