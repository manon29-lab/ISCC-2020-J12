<!DOCTYPE html>
<html lang="fr">


<head>
<title> mini-site-routing </title>
<meta charset ="utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
</head>

<body>

<nav>
<ul>
<li><a href="mini-site-routing.pho?page=1" > Accueil </a></li>
<li><a href= "mini-site-routing.pho?page=2" >Page 2 </a></li>
<li><a href= "mini-site-routing.pho?page=1" > Page 3 </a></li>
<li><a href= "mini-site-routing.pho?page=connexion"> Conexion </a></li>
</ul>
</nav>

<?php


if ($_GET['page']== 1)
echo "<p> Accueil ! </p>" ;

else if ($_GET ['page'] == 2)
echo "<p> Page 2 </p>" ; 

else if ($_GET ['page']== 3)
echo "<p> Page 3 </p>";

if ($_GET ['page'] == "connexion")
include ("connexion.php");

else if ($_GET ['page'] == 'admin')
include ('admin.php');




if ($_SESSION['id']) {;
echo "<p> Login : " . $_session ['id'] . "</p>";
}
?>

</body>
</html>