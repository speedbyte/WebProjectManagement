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
	
<p> <b>Bitte formulieren Sie ihr Problem </b></p>
	
	
	
	<form action="createTicket.php" method="GET">	
		<label for="Vorname">Vorname: </label>
		<input type="text" name="firstnameTicketersteller" id="firstnameTicketersteller"><br>
		<label for="Nachname">Nachname: </label>
		<input type="text" name="lastnameTicketersteller" id="lastnameTicketersteller"><br>

		<label for="username">Username: </label>
		<input type="text" name="usernameTicketersteller" id="usernameTicketersteller" ><br><br>

		<label for="problem">Problem: </label><br>
		<textarea cols="35" rows="4" name="problem" id="problem">
		Bitte schildern Sie ihr Problem!
		</textarea><br>
		<br>
		<input type="submit" value="Ticket einreichen">
	</form>
		
		
	</content>


	<?php include ("footer.php"); ?>
</body>

