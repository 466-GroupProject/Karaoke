<body>

<?php
//database

//connect or print error
$dsn = "mysql:host=$host;dbname=$dbname";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

function drawTable($rows){

	echo "<table border=2 cellspacing=3 style='width:20%'>";
	echo "<colgroup> <col span='20' style='background-color:white'> </colgroup>";
	echo "<tr>";
	foreach(array_keys($rows[0]) as $heading){
		echo "<td><strong>$heading<strong></td>";
	}
	echo "</tr>";
	foreach($rows as $row){
		echo "<tr>";
		foreach($row as $col) {
			echo "<td>$col</td>";
		}
		echo "</tr>";
	}
	echo " </tr>";
	echo "</table>";
}

?>
  </body>
</html>