<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $IDM = $_POST['categ'];
    $valores = "SELECT * from products where id_Category = $IDM";
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
        <nav id="laterial-productos">
            <ul class="ul_Menu-productos">
                <a  href="AltaUsuarios.php">
                    <li class="li_Menu">
                        <div class="barra"></div>
                        <p class="menu">Crear usuario</p>
                    </li>
                </a>

                <a  href="Categoria.php">
                    <li class="li_Menu-producto">
                        <div class="barra"></div>
                        <p class="menu">Categorias</p>
                    </li>
                </a>

                <a  href="Marca.php">
                    <li class="li_Menu">
                        <div class="barra"></div>
                        <p class="menu">Marcas</p>
                    </li>
                </a>

                <a href="AltaProducto.php">
                    <li class="li_Menu">
                        <div class="barra"></div>
                        <p class="menu">Productos</p>
                    </li>
                </a>

                <a href="LogIn.php" >
                    <li class="li_Menu">
                        <div class="barra"></div>
                        <p class="menu">Cerrar sesión</p>
                    </li>
                </a>

                <a href="../index.html">
                    <li class="li_Menu">
                        <div class="barra"></div>
                        <p class="menu">Salir</p>
                    </li>
                </a>
            </ul>
        </nav>

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
        <footer class="pie">
            <div class="pie-contenedor">
                <h2 class="pie-texto">CONTACTANOS EN NUESTRAS REDES SOCIALES</h2>
            </div>

        </footer>
    </body>
</html>
