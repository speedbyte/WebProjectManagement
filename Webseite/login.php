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
	$loginname = $_GET['loginname'];
	$password = $_GET['password'];

	
	//SQL abfrage vorbereiten
	$sql = "SELECT id, firstname, lastname FROM `register` WHERE loginname = '$loginname' AND password = '$password'";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}
	

	//check ob acc vorhanden
	if ($result->num_rows === 0) {
   		header('Location: loginArea.php');
  	 	exit;
	}else{
		session_start();
		$_SESSION['login'] = true;
	header('Location: index.php');
	}
	


	// The script will automatically free the result and close the MySQL
	// connection when it exits, but let's just do it anyways
	$result->free();
	$mysqli->close();

 
?>

