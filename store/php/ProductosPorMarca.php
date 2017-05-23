<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $IDM = $_POST['marca'];
    $valores = "SELECT * from products where id_Brand = $IDM";
    $lector = mysql_query($valores);
 ?>
<html>
    <head>
        <title>Consulta productos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/master.css"/>
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">
    </head>
    <body>
        <div class="contenedor">
            <?php
                while ($row = mysql_fetch_array($lector))
                {?>
                    <div class="cajaGrande">
                        <div class="caja">
                            <?php
                            echo "<h3>".$row['name']."</h3><br>";
                            echo "<IMG SRC='../".$row['image']."' width=200 height=140>";
                            echo "<p></p><br>";
                            echo "<p>$ ".$row['unit_Cost']."</p>";
                            echo "<p>".$row['description']."</p>";
                            ?>
                        </div>
                    </div><?php
                }
             ?>
        </div>
        <footer>
            <h1>MATOCAS</h1>
        </footer>
    </body>
</html>
