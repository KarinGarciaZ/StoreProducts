<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $IDC = $_POST['categoria'];
    $IDM = $_POST['marca'];
    $nom = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $ruta = "pictures/productspictures/";
    $imagen = $_POST['buscarImagen'];
    $ruta .= $imagen;
    $result = mysql_query("INSERT INTO `products` (`id_Category`,`id_Brand`,`name`,`unit_Cost`,`description`,`image`)VALUES ('$IDC','$IDM','$nom','$precio','$descripcion','$ruta')", $conection);
    header('Location: AltaProducto.php');
 ?>
