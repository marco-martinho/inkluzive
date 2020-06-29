<?php
include("P_db.php"); 
//-------------------------------
$fn = $_POST["fn"];
$ln = $_POST["ln"];
$un = $_POST["un"];
$mail = $_POST["mail"];
$ctr = $_POST["ctr"];
$age = $_POST["age"];
$npwd1 = $_POST["npwd1"];
$npwd2 = $_POST["npwd2"];
//-------------------------------
$muster = "/^[A-ZÄÖÜ]{1}[a-zäöüß\-\s]{1,19}$/";

if(empty($fn))
{
	header("Location: index.php?go=log&id=new&register=write your first name please");
}
else if(!preg_match($muster,$fn))
{
	header("Location: index.php?go=log&id=new&register=only letters please");
}

if(empty($ln)) 
{
	header("Location: index.php?go=log&id=new&register=write your last name please");
}

else if(!preg_match($muster,$ln))
{
	header("Location: index.php?go=log&id=new&register=only letters please");
}
	
if(empty($un)) 
{
	header("Location: index.php?go=log&id=new&register=choose a username please");
}

else if(!preg_match($muster,$un))
{
	header("Location: index.php?go=log&id=new&register=only letters please");
}


if(empty($mail)) 
{
	header("Location: index.php?go=log&id=new&register=give a valid e-mail please");
}

if(empty($ctr)) 
{
	header("Location: index.php?go=log&id=new&register=in which country are you?");
}

if(empty($age))  
{
	header("Location: index.php?go=log&id=new&register=how old are you?");
}

if(empty($npwd1)) 
{
	header("Location: index.php?go=log&id=new&register=choose a unique password?");
}

if(empty($npwd2)) 
{
	header("Location: index.php?go=log&id=new&register=confirm your password?");
}

else 
{
	//ABfrage, ob es den User schon gibt?
	$sql2 = "SELECT username FROM users WHERE username='$un' ";
	$query2 = mysqli_query($con,$sql1) or die("no Select");
	
	if(mysqli_num_rows($query2)==true)
	{
		header("Location: index.php?go=log&id=new&register=user already exists");
	}
	else
	{
		//header("Location: index.php?go=neu&anmeldung=User nicht da");

		$sql3 = "INSERT INTO users (firstname, lastname, username, email, country, age, password1, password2)
		        values('$fn','$ln','$un','$mail','$ctr','$age','$npwd1','$npwd2')";
		mysqli_query($con,$sql3) or die("no insert");
     	header("Location: index.php?go=log&id=user&username=Register successful.Please Login");	
	}
	
}//ende else	
	

?>

