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
<div id = "corps">

     <div id = "page">
     
        <form method = "post" action = "Connexion.php">
      username : <input type="charset" name = "Username" required></br>
      password : <input type="Password" name = "Password" required></br>
      <input type="Submit" name = "Submit">
      <input type = 'Reset' value = 'Reset'>
      </form>
     
     </div>
     
</div>

</body>

</html>