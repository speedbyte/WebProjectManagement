<?php
	//Verbindung aufbauen
	$mysqli = new mysqli('127.0.0.1', 'root', 'dominik1234', 'dominik');
	
	//check ob Verbindungsaufbau erfolgreich war
	if(!$mysqli->connect_errno){
		echo "Verbindung aufgebaut1 <br>";
	}
	else {
		echo "Verbindung nicht aufgebaut1 <br>";
	}

	//Test
	echo "1<br>";

	//Zugriff auf Get-variablen
	$info = $_GET['info'];

	
	//Tabelle fuellen
	$fill = "INSERT INTO info (info) 
	VALUES ('$info')";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($fill)) {
   	 echo "query abfrage failed.<br>";
	}

	//Test
	echo "2<br>";	

	

	header('Location: index.php');

	// The script will automatically free the result and close the MySQL
	// connection when it exits, but let's just do it anyways
	$result->free();
	$mysqli->close();
?>
