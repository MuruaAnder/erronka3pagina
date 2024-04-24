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
        <form method="post">
                <input type="hidden" name="action" value="logout">
                <button type="submit">Cerrar Sesión</button>
            </form>
        <button id="switch-button">¿No tienes cuenta? Regístrate</button>
    </center>
