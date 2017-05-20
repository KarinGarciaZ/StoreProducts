<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">

        <title>Categorias</title>
    </head>
    <body >
        <a href="MenuDeAltas.html" class="btn_submit">Regresar al menú</a><br><br><br>
        <a href="LogIn.php" class="btn_submit">Cerrar sesión</a><br><br><br>
        <a href="../index.html" class="btn_submit">Salir</a>
        <div class="container-formulario">
            <div class="form_top">
                <h2>Registro <span>Categoria</span></h2>
            </div>
            <form class="form_reg" action="GrabarCategoria.php" method="post">
                <?php
                    $valores = "SELECT COUNT(*) from Category";
                    $lector = mysql_query($valores);
                    $row = mysql_fetch_array($lector);
                    $id = $row[0]+1;
                    echo "<label class='lblInput'>ID Categoria</label>";
                    echo "<input class='input' type='text' placeholder='$id' readonly=''>";
                 ?>
                <label class="lblInput">Nombre</label>
                <input class="input" style="text-transform:uppercase" name="nom" type="text" placeholder="&#128213; Categoria" required autofocus >
                <div class="btnForm">
                    <input class="btn_submit" type="submit" value="Registro de categoria">
                </div>
            </form>
        </div>

    </body>
</html>
