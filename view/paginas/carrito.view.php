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
    <title>Favoritos | Neomarket</title>
    <link rel="stylesheet" href="../../assets/css/base_pag.css">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/temp.css">
    <link rel="stylesheet" href="../../assets/css/icons/iconos.css">
    <link rel="stylesheet" href="../../assets/css/carrito.css">
</head>

<body>
    <header class="header_vacio">
        <div id="barra">
            <div class="logo">
                <p>Neomarket.</p>
            </div>
        </div>
    </header>
    <main>
        <div id="all">
            <section class="productos_carrito"></section>

            <!-- este permite hacer scroll encima del section de abajo que esta fijo encima del footer -->
            <section class="valor_carrito">
                <div class="codigo_promocional"></div>
                <div class="calculo_pagar">
                    <div class="campo_calculo"><p class="subtotal">Subtotal: </p><p class="valor_cantidad"></p></div>
                    <div class="campo_calculo"><p class="subtotal">Descuento: </p><p class="valor_cantidad"></p></div>
                    <div class="campo_calculo"><p class="subtotal">IVA 21%: </p><p class="valor_cantidad"></p></div>
                    <div class="campo_calculo"><p class="subtotal">Total: </p><p class="valor_cantidad"></p></div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div id="iconos">
            <div class="i_opcio">
                <a href="../../controller/paginas/inicio.php">
                    <span class="clarity--home-line"></span>
                </a>
            </div>
            <div class="i_opcio">
                <a href="../../controller/paginas/favoritos.php">
                    <span class="prime--bookmark"> </span>
                </a>
            </div>
            <div class="i_opcio">
                <a href="../../controller/paginas/carrito.php">
                    <span class="f7--cart-fill"></span>
                </a>
            </div>
            <div class="i_opcio">
                <a href="../../controller/paginas/notificaciones.php">
                    <span class="ion--notifications-outline"></span>
                </a>
            </div>
            <div class="i_opcio">
                <a href="../../controller/paginas/perfil.php">
                    <span class="mingcute--user-2-line"></span>
                </a>
            </div>
        </div>
    </footer>
</body>