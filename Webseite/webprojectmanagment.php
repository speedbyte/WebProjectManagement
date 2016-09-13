<!doctype html>
<head>
	<header>
		<h1>PiSense mit Quadrocopter</h1>
		<h3>Webprojectmanagment</h3>
		<h3>Dominik Heinrich</h3>
	</header>
	<?php include ("header.php"); ?>
</head>

<body>
	<content>
		<center><h1>Webprojectmanagment</h1> </center>
		
		
			
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
	echo "1";

	
	//SQL abfrage vorbereiten
	$sql = "SELECT id, firstname, lastname FROM `register` WHERE id = 1";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.";
	}
	
	//Test
	echo "2";

	//check ob actor id vorhanden
	if ($result->num_rows === 0) {
   	 echo "We could not find a match for ID 1, sorry about that. Please try again.";
  	  exit;
	}
	
	
	$actor = $result->fetch_assoc();
	echo "Sometimes I see " . $actor['firstname'] . " " . $actor['lastname'] . " on my iPAD.";


	echo "3";

	// Now, let's fetch five random actors and output their names to a list.
	// We'll add less error handling here as you can do that on your own now
	$sql = "SELECT id, firstname, lastname FROM `register` ORDER BY rand() LIMIT 5";
	if (!$result = $mysqli->query($sql)) {
   	 echo "Sorry, the website is experiencing problems.";
   	 exit;
	}


	// Print our 5 random actors in a list, and link to each actor
	while ($actor = $result->fetch_assoc()) {
  	  echo $actor['firstname'] . " " . $actor['lastname'] . "<br>";
	}


	// The script will automatically free the result and close the MySQL
	// connection when it exits, but let's just do it anyways
	$result->free();
	$mysqli->close();





	?>
			
	</content>


	<?php include ("footer.php"); ?>
</body>

