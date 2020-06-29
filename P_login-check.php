<?php
include("P_db.php");  
//-----------------------------

$un = $_POST["un"];
$pwd = $_POST["pwd"];	

//------------------------------ 

$sql = "SELECT * FROM users
							WHERE
						username='$un'
							AND
						password='$pwd' ";
$query = mysqli_query($con,$sql) or die("kein select");

//------------------------------

if(mysqli_num_rows($query)==true)
{
	//wenn alles gut, dann.....
	$datensatz = mysqli_fetch_array($query);
	
	//Spalte last_login aktualisieren
	$sql1 = "UPDATE users SET lastlogin = NOW()
	                            WHERE uid = ".$datensatz["uid"];	
	
	mysqli_query($con,$sql1) or die("kein update");
	
	//wenn Anmeldung erfolgreich dann session starten
	session_start();
	$_SESSION["uid"] = $datensatz["uid"];
	$_SESSION["username"] = $datensatz["username"];
	$_SESSION["lastname"] = $datensatz["lastname"];
	header("Location: index.php?go=Uhome");
	
}


else
{
	//wenn Fehler, dann geh zu index zurück und gib eine Meldung aus
	header("Location: index.php?go=log&id=user");
    echo "<p class='lfail'>Login failed</p>";
}
?>



















