<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&family=Viga&display=swap" rel="stylesheet">
    <title>Verificación OTP | Neomarket</title>
    <link rel="stylesheet" href="../../assets/css/auth/pass/contrasena.css">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/icons/iconos.css">
</head>

<body>

    <main>
        <div id="all">
            <div id="campos-login">
                <div id="flecha-titulo">
                    <div id="flecha-atras">
                        <a href="../../controller/pass/btn-contrasena.php"><span class="dashicons--arrow-left-alt2"></span></a>
                    </div>

                    <div id="titulo">
                        <h2>Verificación OTP</h2>
                        <p>Introduce el codigo que te adjuntamos al correo electronico.</p>
                    </div>
                </div>


                <div id="campos-btn">
                    <form class="contenedor-formulario" action="../../controller/pass/pass-new.php" method="POST">
                        <div id="campos">
                            <div class="campo">
                                <input type="email" name="email" placeholder="Correo electrónico" required>
                            </div>
                        </div>

                    <div class="submit-btn">
                        <button type="submit">Enviar codigo</button>
                    </div>
                </div>

                <a href="../controller/correo-otp.php">No recibiste el codigo? <strong>Reenviar</strong></a>
            </div>
        </div>
    </main>
</body>

</html>