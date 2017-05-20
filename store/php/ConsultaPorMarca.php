<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Marcas</title>
    </head>
    <body>
        <form class="" action="ProductosPorMarca.php" method="post">
            <?php
                    $valores = "SELECT * from brands";
                    $lector = mysql_query($valores);
                    while ($row = mysql_fetch_array($lector))
                    {
                        /*echo "<a href='ProductosPorCategoria.php' class='btn_submit' name= 'Cate' value = '".$row['id_Category']."'>";
                        echo $row['description'];
                        echo "</a><br><br>";*/
                        echo "<input type='radio' name='marca' value='".$row['id_Brand']."'>".$row['name']."";
                        echo "</a><br><br>";
                    }
             ?>
             <div class="btnForm">
                 <input class="btn_submit" type="submit" value="Consultar">
             </div>
         </form>
    </body>
</html>
