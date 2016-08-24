<?php
	
echo "<h1> Folgendes Ticket wurde erstellt </h1>";	
$username = $_GET["username"];
echo "<b>Username: </b>" . $username;
echo "<br>";
echo "<b>Timestamp:</b> ";
date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$datum = date("d.m.Y",$timestamp);
$uhrzeit = date("H:i",$timestamp);
echo $datum," - ",$uhrzeit," Uhr";
echo "<br>";
echo "<b>Problemschilderung: </b>";
echo "<br>";
$problem = $_GET["problem"];
echo $problem;
echo "<br>";
echo "<br>";
echo '<a href="index.php"><input type="submit" value="zurück zur Startseite"> </a>';	
	
?>
