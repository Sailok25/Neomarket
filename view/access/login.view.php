<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&family=Viga&display=swap"
        rel="stylesheet">
    <title>Iniciar sessión | Neomarket</title>
    <link rel="stylesheet" href="../../assets/css/auth/access/login-registro.css">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/icons/iconos.css">
</head>

<body>

    <main>
        <div id="all">
            <div id="campos-login">
                <div id="flecha-titulo">
                    <div id="flecha-atras">
                    <a href="../index.php"><span class="dashicons--arrow-left-alt2"></span></a>
                    </div>
                    <div id="titulo">
                        <h2>¡Hola de nuevo!</h2>
                        <h2>¡Me alegra verte otra vez!</h2>
                    </div>
                </div>
                <div id="campos-btn">
                    <form class="contenedor-formulario" action="../../controller/access/form-login.php" method="POST">
                        <div id="campos">
                            <div class="campo">
                                <input type="email" name="email" placeholder="Correo electrónico" required>
                            </div>

                            <div class="campo">
                                <input type="password" name="password" placeholder="Contraseña" required>
                            </div>

                            <a href="../../controller/access/btn-contrasena.php">¿Olvidaste la contraseña?</a>
                        </div>

                        <div class="submit-btn">
                            <button type="submit">Iniciar sesión</button>
                        </div>
                    </form>
                </div>

                <a href="../../controller/access/btn-registro.php">No tienes cuenta? <strong>Registrate ahora</strong></a>

            </div>
        </div>
    </main>
</body>

</html>