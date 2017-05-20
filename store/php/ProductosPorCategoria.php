<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $IDC = $_POST['Cate'];
    echo $IDC;
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta productos</title>
    </head>
    <body>

    </body>
</html>
