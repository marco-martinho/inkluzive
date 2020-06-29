<?php
include("P_db.php"); 
//----------------------------

//Zeichensatz für die verbindung setzen
mysqli_set_charset($con,"utf8");

//----------------------------
//Abfrage erstellen und ausführen
$sql4 = "SELECT * FROM games ORDER BY titel";
$query4 = mysqli_query($con,$sql4) or die("kein select4");
//--------------------------------------------------------------
echo "<form action='index.php?go=games' method='post'>
      <select name='games'>";
	  
	  while($datenG = mysqli_fetch_array($query4))
	  {
		echo "<option  value='".$datenG["gid"]."' >".$datenG["Title"]."</option>";   
	  }

echo "</select>
      <input type='submit' value='GO' name='btnG' />
      </form>"; 
//---------------------------------------------------------------
if(isset($_POST["btnG"]))
{
	$game = $_POST["games"]; 
	
	//abfrage erstellen und ausführen
	$sql5 = "SELECT * FROM  games
	                  WHERE did='$game' ";
	$query5 = mysqli_query($con,$sql5) or die("no select5");
	//----------------
	echo "<table>
	        <tr> 
			<th>Title</th> <th>Genre</th> <th>Year</th> <th>Description</th> <th>Rating</th><th>Photo</th> <th>Console</th> 
			</tr>";
			
			while($daten5 = mysqli_fetch_array($query5))
			{
				echo   "<tr>
				            <td>".$daten5["Title"]."</td>
                            <td>".$daten5["Genre"]."</td>
                            <td>".$daten5["Year"]."</td>
							<td>".$daten5["Description"]."</td>
                            <td>".$daten5["Rating"]."</td>
							<td>".$daten5["Photo"]."</td>
							<td>".$daten5["Console"]."</td>								
				        </tr>";
			}		
	echo "</table>";
}//ende isset
