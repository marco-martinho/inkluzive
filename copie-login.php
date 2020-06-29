<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html> 
<html lang="de">  
<head>  
	<meta charset="utf-8" />
	<title>webdesign</title>
	<link rel="stylesheet" type="text/css" href="P_master.css" /> 
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.cross-slide.js"></script>
	<script type="text/javascript" src="js/jquery.ui.min.js"></script>	
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="P_login.js"></script>	
	
</head>         
<body> 
<div id="wrapper"> 

<div id="header">
	<h1>gaminglate</h1>	
	<strong id="hour"></strong>
</div>
	
<!--navigation-->
<nav id="navil">

<?php
//Unterschiedliche Navis für Gäste, angemeldeten User und Admin
if(isset($_SESSION["username"]))
{
	echo "<h3>Hallo ".$_SESSION["username"]."</h3>";
    echo "<ul> 
		    <li >
			    <a href='P_home.php?go=use' id='clk' onclick='BtnsNav1()' onmousedown='mouseDown()' onmouseup='mouseUp()' class='btn btn-1 btn-1a'  ><span>home</span></a>
			</li>
		    <li >
			    <a href='#' class='btn btn-1 btn-1a'  ><span>about</span></a>
			</li>						
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>gallery</span></a>
			</li>	
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>games</span></a>
			</li>
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>play</span></a>
			</li>			
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>register</span></a>
			</li>			
			<li > 
			    <a href='P_logout.php' class='btn btn-1 btn-1a' ><span>logout</span></a>
			</li>
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>contact</span></a>
			</li>	
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>impressum</span></a>
			</li>				
		</ul>";
}
else if(isset($_SESSION["admin"]))
{
	echo "<h3>Hallo ".$_SESSION["admin"]."</h3>";
    echo "<ul> 
		    <li >
			    <a href='P_home.php?go=adm' id='clk' onclick='BtnsNav1()' onmousedown='mouseDown()' onmouseup='mouseUp()' class='btn btn-1 btn-1a'  ><span>home</span></a>
			</li>
		    <li >
			    <a href='#' class='btn btn-1 btn-1a'  ><span>about</span></a>
			</li>						
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>gallery</span></a>
			</li>	
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>games</span></a>
			</li>
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>play</span></a>
			</li>			
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>register</span></a>
			</li>			
			<li > 
			    <a href='P_logout.php' class='btn btn-1 btn-1a' ><span>logout</span></a>
			</li>
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>contact</span></a>
			</li>	
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>impressum</span></a>
			</li>				
		</ul>";
}
else
{
    echo "<ul> 
		    <li >
			    <a href='#' id='clk' onclick='BtnsNav1()' onmousedown='mouseDown()' onmouseup='mouseUp()' class='btn btn-1 btn-1a'  ><span>home</span></a>
			</li>
		    <li >
			    <a href='#' class='btn btn-1 btn-1a'  ><span>about</span></a>
			</li>						
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>gallery</span></a>
			</li>				
			<li > 
			    <a href='P_login.php?go=new' class='btn btn-1 btn-1a' ><span>register</span></a>
			</li>			
			<li > 
			    <a href='P_login.php?go=log' class='btn btn-1 btn-1a' ><span>login</span></a>
			</li>
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>contact</span></a>
			</li>	
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>impressum</span></a>
			</li>				
		</ul>";
}

?> 
</nav>
	
	<!--mainBereich-->
	<main id="content">  
<?php
//----------------------------------------
if(isset($_GET["go"]))
{
		if($_GET["go"]=="log")
		{
			echo "<form action='P_login-check.php' method='post'>
					<p> <input type='submit' value='login' class='btnlogin'/> </p>
				    <p>username:    <input type='text' name='un' /> </p>
				    <p>password: 	<input type='text' name='pwd' /> </p>
			      </form>";
			//-----------
			if(isset($_GET["username"]))
			{
				echo "<p>".$_GET["username"]."</p>";
			}
			//-----------
		}	

		else if($_GET["go"]=="neu")
		{
			echo "<form action='neu_reg.php' method='post' enctype='multipart/form-data'>
						<p>lastname: 		  <input type='text' name='nn' /> </p>
						<p>firstname: 		  <input type='text' name='vn' /> </p>
						<p>country: 		  <input type='text' name='ct' /> </p>					
						<p>username: 	      <input type='text' name='nbn' /> </p>
						<p>password: 		  <input type='text' name='npwd' /> </p>
						<p>confirm password:  <input type='text' name='npwd2' /> </p>
						
						<p> <input type='submit' value='Register' /> </p>
					</form>";
			//------------
			if(isset($_GET["hinweis"]))
			{
				echo "<p>".$_GET["hinweis"]."</p>";
			}
			//------------
			
		}
		
		else if($_GET["go"] == "adm")
		{
			echo "<h2>Admin-Bereich: Benutzerverwaltung</h2>";
			//------------
			include("verwalten.php");
		}
}//ende isset
//----------------------------------------
?>
		<div id="galleryLG1" class="homegallery2">
			<img src="bilder/homebilder/loginG/injust.jpg" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/horizon.jpg" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/mh.jpg" alt="Lanschaft" />
		</div>
		<div id="galleryLG2" class="homegallery2">
			<img src="bilder/homebilder/loginG/bio.jpg" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/nioh.jpg" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/grush.jpg" alt="Lanschaft" />
		</div>		
	</main>
</div><!--ende wrapper-->
</body>
</html>





<!--https://pixabay.com/de/
http://www.pixelio.de/
https://www.bildersuche.org/kostenlose-bilder-lizenzfreie-fotos.php -->


