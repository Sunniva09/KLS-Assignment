
<?php
session_unset();
session_destroy();

header("refresh : 2; url = LoginPage.php");
echo "Your are successfully disconnected";
?>
