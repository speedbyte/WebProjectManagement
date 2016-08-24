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
		<a href="team.php" title="Das Team">Das Team </a>
		<br><br>
		<b>n&aumlchstes Treffen: </b>24.08.2016
		<br><br>
		<b>wichtige Infos: </b> <br>
		
		-Posterinhalte sammeln <br>
		-Praesentation erstellen
		<p id="infos"></p>
		
	<?php 
	session_start();

	if (isset($_SESSION['login'])){

		echo '<input type="text" name="info" id="info">';
		
		echo '<button onclick="myFunction()">Info hinzuf&uumlgen</button>';

		echo '<script>';
		echo 'function myFunction() {
		    document.getElementById("infos").innerHTML = "-" +document.getElementById("info").value;
		}';
		echo '</script>';
	}	
	?>
	</navigation>
</body>
