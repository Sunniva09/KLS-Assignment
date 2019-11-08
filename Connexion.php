<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<body>

	<?php
	$try = 'contenu';
	try
	{
    	$bdd = new PDO('mysql:host=localhost;dbname=wadb;charset=utf8','azerty','a');
    }
    catch (Exception $e)
    {
    	die('Erreur : '.$e->getMessage());
    }
    
    $name = $_POST['Username'];
    $pswrd = $_POST['Password'];
    
    $reponse = $bdd->query("SELECT password FROM login WHERE username = '$name'");
    
    $donnees = $reponse->fetch();
    
    if ($pswrd == $donnees['Password'])
    {
    	$_SESSION["username"] = $_POST['username'];
    	$_SESSION["password"] = $_POST['password'];
    	header("refresh : 2; url = SetData.php");
    	echo "Connexion";
    }
    else
    {
		 header("refresh : 2; url = LoginPage.php");
   		 echo "Something wrong. Please retry";
    }

	?>

	</body>
</html>