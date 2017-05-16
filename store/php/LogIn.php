<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">

        <title>Usiarios</title>
    </head>
    <body >
        <a href="../index.html" class="btn_submit">Salir</a>
        <div class="container-formulario">
            <div class="form_top">
                <h2>Log<span>In</span></h2>
            </div>
            <form class="form_reg" action="ChecarLogIn.php" method="post">
                <label class="lblInput">Usuario</label>
                <input class="input" type="text" name="usuario" placeholder="&#128213; Elija un nombre de usuario" required autofocus>
                <label class="lblInput">Contraseña</label>
                <input class="input" style="text-transform:uppercase" name="pass" type="password" placeholder="&#128213; Contraseña menor de 9 caracteres" required autofocus >
                <div class="btnForm">
                    <input class="btn_submit" type="submit" value="Registro de usuario">
                </div>
            </form>
        </div>

    </body>
</html>
