<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
 ?>
<html>
    <head>
        <header>
            <h1>Marcas de Produtos</h1>
        </header>
        <meta charset="utf-8">
        <title>Marcas</title>
        <link rel="stylesheet" type="text/css" href="../css/master.css"/>
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">
    </head>
    <body>
        <form class="" action="ProductosPorMarca.php" method="post">
            <div class="contenedor">
                <?php
                        $valores = "SELECT * from brands";
                        $lector = mysql_query($valores);
                        while ($row = mysql_fetch_array($lector))
                        {
                            echo "<div class='cajaMarcasCategorias'>";
                                echo "<button name='marca' value='".$row['id_Brand']."'>";
                                    echo "<b>".$row['name']."</b>  ";
                                    echo "<br>";
                                    echo "<hr>";
                                    echo "<br>";
                                    echo "<img src='../".$row['image']."' width='210' height='180'>";
                                echo "</button>";
                            echo "</div>";
                        }
                 ?>
            </div>
         </form>
    </body>
</html>
