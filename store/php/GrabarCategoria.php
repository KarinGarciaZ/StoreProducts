<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $nom = $_POST['nom'];
    $ruta = "pictures/CategoriesPictures/";
    $imagen = $_POST['buscarImagen'];
    $ruta .= $imagen;
    $result = mysql_query("INSERT INTO `Category` (`description`, `image`)VALUES ('$nom','$ruta')", $conection);
    header('Location: Categoria.php');
 ?>
