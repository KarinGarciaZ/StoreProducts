<html>
    <head>
        <meta charset="utf-8">
        <title>Formularios</title>
    </head>
    <body>
        <?php
        $conection = mysql_connect("localhost", "root");
        mysql_select_db("dbostoreproducts", $conection);
        $user = $_POST['usuario'];
        $pass = $_POST['pass'];
        $valores = mysql_query("SELECT `password` FROM `Users` WHERE `username` LIKE '%$user%'", $conection);
        $row = mysql_fetch_array($valores);
        $contra = $row[0];
        if ($contra == $pass) {
            header('Location: MenuDeAltas.php');
        }
        else {
            //echo '<href="LogIn.php" onclick="return confirm("Are you sure?");"/>';
            echo '<script language="javascript">';
            echo 'if (confirm("Nombre de usuario o contraseña no validos.")){';
                //header('Location: LogIn.php');
            echo '}';
            echo '</script>';
            //header('Location: LogIn.php');
        }

         ?>
    </body>
</html>
