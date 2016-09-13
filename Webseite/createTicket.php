<?php
	
echo "<h1> Folgendes Ticket wurde erstellt </h1>";	
//Zugriff auf Get-variablen
	$firstnameTicketersteller = $_GET["firstnameTicketersteller"];
	$lastnameTicketersteller = $_GET["lastnameTicketersteller"];
	$usernameTicketersteller = $_GET["usernameTicketersteller"];
	$problem = $_GET['problem'];
	$time = $_GET['time'];

echo "<b>Firstname: </b>" . $firstnameTicketersteller .'<br>';
echo "<b>Lastname: </b>" . $lastnameTicketersteller;
echo "<br>";
echo "<b>Username: </b>" . $usernameTicketersteller . '<br>';
echo "<br>";
echo "<b>Timestamp:</b> ";
date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$datum = date("d.m.Y",$timestamp);
$uhrzeit = date("H:i",$timestamp);
echo $datum," - ",$uhrzeit," Uhr";
echo "<br>";
echo "<br>";
echo "<b>Problemschilderung: </b>";
echo "<br>";




	//Verbindung aufbauen
	$mysqli = new mysqli('127.0.0.1', 'root', 'dominik1234', 'dominik');
	
	//check ob Verbindungsaufbau erfolgreich war
	if(!$mysqli->connect_errno){
		
	}
	else {
		echo "Verbindung nicht aufgebaut1 <br>";
	}

	
	$firstnameTicketersteller = $_GET["firstnameTicketersteller"];
	$lastnameTicketersteller = $_GET["lastnameTicketersteller"];
	$usernameTicketersteller = $_GET["usernameTicketersteller"];

	
	//Tabelle fuellen
	$fill = "INSERT INTO ticket2 (firstnameTicketersteller, lastnameTicketersteller, usernameTicketersteller, problem, firstnameTicketbearbeiter, lastnameTicketbearbeiter, usernameTicketbearbeiter, loesung)
	VALUES ('$firstnameTicketersteller', '$lastnameTicketersteller', '$usernameTicketersteller', '$problem', '', '', '', '') ";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($fill)) {
   	 echo "query abfrage failed.<br>";
	}
	


	//SQL abfrage vorbereiten
	$sql = "SELECT * FROM ticket2 WHERE firstnameTicketersteller='$firstnameTicketersteller' AND lastnameTicketersteller='$lastnameTicketersteller' AND problem='$problem' LIMIT 1";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}


	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine neuen Infos";
	}else{
		while($actor = $result->fetch_assoc()){
	echo $actor['problem'] . '<br>';


	}
	}





	

	// The script will automatically free the result and close the MySQL
	// connection when it exits, but let's just do it anyways
	$result->free();
	$mysqli->close();


	echo "<br>";
	echo '<a href="index.php"><input type="submit" value="zurück zur Startseite"> </a>';	
	



?>
