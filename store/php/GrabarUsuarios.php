<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $antes = contarUsuarios();
    $user = $_POST['usuario'];
    $name = $_POST['nom'];
    $pass = $_POST['pass'];
    $num = $_POST['num'];
    $mail = $_POST['email'];
    $result = mysql_query("INSERT INTO `Users` VALUES ('$user','$pass','$name','$num','$mail')", $conection);
    $despues = contarUsuarios();
    if ($despues > $antes) {
        echo '<script language="javascript">';
        echo '$("my dialog").dialog();';
        echo '</script>';
        header('Location: LogIn.php');
    }
    else {
        echo '<script language="javascript">';
        echo 'confirm("Nombre de usuario ya existente, elija otro.")';
        echo '</script>';
        header('Location: AltaUsuarios.php');
    }

    function contarUsuarios(){
        $valores = "SELECT COUNT(*) from Users";
        $lector = mysql_query($valores);
        $row = mysql_fetch_array($lector);
        return $row[0];
    }
 ?>
