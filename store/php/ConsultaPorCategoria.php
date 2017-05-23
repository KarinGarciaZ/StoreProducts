<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta categoria</title>
    </head>
    <body>
        <form class="" action="ProductosPorCategoria.php" method="post">
            <?php
                $valores = "SELECT * from Category";
                $lector = mysql_query($valores);
                while ($row = mysql_fetch_array($lector))
                {
                    echo "<input type='radio' name='categ' value='".$row['id_Category']."'>".$row['description']."";
                    echo "</a><br><br>";
                    /*echo "<a href='ProductosPorCategoria.php' class='btn_submit' name= 'Cate' value = '".$row['id_Category']."'>";
                    echo $row['description'];
                    echo "</a><br><br>";*/
                    //echo "<a href="ProductosPorCategoria.php" class="btn_submit" value = "$row['id_Category']">$row['description'] </a><br><br>";
                    //echo "<option value= '".$row['id_Category']."'>";
                    //echo $row['description'];
                    //echo "</option>";
                }
             ?>
             <div class="btnForm">
                 <input class="btn_submit" type="submit" value="Consultar">
             </div>
        </form>

    </body>
</html>
