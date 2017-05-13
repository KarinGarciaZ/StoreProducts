<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $nom = $_POST['nom'];
    $result = mysql_query("INSERT INTO `Category` (`description`)VALUES ('$nom')", $conection);
    header('Location: Categoria.php');
 ?>
