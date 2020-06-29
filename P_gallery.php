
<form action="index.php?go=gal" method="post">
	<fieldset> <legend> Find your favourit game! </legend>
		<p> <input type="text" name="search" /> </p>
		<p> <input type="submit" value="search" name="btnS" class='btnlogin' /> </p>
	</fieldset>
</form>

<?php
if(isset($_GET["go"])) 
{
	switch($_GET["go"])
	{
		case "log": include("P_login.php");break;
		
	}
}
else
{
	echo "<h3 class='hallo'>Check our latest game images and screeshots ".$_SESSION["username"]."!</h3>";
}
//----------------------------------------------------------------------------------
if(isset($_POST["btnS"]))
{
	$search = $_POST["search"];
	//echo $search;
	if(empty($search))
	{
		echo "<p>Please make your search!</p>";
	}
	else
	{
		$sql6 = "SELECT * FROM galleries WHERE
													title LIKE '%$search%'
													OR 
												description LIKE '%$search%' ";
		$query6 = mysqli_query($con,$sql6) or die("no select for search");
		//----------------------------
		if(mysqli_num_rows($query6))
		{
			echo "<table>";

			while($datensatz = mysqli_fetch_array($query6))
			{
				$zeichen = "/".$search."/i";
				$ersatz = "<find>".$search."</find>";
				//-------------------------
				$title 		 = preg_replace($zeichen, $ersatz, $datensatz["title"]);
				$description = preg_replace($zeichen, $ersatz, $datensatz["description"]);
				//-------------------------
				echo "<tr>
								<td>".$title."</td>
								<td>".$description."</td>
							</tr>";
			}
			echo "</table>";
			//----------------
		}
		else
		{
			echo "<p class='nothing'>Sorry. Nothing was found!.</p>";
		}
		//-----------------------------
	}//ende else
	

}//ende isset btn
//----------------------------------------------------------------------------------
?>
<div id="gallerypage">  
    <a href="bilder/homebilder/galleries/g1.jpg" >
	    <img src="bilder/homebilder/ACO/Assassins-Creed-Origins-1.jpg" alt="Landschaft" />
	</a>
    <a href="bilder/homebilder/galleries/g2.jpg" >
	    <img src="bilder/homebilder/LJH/The-Long-Journey-Home1.jpg" alt="Landschaft" />
	</a>	
    <a href="bilder/homebilder/galleries/g3.jpg" >
	    <img src="bilder/homebilder/LJH/The-Long-Journey-Home5.jpg" alt="Landschaft" />
	</a>	
    <a href="bilder/homebilder/galleries/g4.jpg" >
	    <img src="bilder/homebilder/Metro/Metro-Exodus5.jpg" />
	</a>
	<a href="bilder/homebilder/galleries/g5.jpg" >
	    <img src="bilder/homebilder/Metro/Metro-Exodus3.jpg" />
	</a>
	<a href="bilder/homebilder/galleries/g6.jpg" >
	    <img src="bilder/homebilder/NieR/NieR-Automata4.jpg" />
	</a>	
	<a href="bilder/homebilder/galleries/g7.jpg" >
	    <img src="bilder/homebilder/Ni-no-Kuni/Ni-no-Kuni-II-3.jpg" />
	</a>	
	<a href="bilder/homebilder/galleries/g8.jpg" >
	    <img src="bilder/homebilder/Vampyr/Vampyr1.jpg" />
	</a>
	<a href="bilder/homebilder/galleries/g9.jpg" >
	    <img src="bilder/homebilder/WW/World-of-Warcraft-Legion2.jpg" />
	</a>	
</div>



