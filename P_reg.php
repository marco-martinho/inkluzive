<?php
//hier werden neue Users registriert (insert)
include("P_db.php");
//-------------------------------------
$ln 	= $_POST["ln"];		//Feld lastname in form
$fn 	= $_POST["fn"];		//Feld firstname in form
$un 	= $_POST["un"];		//Feld username in form
$pwd 	= $_POST["pwd"];	//Feld password in form
$ort 	= $_POST["city"];	//Feld city in form
$land 	= $_POST["country"];	//Feld country in form
//-------------------------------------
//Feld pic
//				$_FILES["nameInForm"]["vordefinierter Wert"];
$bild		=	$_FILES["pic"]["name"];			//Name der Datei
$size		=	$_FILES["pic"]["size"];			//Größe der Datei
$typ		=	$_FILES["pic"]["type"];			//Dateityp
$tmp		=	$_FILES["pic"]["tmp_name"];		//temporärer Dateiname
//-------------------------------------
//wohin soll das Bild gespeichert werden?
//		uwe.jpg
//		images/uwe.jpg
$ziel = ORDNER.$bild;
//--------------------------------------
//NUR jpg, png, gif und maxGröß ist <= MAXSIZE (steht in db.php)
if( ($typ=="image/gif" || $typ=="image/png" || $typ=="image/jpeg" || $bild=="")&&($size <= MAXSIZE) )
{
	//wenn alles ok, dann die Daten in Tabelle users einfügen
	//------------------------------
	if(isset($bild) && $bild != "")
	{
		$sql = "insert into users (firstname, lastname, username, password, city, country, photo, confirmed)
														values('$ln','$fn','$un','$pwd','$ort','$land',0,'$bild')";
		//Bild in den Ordner images kopieren
		move_uploaded_file($tmp,$ziel);
	}
	else
	{
		$sql = "insert into users (nachname, vorname, username, kennwort, city, confirmed, bild)
														values('$nn','$vn','$bn','$pwd','$ort',0,NULL)";
	}
	//-----------------------------
	mysqli_query($con,$sql) or die("kein insert");
	//-----------------------------
	header("Location: index.php?go=neu&hinweis=Neu anmeldung war Erfolgreich");
	
}
else
{
	header("Location: index.php?go=neu&hinweis=Datei nicht ok");
}




?>