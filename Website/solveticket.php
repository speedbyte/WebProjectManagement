<?php
	
echo "<h1> Folgendes Ticket wurde beantwortet </h1>";	
$usernameTicketbearbeiter = $_GET["usernameTicketbearbeiter"];
$usernameTicketersteller = $_GET["usernameTicketersteller"];
echo "<b>Ticketersteller: </b>" . $usernameTicketersteller ."<br>";
echo "<b>Ticketbearbeiter: </b>" . $usernameTicketbearbeiter."<br>";
echo "<br>";
echo "<b>Timestamp:</b> ";
date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$datum = date("d.m.Y",$timestamp);
$uhrzeit = date("H:i",$timestamp);
echo $datum," - ",$uhrzeit," Uhr"."<br>";
echo "<br>";
echo "<b>Problemschilderung: </b>";
echo "<br>";
$problem = $_GET["problem"];
echo $problem;
echo "<br>";
echo "<br>";
echo "<b> Lösungsvorschlag: </b> <br>";
$loesung = $_GET["loesung"];
echo $loesung;
echo "<br><br>";
echo '<a href="index.html"><input type="submit" value="zurück zur Startseite"> </a>';	
	
?>