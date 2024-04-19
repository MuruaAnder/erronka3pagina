<head>
    <title>Formulario de Inicio de Sesión y Registro</title>
    <link rel="stylesheet" type="text/css" href="iniciarSesion.css">
</head>
<div class="logo">
    <img src="img/trio_sabroso_logo-transformed.png" alt="" width="300" height="175">
</div>
<nav id="nav">
    <ul>
        <li><a href="#inicio" onclick="seleccionar()"><i class="fa-solid fa-house"></i>Inicio</a></li>
        <li><a href="#sabores" onclick="seleccionar()"><i class="fa-solid fa-ice-cream"></i>Sabores</a></li>
        <li><a href="#platos" onclick="seleccionar()"><i class="fa-solid fa-utensils"></i>Platos</a></li>
        <li><a href="#blog" onclick="seleccionar()"><i class="fa-solid fa-pen"></i>Blog</a></li>
        <li><a href="#contacto" onclick="seleccionar()"><i class="fa-solid fa-comments"></i>Contacto</a></li>
        <li><a href="iniciarSesion.php" onclick="seleccionar()"><i class="fa-solid fa-sign-in"></i>Iniciar <br> Sesion</a></li>
    </ul>
</nav>

<body>
    <center>
        <div id="login-form">
            <h2>Iniciar Sesión</h2>
            <form method="post" action="iniciarSesion.php">
                <input type="text" name="username" id="login-username" placeholder="Nombre de usuario" required>
                <input type="password" name="password" id="login-password" placeholder="Contraseña" required>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>

        <div id="register-form" style="display:none;">
            <h2>Registrarse</h2>
            <form method="post">
                <input type="text" name="username" placeholder="Nombre de usuario" required>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido1" placeholder="Primer apellido" required>
                <input type="text" name="apellido2" placeholder="Segundo apellido">
                <input type="text" name="nan" placeholder="DNI" required>
                <input type="number" name="telefonoa" placeholder="Telefonoa" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Registrarse</button>
            </form>
        </div>
      
        <button id="switch-button">¿No tienes cuenta? Regístrate</button>
    </center>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
    <script>
        $(document).ready(function() {
            $("#switch-button").click(function() {
                $("#login-form").toggle();
                $("#register-form").toggle();

                if ($("#login-form").is(":visible")) {
                    $("#switch-button").text("¿No tienes cuenta? Regístrate");
                } else {
                    $("#switch-button").text("¿Ya tienes cuenta? Inicia sesión");
                }
            });
        });
    </script>
</body>

</html>