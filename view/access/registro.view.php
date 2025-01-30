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
    <title>Registrar cuenta | Neomarket</title>
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
                    <a href="../../index.php"><span class="dashicons--arrow-left-alt2"></span></a>
                    </div>

                    <div id="titulo">
                        <h2>¡Hola!</h2>
                        <h2>Regístrate para empezar.</h2>
                    </div>
                </div>


                <div id="campos-btn">
                    <form class="contenedor-formulario" action="../../controller/access/form-registro.php" method="POST">
                        <div id="campos">
                            <div class="campo">
                                <input type="text" name="user" placeholder="Nombre de usuario" required>
                            </div>

                            <div class="campo">
                                <input type="email" name="email" placeholder="Correo electrónico" required>
                            </div>

                            <div class="campo">
                                <input type="password" name="password" placeholder="Contraseña" required>
                            </div>

                            <div class="campo">
                                <input type="password" name="confirm-password" placeholder="Confirma la contraseña" required>
                            </div>
                        </div>

                        <div class="submit-btn">
                            <button type="submit">Regístrate</button>
                        </div>
                    </form>
                </div>

                <a href="../../controller/access/btn-login.php">Ya tienes una cuenta? <strong>Inicia sessión ahora</strong></a>
            </div>
        </div>
    </main>
</body>

</html>