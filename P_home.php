<!DOCTYPE html> 
<html lang="de"> 
<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
include("P_db.php");  
?>
<head>  
	<meta charset="utf-8" />
	<title>webdesign</title>
	<link rel="stylesheet" type="text/css" href="P_master.css" />
	<link rel="stylesheet" type="text/css" href="js/jquery.lightbox.css" />		
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>	
	<script type="text/javascript" src="js/jquery.lightbox.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>		
	<script type="text/javascript" src="P_master.js"></script>

	
	
</head>         
<body> 
<div id="wrapper"> 

<div id="header">
	<strong id="hour"></strong>
</div>

	
<!--navigation-->
<nav id="navil">
<?php
	include("P_navi.php");
?>
</nav>
	
<!--mainBereich-->
<main id="content">  
<?php
if(isset($_GET["go"])) 
{
	
	switch($_GET["go"])
	{
		case "log": include("P_login.php");break;
		case "about": include("P_about.php"); break;
		case "gal": include("P_gallery.php"); break;
		case "tra": include("P_trailers.php"); break;
		case "cont": include("P_contact.php"); break;
		case "games": include("P_games.php"); break;
		case "Nhome": include("P_content-home.php");break;
		case "Uhome": include("P_user-home.php");break;	
	}
}

?>
</main><!--ende main-->

	
</div><!--ende wrapper-->
</body>
</html>

<!--https://pixabay.com/de/
http://www.pixelio.de/
https://www.bildersuche.org/kostenlose-bilder-lizenzfreie-fotos.php -->










