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
    <title>Perfil | Neomarket</title>
    <link rel="stylesheet" href="../../assets/css/base_pag.css">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/temp.css">
    <link rel="stylesheet" href="../../assets/css/icons/iconos.css">
    <link rel="stylesheet" href="../../assets/css/perfil.css">
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
            <section class="dades_perfil">
                <div class="foto_nick">
                    <div class="foto_perfil">
                        <img src="../../assets/img/icono_fabricant.png" alt="Foto de perfil">
                    </div>
                    <div class="nick_perfil">
                        <p>@nombre_usuario</p>
                    </div>
                </div>
                <div class="info_perfil">
                    <div class="num_dada">
                        <p>35</p>
                        <p>Productos</p>
                    </div>
                    <div class="num_dada">
                        <p>4.6/5</p>
                        <p>Valoraciones</p>
                    </div>
                    <div class="num_dada">
                        <p>4590</p>
                        <p>Seguidores</p>
                    </div>
                </div>
            </section>
            <section id="productes_perfil">
                <!-- <a href="../../controller/paginas/infoprod.php">
                    <div class="producte">
                        <div class="foto-producte">
                            <img src="../../assets/img/foto-producte.png" alt="">
                        </div>
                        <div class="dades-producte">
                            <p class="nom-producte">Nom producte</p>
                            <div class="preu-mesinfo">
                                <p class="preu-producte">00.00€</p>
                            </div>
                        </div>
                    </div>
                </a> -->

                <p>No has subido ningun producto todavia</p>
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
                <span class="f7--cart"></span>
                </a>
            </div>
            <div class="i_opcio">
                <a href="../../controller/paginas/notificaciones.php">
                    <span class="ion--notifications-outline"></span>
                </a>
            </div>
            <div class="i_opcio">
                <a href="../../controller/paginas/perfil.php">
                    <span class="mingcute--user-2-line-fill"></span>
                </a>
            </div>
        </div>
    </footer>
</body>