<?php
session_start();

session_destroy(); //clears data for the next users information and clears the Search 

header("Location: KaraokeMain.php"); // returns to main
exit;
?>