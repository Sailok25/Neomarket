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
    <title>Contraseña olvidada | Neomarket</title>
    <link rel="stylesheet" href="../../assets/css/auth/pass/contrasena.css">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/icons/iconos.css">
</head>

<body>

    <main>
        <div id="all">
            <div id="campos-pass">
                <div id="flecha-titulo">
                    <div id="flecha-atras">
                        <a href="../controller/btn-login.php"><span class="dashicons--arrow-left-alt2"></span></a>
                    </div>

                    <div id="titulo">
                        <h2>¿Olvidaste tu contraseña?</h2>
                        <p>No te preocupes!  Porfavor introduce tu correo electronico enlazado a tu cuenta</p>
                    </div>
                </div>


                <div id="campos-btn">
                    <form class="contenedor-formulario" action="../../controller/pass/correo-otp.php" method="POST">
                        <div id="campos">
                            <div class="campo">
                                <input type="email" name="email" placeholder="Correo electrónico" required>
                            </div>
                        </div>

                        <div class="submit-btn">
                            <button type="submit">Enviar codigo</button>
                        </div>
                    </form>
                </div>

                <a href="../../controller/access/btn-login.php">Ya recordaste tu contraseña? <strong>Inicia sessión ahora</strong></a>
            </div>
        </div>
    </main>
</body>

</html>