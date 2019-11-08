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

<div id="titre_accueil">
</div>
       
</div>

<p1>  <br> <br> <br>Welcome on our website ! </p1>

    <?php
        echo "<br> <br> <br> <img src= 'pinkie.jpg' width=150 style='cursor:pointer; border:0;'><br>";
        echo "We are here to sell you some good products<br>";
    ?>


<br><br><br><br>
If you have any issue, you can contact us !<br><br>
    <form method="post" name="myemailform" action="SendEmail.php">
    Name: <input type="text" name="name" required><br>
    Email Address: <input type="text" name="email" required><br>
    Message:  <textarea name="message" required></textarea> <br>
    <input type="submit" value="Send Form">
</form>

