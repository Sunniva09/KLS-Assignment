<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Presentation</title>
    </head>
    
     <body>
     
     	<header>
     	
     		<?php include("Entete.php");?>
     	
     	</header>

<?php
		
		if ($_POST['password'] != $_POST['passconf'])
		{
			header("refresh : 2; url = RegisterPage.php");
    		echo "Passwords are different. Please, try again";
		}
			
		else
		{
			try
			{
				$bdd = new PDO('mysql:host=admin;dbname=wadb;charset=utf8','admin','admin');
			}
			catch(Exception $e)
			{
        		die('Erreur : '.$e->getMessage());
			}
			
			$psw = $_POST['password'];

			$name = $_POST['username'];
			
			$bdd->exec("INSERT INTO login VALUES('$name', '$psw')");

			echo 'Your account is successfully created !';
			
			header("refresh : 2; url = LoginPage.php");
			
		}
		
?>
