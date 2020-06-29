<?php
 
echo "<ul>
		<li >";
if(isset($_SESSION["username"]))
{
	echo "<a href='index.php?go=Uhome' id='clk' onclick='BtnsNav1()' onmousedown='mouseDown()' onmouseup='mouseUp()' class='btn btn-1 btn-1a'  ><span>home</span></a>";
}
else
{
	echo "<a href='index.php?go=Nhome' id='clk' onclick='BtnsNav1()' onmousedown='mouseDown()' onmouseup='mouseUp()' class='btn btn-1 btn-1a'  ><span>home</span></a>";	
}	
		
echo "</li>
		<li >
			<a href='index.php?go=about' class='btn btn-1 btn-1a'  ><span>about</span></a>
		</li>						
		<li > 
			<a href='index.php?go=gal' class='btn btn-1 btn-1a' ><span>gallery</span></a>
		</li>";	


//Unterschiedliche Navis für Gäste, angemeldeten User und Admin
if(isset($_SESSION["username"]))
{
		echo "<li > 
			    <a href='index.php?go=tra' class='btn btn-1 btn-1a' ><span>trailers</span></a>
			</li>
			<li > 
			    <a href='index.php?go=games' class='btn btn-1 btn-1a' ><span>games</span></a>
			</li>			
			
			<li > 
			    <a href='P_logout.php' class='btn btn-1 btn-1a' ><span>logout</span></a>
			</li>
			<li > 
			    <a href='index.php?go=cont' class='btn btn-1 btn-1a' ><span>contact</span></a>
			</li>";
}

else if(isset($_SESSION["admin"]))
{
	echo "<li><h3>Hallo ".$_SESSION["admin"]."</h3></li>
			<li > 
			    <a href='#' class='btn btn-1 btn-1a' ><span>verwaltung</span></a>
			</li>			
			<li > 
			    <a href='P_logout.php' class='btn btn-1 btn-1a' ><span>logout</span></a>
			</li>";
}
else
{
    echo "
			<li > 
			    <a href='index.php?go=log&id=new' class='btn btn-1 btn-1a' ><span>register</span></a>
			</li>			
			<li > 
			    <a href='index.php?go=log&id=user' class='btn btn-1 btn-1a' ><span>login</span></a>
			</li>";
}
echo "</ul>";

?>
