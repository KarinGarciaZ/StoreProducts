<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">

        <title>Producto</title>
    </head>
    <body >
        <a href="MenuDeAltas.html" class="btn_submit">Regresar al menú</a><br><br><br>
        <a href="LogIn.php" class="btn_submit">Cerrar sesión</a><br><br><br>
        <a href="../index.html" class="btn_submit">Salir</a>
        <!--input class="btn_submit" type="submit" value="Regresar a la página principal"  onClick=" window.location.href='store/index.html' "!-->
        <div class="container-formulario">
            <div class="form_top">
                <h2>Registro <span>Producto</span></h2>
            </div>

            <form class="form_reg" action="GrabarProducto.php" method="post">
                <?php
                    $valores = "SELECT COUNT(*) from products";
                    $lector = mysql_query($valores);
                    $row = mysql_fetch_array($lector);
                    $id = $row[0]+1;
                    echo "<label class='lblInput'>Clave del Producto</label>";
                    echo "<input class='input' type='text' placeholder='$id' readonly=''>";
                 ?>
                 <label class="lblInput">Categoria</label>
                <select class= "btn_submit" name="categoria">
                    <?php
                        $valores = "SELECT * from Category";
                        $lector = mysql_query($valores);
                        while ($row = mysql_fetch_array($lector)) {
                            echo "<option value= '".$row['id_Category']."'>";
                            echo $row['description'];
                            echo "</option>";
                        }
                     ?>
                </select>
                <label class="lblInput">Marca</label>
                <select class= "btn_submit" name="marca">
                    <?php
                        $valores = "SELECT * from brands";
                        $lector = mysql_query($valores);
                        while ($row = mysql_fetch_array($lector)) {
                            echo "<option value= '".$row['id_Brand']."'>";
                            echo $row['name'];
                            echo "</option>";
                        }
                     ?>
                </select>
                <label class="lblInput">Nombre</label>
                <input class="input" type="text" name = "nombre" placeholder="&#128213;nombre producto " style="text-transform:uppercase" required autofocus>
                <label class="lblInput">Precio</label>
                <input class="input" type="text" name = "precio" placeholder="&#128213;precio producto" style="text-transform:uppercase" required autofocus>
                <label class="lblInput">Descripcion</label>
                <input class="input" type="text" name = "descripcion" placeholder="&#128213;descripcion producto" style="text-transform:uppercase" required autofocus>
                <label class="lblInput">Imagen</label>
                <div class="searchImage">
                    <p id="texto">Add file</p>
                    <input type="file" name = "buscarImagen" class="buscarImagen" value="file1"/ required autofocus>
                </div>
                <div class="btnForm">
                    <input class="btn_submit" type="submit" value="Registro del producto">

                </div>
            </form>
        </div>

    </body>
</html>
