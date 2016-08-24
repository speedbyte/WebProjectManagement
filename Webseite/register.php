<?php

// Verbindung aufbauen
$login = mysqli_connect("localhost", "root", "dominik1234", "dominik");
if(!$login)
{
  exit("Die Verbindung konnte nicht hergestellt werden");
}

//Zugriff auf Get-variablen
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$loginname = $_GET['loginname'];
$password = $_GET['password'];

// erstelle Tabelle register
$sql = "CREATE TABLE register (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
loginname VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

//ueberpruefe ob tabellenerstellung erfolgreich
$login->query($sql);

//Tabelle fuellen
$fill = "INSERT INTO register (firstname, lastname, loginname, password) 
VALUES ('$firstname', '$lastname', '$loginname', '$password')";

$login->query($fill);

echo '1';
header('Location: index.php');





?>
