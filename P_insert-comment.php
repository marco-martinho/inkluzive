<?php
include("P_db.php"); 
//---------------------------------------------
$nnC = $_POST["nnC"]; 
$ttC = $_POST["ttC"]; 
$yC = $_POST["yC"];  
//----------------------------------------------------
$musternnC = "/^[a-zA-ZäöüÄÖÜ\-\s]{2,100}$/";
$musterttC = "/^[a-zA-ZäöüÄÖÜ\-\_\.\?\s\!]{5,100}$/";

$nnC = mysqli_real_escape_string($con,htmlspecialchars(trim($_POST["nnC"])));
$ttC = mysqli_real_escape_string($con,htmlspecialchars(trim($_POST["ttC"])));

//----------------------------------------------------
if( !preg_match($musternnC,$nnC) )
{
	header("Location: index.php?go=cont&report=Write your name correctly");
}
else if( !preg_match($musterttC,$ttC) )
{
	header("Location: index.php?go=cont&report=Write your title correctly");
}
else if( empty($yC) )
{
	header("Location: index.php?go=cont&report=Text is missing");
}
else
{

	$sql7 = "INSERT INTO comments(name, title, comment)
	                    values('$nnC','$ttC','$yC')";
						
	//abfrage ausführen
    mysqli_query($con,$sql7) or die("no insert");
    header("Location: index.php?go=cont&report=Thank you for your comment");	
}

?>











