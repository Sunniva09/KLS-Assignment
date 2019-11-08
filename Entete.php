<?php
session_start(); // tu doit commencer toute tes page de session par sa.

if(isset($_SESSION["username"])) 
{
 echo 'Bien le bonjour Utilisateur de génie !';
 ?>
 	<a href="Deconnexion.php">Deconnexion</a>
 <?php
}
else
{
?>
	<html>
		<header>

			<div id="titre_accueil">
			</div>
			        <li><a href="LoginPage.php" id="accueil">Connexion</a></li>
			        <li><a href="RegisterPage.php">No account yet ? Click here !</a></li>
			</div> 
		</header>
	</html>
<?php
}
?>

