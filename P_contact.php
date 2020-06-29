<h3 class="trailerhead">Our contact</h3>
<div id="box1"></div> 


<h3 class="trailerhead">Write your comment to us</h3>

<?php
//----------------------------
$abfrage = "SELECT *, DATE_FORMAT(date,'%d.%m.%Y %H:%i:%S') AS date FROM comments ORDER BY date DESC";
//----------------------------
//abfrage ausführen
$send = mysqli_query($con,$abfrage) or die("no select possible");
?>
<form action="P_insert-comment.php" method="post" class="showcom">
	<p>Name:  <input type="text" name="nnC" /> </p>
	<p>Title: <input type="text" name="ttC" /> </p>
	<p>
		Your comment: <br />
		<textarea name="yC"></textarea>
	</p>
	<p> <input type="submit" value="send" class="btn btnlogin"/> </p> 
</form>

<?php
//-----------------------------
if(isset($_GET["report"]))
{
	echo "<h3>".$_GET["report"]."</h3>";
}

//-----------------------------
//Alle Einträge anzeigen
echo "<div class='comments'>";
while($datensatz = mysqli_fetch_array($send))
{
	echo "<ul>";
	    echo "<li class='date'>Wrote on: ".$datensatz["date"]."</li>";
		echo "<li>Name: ".$datensatz["name"]."</li>";
		echo "<li>Title: ".$datensatz["title"]."</li>";
		echo "<li class='comment'>Comment: ".$datensatz["comment"]."</li>";
	echo "</ul>";
}
echo "</div>";
	
?>












