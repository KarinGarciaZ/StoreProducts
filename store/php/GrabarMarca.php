<?php
  $connection = mysql_connect("localhost", "root");
  mysql_select_db("dbostoreproducts", $connection);
  $nom = $_POST['nom'];
  $ruta = "pictures/BrandsPictures/";
  $imagen = $_POST['buscarImagen'];
  $ruta .= $imagen;
  $result = mysql_query("INSERT INTO `Brands`(name, image) VALUES('$nom','$ruta')", $connection);
  header('Location: Marca.php');
?>
