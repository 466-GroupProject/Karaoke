<body>

<?php
//database
$host = 'courses';
$dbname = 'z1979224';
$username = 'z1979224';
$password = '2001Oct19';
//connect or print error
$dsn = "mysql:host=$host;dbname=$dbname";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

function drawTable($rows){

	echo "<table id='newSong' border=2 cellspacing=3 style='width:20%'>";
	echo "<colgroup> <col span='20' style='background-color:white'> </colgroup>";
	echo "<tr>";
	foreach(array_keys($rows[0]) as $heading){
		echo "<td><button onclick='sortTable(0)'><strong>$heading<strong></button></td>";
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

function drawTable2($rows){

	echo "<table id='newSong' border=2 cellspacing=3 style='width:20%'>";
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

function drawSongTable($rows)
{
  echo "<table id='newSong' border=2 cellspacing=3 style='width:20%'>";
  echo "<colgroup> <col span='20' style='background-color:white'> </colgroup>";
  echo "<tr>";
  foreach($rows[0] as $Key => $item )
    {
    echo "<td> <form action='SearchSong.php' method='GET'><input type='Submit' name='sort' value='$Key'></form></td>";
  }

  echo "</tr>";
  foreach($rows as $row)
    {
    echo "<tr>";
    foreach($row as $col) 
        {
      echo "<td>$col</td>";
    }
    echo "</tr>";
  }
  echo " </tr>";
  echo "</table>";
}

function drawContribTable($rows)
{
  echo "<table id='newSong' border=2 cellspacing=3 style='width:20%'>";
  echo "<colgroup> <col span='20' style='background-color:white'> </colgroup>";
  echo "<tr>";
  foreach($rows[0] as $Key => $item )
    {
    echo "<td> <form action='SearchContrib.php' method='GET'><input type='Submit' name='sort' value='$Key'></form></td>";
  }

  echo "</tr>";
  foreach($rows as $row)
    {
    echo "<tr>";
    foreach($row as $col) 
        {
      echo "<td>$col</td>";
    }
    echo "</tr>";
  }
  echo " </tr>";
  echo "</table>";
}

function formatNum($PNum){
    // Pass phone number in preg_match function
    if(preg_match('/^\+[0-9]([0-9]{3})([0-9]{3})([0-9]{4})$/', $phone, $value)) {
        // Store value in format variable
        $format = $value[1] . '-' . $value[2] . '-' . $value[3];
    }
}

?>

<script>
/*https://www.w3schools.com/howto/howto_js_dropdown.asp*/
function DropDownNames() {
  document.getElementById("DropDownNames").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdownC");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

  </body>
</html>