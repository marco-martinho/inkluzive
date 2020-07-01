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
$confirm = 0;


//-------------------------------
//$muster = "/^[A-ZÄÖÜ]{1}[a-zäöüß\-\s]{1,19}$/";
$muster = "/^[a-zäöüß@A-Z0-9ÄÖÜ \- \. ]+$/";
// ? --> 0-1mal
// *     0-n mal
// +     1-n mal    

// var_dump($_REQUEST);
//   if(!preg_match($muster,$fn)) echo "falsch";
//exit;

if(isset($_POST['cond'])){
    $confirm = 1;
}else {
      header("Location: index.php?go=log&id=new&register=no conditions");
      exit;
}


if(empty($fn)){
	header("Location: index.php?go=log&id=new&register=write your first name please");
    exit;/* keinen weiteren Code ausführen */
} else if(!preg_match($muster,$fn)){

	header("Location: index.php?go=log&id=new&register=only letters please 1");
    exit;
}

if(empty($ln)) 
{
	header("Location: index.php?go=log&id=new&register=write your last name please");
     exit;
}

else if(!preg_match($muster,$ln))
{
	header("Location: index.php?go=log&id=new&register=only letters please 2");
     exit;
}
	
if(empty($un)) 
{
	header("Location: index.php?go=log&id=new&register=choose a username please");
     exit;
}

else if(!preg_match($muster,$un))
{
	header("Location: index.php?go=log&id=new&register=only letters please 3");
    exit;
}


/*if(empty($mail)) 
{
	header("Location: index.php?go=log&id=new&register=give a e-mail please");
    exit;
}*/
if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    header("Location: index.php?go=log&id=new&register=give a valid e-mail please");
    exit;
}

if(empty($ctr)) 
{
	header("Location: index.php?go=log&id=new&register=in which country are you?");
    exit;
}

if(empty($age))  
{
	header("Location: index.php?go=log&id=new&register=how old are you?");
    exit;
}

if(empty($npwd1) || empty($npwd2) ) 
{
	header("Location: index.php?go=log&id=new&register=choose a unique password?");
    exit;
}

if($npwd1 != $npwd2) 
{
	header("Location: index.php?go=log&id=new&register=confirm your password?");
    exit;
}else 
{
	//ABfrage, ob es den User schon gibt?
	$sql = "SELECT username FROM users WHERE username='$un' ";
    
	$query = mysqli_query($con,$sql) or die("no Select");
	
	if(mysqli_num_rows($query)==true){
		header("Location: index.php?go=log&id=new&register=user already exists");
	}else{
		//header("Location: index.php?go=neu&anmeldung=User nicht da");
        
         //$npwd1 = sha521
             
		$sql = "INSERT INTO users (firstname, lastname, username, email, country, age, password, confirm)
        values('$fn','$ln','$un','$mail','$ctr','$age','$npwd1',$confirm)";
		mysqli_query($con,$sql) or die("no insert");
     	header("Location: index.php?go=log&id=user&username=Register successful.Please Login");
        exit;	
        
        /*$link = "meineFirma.de/be..?id=".mysql_insert_id();// meineFirma.de/bestaetig/best.php?id=77
        $text = "sehr geehrter Kunde... bitte benutzen Sie folgenden Link:".$link  ;
        mail($mail,"Betreff Anmeldung",$text);*/
        
        /*        meineFirma.de/bestaetig/best.php?id=77

       //best.php

           $bestätigungsid = $_GET['id'];


           $sql = "UPDATE users SET bestaetigung = true WHERE uid ='$bestätigungsid';
          mysqli_query($con,$sql) or die("kein update");
          echo "Danke für ihre Bestätigung"*/
        
	}
	
}//ende else	
	

?>

