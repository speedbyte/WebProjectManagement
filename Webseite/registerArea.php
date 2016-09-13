<!doctype html>
<head>
	<header>
		<h1>PiSense mit Quadrocopter</h1>
			<h3>Arbeitsbereich Embedded System</h3>
			<h3>Vikas Agrawal</h3>
	</header>
	<?php include ("header.php"); ?>
</head>

<body>

		<br>
		<form action="register.php" method="GET">
	
			<label for="firstname"> firstname</label>
			<input type="text" name="firstname" id="firstname" required>
		
			<br>
		
			<label for="lastname"> lastname</label>
			<input type="text" name="lastname" id="lastname" required>
			
			<br>
		
			<label for="loginname"> loginname</label>
			<input type="text" name="loginname" id="loginname" required>
	
			<br>
			
			<label for="password"> password</label>
			<input type="password" name="password" id="password" required>

			<br>

			<input type="submit" value="register">
		</form>
	
		<a href="login.html" title="Noch kein Account? Hier klicken zum registrieren!"> Schon ein Account? Klicke hier um dich <b>anzumelden! </a>
		
<?php include ("footer.php"); ?>
</body>
