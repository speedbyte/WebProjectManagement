<head>
	<title>PiSense mit Quadrocopter</title>
</head>

<body>
<link rel="stylesheet" href="style.css">
	
	
	<login>
	<?php 
		session_start();

	if (isset($_SESSION['login'])){
		echo '<a href="logout.php" title="logout">logout</a>'; }
	else { echo '<a href="loginArea.php" title="login">login</a>'; }
	
	?>
		
		
	</login>
	
	
	<navigation>
		<a href="createTicketArea.php"><input type="submit" value="Ticket erstellen" ></a>
		<br>
		<?php 
		session_start();

	if (isset($_SESSION['login'])){
		echo '<a href="solveTicketArea.php"><input type="submit" value="Tickets bearbeiten" ></a> <br>'; }

	?>
		
		<br>
		
		<a href="index.php" title="index"> Startseite</a>
		<br><br>
		<b>Arbeitsbereiche:</b> <br>
		<a href="embedded.php" title="embedded">Embedded System</a><br>
		<a href="gui.php" title="gui">GUI </a><br>
		<a href="database.php" title="database">Database </a><br>
		<a href="applikation.php" title="applikation">Applikation </a><br>
		<a href="webprojectmanagment.php" title="webprojectmanagment">Webprojectmanagment </a><br>
		<br>
		
		<b>sonstiges:</b><br>
		<a href="architektur.php" title="architekur">Architektur </a><br>
		<a href="todo.php" title="todo">ToDo </a><br>
		<br>
		<b>n&aumlchstes Treffen: </b> <br>


<?php			
//Verbindung aufbauen
	$mysqli = new mysqli('127.0.0.1', 'root', 'dominik1234', 'dominik');
	

	//check ob Verbindungsaufbau erfolgreich war
	if(!$mysqli->connect_errno){
	}
	else {
		echo "Verbindung konnte nicht aufgebaut werden. <br>";
	}


	//SQL abfrage vorbereiten
	$sql = "SELECT * FROM time";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}


	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "kein neuen Termin vorhanden";
	}else{
		while($actor = $result->fetch_assoc()){
		echo "-" .$actor['time'];
	
	if (isset($_SESSION['login'])){
	echo '<a href="timedelete.php/?time=' . $actor['time'] . '"' . 'title="delete">[x] </a>' . '<br>';
	}




		}
	}


	session_start();

	if (isset($_SESSION['login'])){
		echo '<form action="timechange.php" method="GET">';
		echo '<input type="text" name="termin">';
		echo '<input type="submit" value="Termin hinzufuegen">';
		echo '</form>';
	}
	

	

	?>





		<br><br>
		<b>wichtige Infos: </b> <br>
		
	

<?php			
//Verbindung aufbauen
	$mysqli = new mysqli('127.0.0.1', 'root', 'dominik1234', 'dominik');
	

	//check ob Verbindungsaufbau erfolgreich war
	if(!$mysqli->connect_errno){
	}
	else {
		echo "Verbindung konnte nicht aufgebaut werden. <br>";
	}


	//SQL abfrage vorbereiten
	$sql = "SELECT * FROM info";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}


	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine neuen Infos";
	}else{
		while($actor = $result->fetch_assoc()){
	echo "-" .$actor['info'];

	if (isset($_SESSION['login'])){
	echo '<a href="delete.php/?info=' . $actor['info'] . '"' . 'title="delete">[x] </a>' . '<br>';
	}
	else{
	echo '<br>';	
	}
	}
	}


	session_start();

	if (isset($_SESSION['login'])){
		echo '<form action="info.php" method="GET">';
		echo '<input type="text" name="info">';
		echo '<input type="submit" value="Info hinzufuegen">';
		echo '</form>';
	}
	
	?>

	
		
		
	



	</navigation>
</body>
