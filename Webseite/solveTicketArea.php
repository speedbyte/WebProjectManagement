<!doctype html>
<head>
	<header>

<embed width="100px" height="100px" data="marcel.png" src="marcel.png"> </embed>
<embed width="100px" height="100px" data="phil.png" src="phil.png"> </embed>
<embed width="100px" height="100px" data="jascha.png" src="jascha.png"> </embed>
<embed width="100px" height="100px" data="chris.png" src="chris.png"> </embed>
<embed width="100px" height="100px" data="domi.png" src="domi.png"> </embed>
<embed width="100px" height="100px" data="vikas.png" src="vikas.png"> </embed>

		<h1>PiSense mit Quadrocopter</h1>
		<h3>Ticketsystem</h3>
	</header>
	<?php include ("header.php"); ?>
</head>

<body>
	<content>
	
<?php
	echo '<p> <b>Folgende Tickets wurden erstellt:</b></p>';
	
	
	//Verbindung aufbauen
	$mysqli = new mysqli('127.0.0.1', 'root', 'dominik1234', 'dominik');
	
	//check ob Verbindungsaufbau erfolgreich war
	if(!$mysqli->connect_errno){
		
	}
	else {
		echo "Verbindung nicht aufgebaut1 <br>";
	}

	


	//SQL abfrage vorbereiten
	$sql = "SELECT * FROM ticket2";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}


	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine aktuellen Tickets";
	}else{
		while($actor = $result->fetch_assoc()){
		
	echo '<b>Ticketersteller:</b> <br>';	
	
	
	
	echo '<form action="solveTicket.php" method="GET">';


	echo '<label for="Vorname">Vorname: </label>';
	echo '<input type="text" name="firstnameTicketersteller" id="firstnameTicketersteller" value="' .$actor['firstnameTicketersteller'] . '"<br><br>';
	echo '<label for="Nachname">Nachname: </label>';
	echo '<input type="text" name="lastnameTicketersteller" id="lastnameTicketersteller"value="' .$actor['lastnameTicketersteller'] . '"<br><br>';

	echo '<label for="username">Username: </label>';
	echo '<input type="text" name="usernameTicketersteller" id="usernameTicketersteller"value="' .$actor['usernameTicketersteller'] . '"<br><br><br>';

	echo '<b>Ticketbearbeiter:</b> <br>';	

	echo '<label for="Vorname">Vorname: </label>';
	echo '<input type="text" name="firstnameTicketbearbeiter" id="firstnameTicketbearbeiter" value="' .$actor['firstnameTicketbearbeiter'] . '"<br><br>';
	echo '<label for="Nachname">Nachname: </label>';
	echo '<input type="text" name="lastnameTicketbearbeiter" id="lastnameTicketbearbeiter"value="' .$actor['lastnameTicketbearbeiter'] . '"<br><br>';

	echo '<label for="username">Username: </label>';
	echo '<input type="text" name="usernameTicketbearbeiter" id="usernameTicketbearbeiter" value="' .$actor['usernameTicketbearbeiter'] . '"<br><br>';
	
		

	echo 'Folgendes Problem liegt vor:<br>';
	echo '<textarea cols="35" rows="4" name="Problem1" id="Problem1">';
	echo $actor['problem'];
	echo '</textarea><br>';


	
	echo '<label for="loesung">Loesung: </label><br> <textarea cols="35" rows="4" name="Loesung" id="Loesung">';
	echo $actor['loesung'];
	echo '</textarea><br>';
	echo '<input type="submit" value="Ticket bearbeiten">';


	echo '<br><br><br><br>';
	echo '</form>';



	}
	}
?>
		
	</content>


	<?php include ("footer.php"); ?>
</body>

