<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $IDM = $_POST['marca'];
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta productos</title>
    </head>
    <body>
        <br>
        <?php
            $valores = "SELECT * from products where id_Brand = $IDM";
            $lector = mysql_query($valores);
            while ($row = mysql_fetch_array($lector))
            {
                echo "<p>".$row['name']."</p><br>";
                echo "<p>".$row['unit_Cost']."</p><br>";
                echo "<p>".$row['description']."</p><br>";
                echo "<IMG SRC='../".$row['image']."' width=300 height=180>";
            }
         ?>
    </body>
</html>
