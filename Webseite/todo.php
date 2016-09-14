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
		<h3>Todo</h3>
	</header>
	<?php include ("header.php"); ?>
</head>

<body>
	<content>
	<h2><center> Folgende Aufgaben waren zu erledigen: </center> </h2><br><br>


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
	$sql = "SELECT * FROM todo WHERE bereich='Webprojectmanagment'";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}


	echo '<p><b>Arbeitsbereich: Webprojectmanagment</b></p>';

	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine neuen Aufgaben vorhanden";
	}else{
		while($actor = $result->fetch_assoc()){
	echo '-'  . $actor['aufgabe']; 
		
	session_start();
	if (isset($_SESSION['login'])){
		
		echo '<a href="removeaufgabe.php/?aufgabe='.$actor['aufgabe'] .'&'. 'bereich=' . $actor['bereich'] .'"'. 'title="delete">[x] </a>' . "<br>";
	}
	else {
	echo '<br>';
	}

	}
	}

	echo '<br>';
	echo '<br>';


	//SQL abfrage vorbereiten
	$sql = "SELECT * FROM todo WHERE bereich='Embedded System'";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}

	echo '<p><b>Arbeitsbereich: Embedded System</b></p>';

	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine Aufgaben vorhanden";
	}else{
		while($actor = $result->fetch_assoc()){
	echo '-'  . $actor['aufgabe']; 
		
	session_start();
	if (isset($_SESSION['login'])){
		echo '<a href="removeaufgabe.php/?aufgabe='.$actor['aufgabe'] .'&'. 'bereich=' . $actor['bereich'] .'"'. 'title="delete">[x] </a>' . "<br>";
	}
	else {
	echo '<br>';
	}

	}
	}

	echo '<br>';
	echo '<br>';



//SQL abfrage vorbereiten
	$sql = "SELECT * FROM todo WHERE bereich='Applikation'";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}

	echo '<p><b>Arbeitsbereich: Applikation</b></p>';

	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine Aufgaben vorhanden";
	}else{
		while($actor = $result->fetch_assoc()){
		echo '-'  . $actor['aufgabe']; 
		
	session_start();
	if (isset($_SESSION['login'])){
		echo'<a href="removeaufgabe.php/?aufgabe='.$actor['aufgabe'] .'&'. 'bereich=' . $actor['bereich'] .'"'. 'title="delete">[x] </a>' . "<br>";
	}
	else {
	echo '<br>';
	}

	}
	}

	echo '<br>';
	echo '<br>';


//SQL abfrage vorbereiten
	$sql = "SELECT * FROM todo WHERE bereich='GUI'";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}

	echo '<p><b>Arbeitsbereich: GUI</b></p>';

	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine Aufgaben vorhanden";
	}else{
		while($actor = $result->fetch_assoc()){
		echo '-'  . $actor['aufgabe']; 
		
	session_start();
	if (isset($_SESSION['login'])){
		echo'<a href="removeaufgabe.php/?aufgabe='.$actor['aufgabe'] .'&'. 'bereich=' . $actor['bereich'] .'"'. 'title="delete">[x] </a>' . "<br>";
	}
	else {
	echo '<br>';
	}

	}
	}

	echo '<br>';
	echo '<br>';

//SQL abfrage vorbereiten
	$sql = "SELECT * FROM todo WHERE bereich='Datenbank'";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}

	echo '<p><b>Arbeitsbereich: Datenbank</b></p>';

	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine Aufgaben vorhanden";
	}else{
		while($actor = $result->fetch_assoc()){
	echo '-'  . $actor['aufgabe'];
		
	session_start();
	if (isset($_SESSION['login'])){
		echo'<a href="removeaufgabe.php/?aufgabe='.$actor['aufgabe'] .'&'. 'bereich=' . $actor['bereich'] .'"'. 'title="delete">[x] </a>' . "<br>";
	}
	else {
	echo '<br>';
	}

	}
	}

	echo '<br>';
	echo '<br>';


//SQL abfrage vorbereiten
	$sql = "SELECT * FROM todo WHERE NOT bereich='Embedded System' AND NOT bereich='GUI' AND NOT bereich='Applikation' AND NOT bereich='GUI' AND NOT bereich='Webprojectmanagment' AND NOT bereich='Datenbank'";
	
	//check ob Abfrage erfolgreich war
	if (!$result = $mysqli->query($sql)) {
   	 echo "query abfrage failed.<br>";
	}

	echo '<p><b>sonstige:(konnte nicht zugeordnet werden)</b></p>';

	//check ob info vorhanden
	if ($result->num_rows === 0) {
   		echo "keine Aufgaben vorhanden";
	}else{
		while($actor = $result->fetch_assoc()){
	echo '-'  . $actor['aufgabe'] .' (Aufgabenbereich: ' . $actor['bereich'] .')' ; 
		
	session_start();
	if (isset($_SESSION['login'])){
		echo'<a href="removeaufgabe.php/?aufgabe='.$actor['aufgabe'] .'&'. 'bereich=' . $actor['bereich'] .'"'. 'title="delete">[x] </a>' . "<br>";
	}
	else {
	echo '<br>';
	}

	}
	}

	echo '<br>';
	echo '<br>';



	
	session_start();

	if (isset($_SESSION['login'])){
		echo '<form action="addaufgabe.php" method="GET">';

		echo '<label for="aufgabe"> Aufgabe: </label>';
		echo '<input type="text" name="aufgabe">';
	
		echo '<label for="aufgabenbereich"> Aufgabebereich: </label>';
		echo '<input type="text" name="bereich">';
		echo '<input type="submit" value="hinzufuegen">';

		echo '</form>';
		echo '<br>';
		echo '<b> Hinweis: </b>Bitte achten Sie auf genaue Schreibweise des Arbeitsbereiches.';
		echo '<br>';
		echo '<br>';
	}
	
	?>










<!--

		<br><br><br>

		<p><b>Arbeitsbereich: Webprojectmanagment</b></p>
		<img src="0.png" alt="ampel" width="150" ><br>
		<input type="checkbox" name="erledigt4">	Navigationsbereich auslagern<br>
		<input type="checkbox" name="erledigt5">	diverse Reiter entfernen und hinzuf&uumlgen <br>
		<input type="checkbox" name="erledigt5">	Version management mit Git <br>
				<input type="checkbox" name="erledigt5">	Architekturdokument mit Grpahviz/DOT <br>
				<input type="checkbox" name="erledigt5">	Namen der Vorabeiter in Poster einf&uumlgen <br>
		<input type="checkbox" name="erledigt1">	<b>mysql datenbank zugriff bekommen</b><br>
		

			
			
		<br>
		

		<p><b>Arbeitsbereich: Embedded System</b></p>
		<img src="0.png" alt="ampel" width="150" ><br>
		<input type="checkbox" name="erledigt1"> Drohne zum landen bringen<br>
		<input type="checkbox" name="erledigt1"> Pr&aumlsentationsteil abgeben <br>
		<input type="checkbox" name="erledigt1"> Absprache mit Applikationsteam bzgl. Apptestung <br>
		<br>
	
		<p><b>Arbeitsbereich: Applikation</b></p>
		<img src="0.png" alt="ampel" width="150" ><br>
		<input type="checkbox" name="erledigt1"> Applikation erstellen<br>
		<input type="checkbox" name="erledigt1"> Pr&aumlsentationsteil abgeben <br>
			<input type="checkbox" name="erledigt1"> Absprache mit ES-Team bzgl. Apptestung
		<br>
		<input type="checkbox" name="erledigt1">Android APP bereitstellen und mit Buttons wie Test Motoren versehen<br>
		<input type="checkbox" name="erledigt1">Version management mit Git<br>

		
		<p><b>Arbeitsbereich: GUI</b></p>
		<img src="0.png" alt="ampel" width="150" ><br>
		<input type="checkbox" name="erledigt1"> Pr&aumlsentationsteil abgeben <br>
					<input type="checkbox" name="erledigt1"> Absprache mit DB-Team bzgl. Daten&uumlbertragung <br>
		
		<br>
		<p><b>Arbeitsbereich: Datenbanken</b></p>
		<img src="0.png" alt="ampel" width="150" ><br>
	<input type="checkbox" name="erledigt1"> Pr&aumlsentationsteil abgeben <br>
	<input type="checkbox" name="erledigt1"> Absprache mit GUI-Team bzgl. Daten&uumlbertragung <br>
		<br>
		
-->

	</content>


	<?php include ("footer.php"); ?>
</body>

