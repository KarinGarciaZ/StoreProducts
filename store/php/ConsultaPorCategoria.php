<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $valores = "SELECT * from Category";
    $lector = mysql_query($valores);
 ?>
<html>
    <head>

            <h1 id="Titulo">Categorías de Produtos</h1>

        <meta charset="utf-8">
        <title>Consulta categoria</title>
        <link rel="stylesheet" type="text/css" href="../css/master.css"/>
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">
    </head>
    <body>
        <form class="" action="ProductosPorCategoria.php" method="post">
            <div class="contenedor">

                <?php
                    while ($row = mysql_fetch_array($lector))
                    {
                        echo "<div class=cajaMarcasCategorias>";
                            echo "<button name='categ' value='".$row['id_Category']."'>";
                                echo "<b><h2>".$row['description']."</h2></b>  ";
                                echo "<br>";
                                echo "<hr>";
                                echo "<br>";
                                echo "<img src='../".$row['image']."' width='210' height='180'>";
                            echo "</button>";
                        echo "</div>";
                         ?>
                    <?php
                    }
                 ?>
            </div>
        </form>

    </body>
</html>
