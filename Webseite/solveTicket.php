<?php
	
echo "<h1> Folgendes Ticket wurde beantwortet </h1>";	
$firstnameTicketbearbeiter = $_GET["firstnameTicketbearbeiter"];
$lastnameTicketbearbeiter = $_GET["lastnameTicketbearbeiter"];
$usernameTicketbearbeiter = $_GET["usernameTicketbearbeiter"];

$firstnameTicketersteller = $_GET["firstnameTicketersteller"];
$lastnameTicketersteller = $_GET["lastnameTicketersteller"];
$usernameTicketersteller = $_GET["usernameTicketersteller"];


echo "<b>Ticketersteller: </b><br>";
echo "Firstname: " .$firstnameTicketersteller . "<br>";
echo "Lastname: " .$lastnameTicketersteller . "<br>";
echo "Username: " .$usernameTicketersteller . "<br><br>";


echo "<b>Ticketbearbeiter: </b><br>";
echo "Firstname: " .$firstnameTicketbearbeiter . "<br>";
echo "Lastname: " .$lastnameTicketbearbeiter . "<br>";
echo "Username: " .$usernameTicketbearbeiter . "<br>";

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
$problem = $_GET["Problem1"];
echo $problem;
echo "<br>";
echo "<br>";
echo "<b> Lösungsvorschlag: </b> <br>";
$loesung = $_GET["Loesung"];
echo $loesung;




	//Verbindung aufbauen
	$mysqli = new mysqli('127.0.0.1', 'root', 'dominik1234', 'dominik');
	
	//check ob Verbindungsaufbau erfolgreich war
	if(!$mysqli->connect_errno){
		
	}
	else {
		echo "Verbindung nicht aufgebaut1 <br>";
	}

	
	$delete = "DELETE FROM ticket2 WHERE problem = '$problem'";


	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($delete)) {
   	 echo "query abfrage failed(delete).<br>";
	}



	//Tabelle fuellen
	$fill = "INSERT INTO ticket2 (firstnameTicketersteller, lastnameTicketersteller, usernameTicketersteller, problem, firstnameTicketbearbeiter, lastnameTicketbearbeiter, usernameTicketbearbeiter, loesung)
	VALUES ('$firstnameTicketersteller', '$lastnameTicketersteller', '$usernameTicketersteller', '$problem', '$firstnameTicketbearbeiter', '$lastnameTicketbearbeiter', '$usernameTicketbearbeiter', '$loesung') ";
	
	echo '<br>';
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($fill)) {
   	 echo "query abfrage failed(fill).<br>";
	}


	

echo "<br>";
echo '<a href="index.php"><input type="submit" value="zurück zur Startseite"> </a>';	


// The script will automatically free the result and close the MySQL
	// connection when it exits, but let's just do it anyways
	$result->free();
	$mysqli->close();
	
?>
