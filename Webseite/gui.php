<!doctype html>
<head>
	<header>
		<h1>PiSense mit Quadrocopter</h1>
		<h3>Graphical User Interface</h3>
		<h3>Philipp Gackstatter</h3>
	</header>
	<?php include ("header.php"); ?>
</head>

<body>
	<content>
		
		<center><h1> GUI </h1></center>
		<h2> Funktionsweise </h2>
		<p>Die GUI liest aus der Datenbank die gespeicherten Sensordaten aus und stellt diese in Graphen dar. Dabei werden aus Konfigurationsdateien die Details f&uumlr Serverkommunikation, Bezeichnung der Daten und Dimensionen der GUI gelesen. Diese Dateien sind importierbar und k&oumlnnen f&uumlr verschiedene Nutzf&aumllle angepasst werden. Der Nutzer hat die M&oumlglichkeit Daten auszublenden, die dann automatisch auf gute Sichtbarkeit skaliert werden. Au&szligerdem gibt es eine Vielzahl von Optionen durch welche die Anzeige vom Benutzer verbessert werden kann, wie etwa das verschieben, zoomen und pausieren. </p>

	<h2>	Meine Ver&aumlnderungen/Neuerungen </h2>
<p>
		Meine Aufgabe war es die Daten aus der Datenbank auszulesen und anzuzeigen. Zuerst kam die Implementierung der Konfigurationsdateien, also das erstellen, auslesen und importieren. Danach folgte die automatische Anpassung der Graphen. Diese lagen zuvor &uumlbereinander und konnten zu- und weggeschaltet werden. Um eine &Uumlberlagerung zu vermeiden, musste die gesamte Skala in die zugeh&oumlrigen Skalen der aktuell zugeschalteten Graphen unterteilt werden. Schlie&szliglich folgte das auslesen der Daten aus der Datenbank. Um eine Echtzeit-Anzeige von Daten zu erm&oumlglichen die auch in Echtzeit in die Datenbank geschrieben werden, muss die Datenbank immer wieder ausgelesen werden um auf neue Daten &uumlberpr&uumlft zu werden. Da noch keine Dokumentation des Projekts vorhanden war, erstellte ich diese in Javadoc.
		Neben diesen &uumlbergreifenden Aufgaben gab es auch kleine &Aumlnderungen, wie etwa Fehlerbehebungen, l&oumlschen von nicht mehr ben&oumltigten Funktionen, neuordnen von Code und Projektdateien, &aumlnderungen an der GUI und verbessern der Usability.
	</p>
		
		
			<br><center>
			<img src="Oscilloscope.png" alt="Oscilloscope">
		</center><br>
		
		<p>F&uumlr die GUI Programmierung m&oumlchten wir uns bei den Vorarbeitern Alexander Deitche und Juan-Carlos Barradas-Palmeros bedanken.</p>
		
	</content>


	<?php include ("footer.php"); ?>
</body>

