<?php
//hier steht die Verbindung zum Server und Datenbank
$con = @mysqli_connect("localhost","root","","db_inkluzive") or die("kein Server oder DB gefunden");
mysqli_set_charset($con,"utf8");

?>


