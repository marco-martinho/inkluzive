<?php
//----------------------------------------
//if(isset($_GET["go"])) 

		if($_GET["id"]=="user")
		{
				echo "<form action='P_login-check.php' method='post' class='formL'>
					<p> <input type='submit' value='login' class='btnlogin'/> </p>
				    <p>username:    <input type='text' name='un' /> </p>
				    <p>password: 	<input type='text' name='pwd' /> </p>
			      </form>";
				  	  
			//-----------
			if(isset($_GET["username"]))
			{
				echo "<p> hallo".$_GET["username"]."</p>";
			}
			//-----------
        }	

        if($_GET["id"]=="new")
		{
/*echo "<form action='P_register-check.php' method='post'  class='formR'>
           <input type='text' name='fn' > 
           <input type='submit' value='Register' class='sbr' >
     </form>";*/

			echo "<form action='P_register-check.php' method='post' class='formR'>
					
				<div id='freg'>
					<p>firstname: 		  <input type='text' name='fn' > </p>
					<p>lastname: 		  <input type='text' name='ln' > </p>
					<p>username: 	      <input type='text' name='un' > </p>
					<p>e-mail: 	          <input type='email' name='mail' > </p>	
					<p>country: 		  <input type='text' name='ctr' > </p>
					<p>birth:             <input type='date' name='age' > </p> 					
					<p>password: 		  <input type='password' name='npwd1' > </p>
					<p>confirm password:  <input type='password' name='npwd2' > </p>
					<p class='check'><input type='checkbox' name='cond' > I agree to the <a href='#'>Terms and Conditions</a> set out by this site.</p>

				   <p> <input type='submit' value='Register' class='sbr' /> </p>
				</div>
			</form>";
			//------------
			if(isset($_GET["register"]))
			{
				echo "<p>".$_GET["register"]."</p>";
			}
			//------------
			
		}
		
        if($_GET["go"] == "adm")
		{
			echo "<h2>Admin-Bereich: Benutzerverwaltung</h2>";
			//------------
			include("verwalten.php");
		} 
		
//}//ende isset


//----------------------------------------
?>
    <div id="Gright">
		<div id="galleryLG1" class="homegallery2">
			<img src="bilder/homebilder/loginG/injust.jpg" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/horizon.jpg" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/mh.jpg" alt="Lanschaft" />
		</div>
		<div id="galleryLG2" class="homegallery2">
			<img src="bilder/homebilder/loginG/foto-dev.png" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/foto-DES.png" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/foto-jobs.png" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/foto-inv.png" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/foto-eucreate.png" alt="Lanschaft" />
			<img src="bilder/homebilder/loginG/foto-euport.png" alt="Lanschaft" />
		</div>		
    </div>
