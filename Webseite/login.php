<?php

// Verbindung aufbauen
$login = mysqli_connect("localhost", "root", "dominik1234", "dominik");
if(!$login)
{
  exit("Die Verbindung konnte nicht hergestellt werden");
}

//Zugriff auf Get-variablen
$loginname = $_GET['loginname'];
$password = $_GET['password'];


if($loginname == 'admin' and $password == 'admin123')
	{
	session_start();
	$_SESSION['login'] = true;
	}

if(isset($_SESSION['login']))
	{
	header('Location: index.php');
	}
else 
	{
	header('Location: loginArea.php');
	}


//$sql = "SELECT * FROM register";
//ueberpruefe ob eintragfindung erfolgreich
//if ($login->query($sql) === TRUE) {
//echo "find erfolgreich";
//} else {
//    echo "find error";
//}


 
?>

