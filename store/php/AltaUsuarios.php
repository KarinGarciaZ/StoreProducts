<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">

        <title>Usiarios</title>
    </head>
    <body >
        <a href="MenuDeAltas.html" class="btn_submit">Regresar al menú</a><br><br><br>
        <a href="LogIn.php" class="btn_submit">Cerrar sesión</a><br><br><br>
        <a href="../index.html" class="btn_submit">Salir</a>
        <div class="container-formulario">
            <div class="form_top">
                <h2>Registro <span>Usuarios</span></h2>
            </div>
            <form class="form_reg" action="GrabarUsuarios.php" method="post">
                <label class="lblInput">Usuario</label>
                <input class="input" type="text" name="usuario" placeholder="&#128213; Elija un nombre de usuario" style="text-transform:uppercase" required autofocus>
                <label class="lblInput">Nombre</label>
                <input class="input" type="text" name="nom" placeholder="&#128213; Nombre del Empleado" style="text-transform:uppercase" required autofocus>
                <label class="lblInput">Contraseña</label>
                <input class="input" style="text-transform:uppercase" name="pass" type="password" placeholder="&#128213; Contraseña menor de 9 caracteres" required autofocus >
                <label class="lblInput">Numero de telefono</label>
                <input class="input" type="text" name="num" placeholder="&#128213; ejemplo: 341-437-3991" required autofocus>
                <label class="lblInput">E-mail</label>
                <input class="input" type="text" name="email" placeholder="&#128213; ejemplo@gmail.com" required autofocus>
                <div class="btnForm">
                    <input class="btn_submit" type="submit" value="Registro de usuario">
                </div>
            </form>
        </div>

    </body>
</html>
