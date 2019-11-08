<!DOCTYPE html>
<html>
  <body>

  <?php
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
    
    $reponse = $bdd->query("UPDATE login SET username = '$name', password = '$pswrd' WHERE username = '$_SESSION["username"]'") ;
    
    $_SESSION["username"] = '$name';
    $_SESSION["password"] = '$pswrd';

    $donnees = $reponse->fetch();
    
     header("refresh : 2; url = SetData.php");
     echo "Your data are changed successfully";
    }

  ?>

  </body>
</html>