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
</head>

<body>
    <header>
        <div id="barra">
            <div class="bordeado">
                <a href="../../controller/paginas/inicio.php"><span class="dashicons--arrow-left-alt2"></span></a>
            </div>
            <div class="logo">
                <p>Neomarket.</p>
            </div>
            <div class="bordeado">
                <span class="f7--cart"></span>
            </div>
        </div>
    </header>
    <main>
        <div id="all">
            <section id="productes">
                <div class="producte">
                    <div class="foto-producte">
                        <img src="../../assets/img/foto-producte.png" alt="">
                    </div>
                    <div class="dades-producte">
                        <p class="nom-producte">Nom producte</p>
                        <div class="preu-mesinfo">
                            <p class="preu-producte">00.00€</p>
                            <div class="eliminar_fav">
                                <span class="solar--trash-bin-trash-outline"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div id="iconos">
            <div class="i_opcio"><a href="../../controller/paginas/inicio.php"><span
                        class="clarity--home-line"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/favoritos.php"><span
                        class="prime--bookmark-fill"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/carrito.php"><span class="f7--cart"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/notificaciones.php"><span
                        class="ion--notifications-outline"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/perfil.php"><span
                        class="mingcute--user-2-line"></span></a></div>
        </div>
    </footer>
</body>