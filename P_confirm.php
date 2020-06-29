<?php
//hier werden bestehende Kunden, freigegeben oder gesperrt
include("P_db.php");
//-------------------------------
//Werte von id und proved
$id = $_GET["id"];
$pr = $_GET["proved"];
//echo $id . " " . $pr;
//--------------------------------
$sql = "UPDATE users
					SET
						confirmed = $pr
					WHERE
						uid='$id' ";
mysqli_query($con,$sql) or die("kein update");
//--------------------------------
//Verbindung zum Server und DB schliessen (am Ende)
mysqli_close($con);
header("Location: P_login.php?go=adm");
?>