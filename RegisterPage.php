<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Login</title>
    </head>
    
     <body>
     
     	<header>  
            <?php   include ("entete.php");   
            ?>
     	</header>
        <div id="corps">

            <div id = "page">
             
             		<form method = "post" action = SaveNewAccount.php >
        			username : <input type = "text" name = "username" required></br>
        			password : <input type="password" name = "password" required></br>
        			confirm password : <input type="password" name = "passconf" required></br>
        			<input type='submit' name = 'submit'>
        			<input type = 'reset' value = 'reset'>
        			</form>
          	
            </div>
        </div>
    	
    </body>
</html>