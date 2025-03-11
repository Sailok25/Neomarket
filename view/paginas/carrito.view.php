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
    <title>Carrito | Neomarket</title>
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
            <section class="productos_carrito">
                <div class="producto_carrito">
                    <div class="foto_producto_carrito">
                        <img src="../../assets/img/productos/producto1.jpg" alt="Producto 1">
                    </div>
                    <div class="info_product_carrito">
                        <div class="nombre_precio">
                            <p class="nombre_producto">Nombre del producto</p>
                            <p class="precio_producto">00.00€</p>
                        </div>

                        <div class="cantidad_producto">
                            <button class="cantidad-btn_carrito">+</button>
                            <input type="text" class="cantidad_carrito" value="00" readonly>
                            <button class="cantidad-btn_carrito">−</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="valor_carrito">
                <div class="codigo_promocional">
                    <span class="hugeicons--discount"></span>
                    <input type="text" placeholder="Código promocional">
                </div>
                <div class="calculo_pagar">
                    <div class="campo_calculo">
                        <p class="subtotal">Subtotal: </p>
                        <p class="valor_cantidad">00.00€</p>
                    </div>
                    <div class="campo_calculo">
                        <p class="subtotal">Descuento: </p>
                        <p class="valor_cantidad">- 00.00€</p>
                    </div>
                    <div class="campo_calculo">
                        <p class="subtotal">IVA 21%: </p>
                        <p class="valor_cantidad">00.00€</p>
                    </div>
                    <div class="campo_calculo">
                        <p class="subtotal_2">Total: </p>
                        <p class="valor_cantidad_2">00.00€ </p>
                    </div>
                </div>
                <div class="boton_pagar">
                    <a>Pagar</a>
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
                <span class="simple-line-icons--plus"></span>
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