<?php
/*
//hier steht die Verbindung zum Server und Datenbank
$con = @mysqli_connect("localhost","root","","h-projekt") or die("kein Server oder DB gefunden");
mysqli_set_charset($con,"utf8");
//------------------------
*/
?>

<?php
$host_name = 'db719843115.db.1and1.com';
$database = 'db719843115';
$user_name = 'dbo719843115';
$password = 'epilifocram69@Inkluzive';

$connect = mysql_connect($host_name, $user_name, $password, $database);
if (mysql_errno()) {
    die('<p>Verbindung zum MySQL Server fehlgeschlagen: '.mysql_error().'</p>');
} else {
    echo '<p>Verbindung zum MySQL Server erfolgreich aufgebaut.</p >';
}
?>

