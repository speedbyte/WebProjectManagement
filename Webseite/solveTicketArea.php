<!doctype html>
<head>
	<header>
		<h1>PiSense mit Quadrocopter</h1>
		<h3>Ticketsystem</h3>
	</header>
	<?php include ("header.php"); ?>
</head>

<body>
	<content>
	
	<p> <b>Folgende Tickets wurden erstellt:</b></p>
	
	
	
	<form action="solveTicket.php" method="GET">	
		<label for="username">Username Ticketersteller: </label>
		<input type="text" name="usernameTicketersteller" value="TODO: name aus db laden"><br>
		<label for="username">Username Ticketbearbeiter: </label>
		<input type="text" name="usernameTicketbearbeiter"><br><br>
		<label for="problem">Problem: </label><br>
		<textarea cols="35" rows="4" name="problem">
		TODO: problem aus db laden
		</textarea><br>
		<br>
		<label for="loesung">L&oumlsung: </label><br>
		<textarea cols="35" rows="4" name="loesung">
		L&oumlsungsvorschlag bitte eintragen!
		</textarea><br><br>
		<input type="submit" value="Ticket beantworten">
	</form>
		
	</content>


	<?php include ("footer.php"); ?>
</body>

