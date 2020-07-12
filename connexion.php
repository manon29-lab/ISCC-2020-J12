<html lang="fr">


<?php
session_start();
$_SESSION ["id"]=$value;
?>

<body> 

<form action="securite.php" method="post">
<label for="login"></label>
<input type="text" id="login" name="login" placeholder="Login">

<label for="password"></label>
<input type="text" id="password" name= "password" placeholder="password">

<input type="submit" value="Envoyer">
</form>

</form>
</body>
</html>