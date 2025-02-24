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
    <title>Info Producto | Neomarket</title>
    <link rel="stylesheet" href="../../assets/css/base_pag.css">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/temp.css">
    <link rel="stylesheet" href="../../assets/css/info_prod.css">
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
            <section id="nombre-modelo">
                <div class="fot-producto">
                    <img src="../../assets/img/sofa.png" alt="">
                </div>
                <div class="nom-fab-prod">
                    <div class="fabricante">
                        <div class="dimension_fot_fabricante">
                            <img src="../../assets/img/icono_fabricant.png" alt="" class="fot-fabricante">
                        </div>
                        <p>Nombre fabricante</p>
                    </div>
                    <p>Nombre modelo producto</p>
                </div>

            </section>
            <section id="precio-cantidad">
                <div class="carrito">
                    <p class="precio">00,00€</p>
                    <div class="manipular-cantidad">
                        <button class="cantidad-btn">+</button>
                        <input type="text" class="cantidad" value="00" readonly>
                        <button class="cantidad-btn">−</button>
                    </div>
                </div>
            </section>
            <section id="detalles-valoracion">
                <div class="descripcion">
                    <div class="valoracion">
                        <div class="nivel-valoracion">
                            <span class="fluent--star-12-filled"></span>
                            <p>4.5</p>
                        </div>
                        <p>(500 Reviews)</p>
                    </div>
                    <div class="text-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </p>
                    </div>
                </div>

                <div class="fav-carrito">
                    <div class="btn_fav">
                        <span class="prime--bookmark"></span>
                    </div>
                    <div class="btn_carrito">
                        <p>Añadir al carrito</p>
                    </div>
                </div>
            </section>
            <section id="resenas">
                <div class="nivel_resenas">
                    <div class="nivel_visual">
                        <div class="rango_valoracion_producto">
                            <h2>4.5</h2>
                            <div class="rango_estrellas_producto">
                                <span class="fluent--star-12-filled"></span>
                                <span class="fluent--star-12-filled"></span>
                                <span class="fluent--star-12-filled"></span>
                                <span class="fluent--star-12-filled"></span>
                                <span class="fluent--star-12-filled"></span>
                            </div>
                        </div>
                        <div class="btn_filtro_resenas">
                            <button class="btn_rango" value="5">5</button>
                            <button class="btn_rango" value="4">4</button>
                            <button class="btn_rango" value="3">3</button>
                            <button class="btn_rango" value="2">2</button>
                            <button class="btn_rango" value="1">1</button>
                        </div>
                    </div>
                    <button onclick="addReview()">Añadir reseña</button>
                </div>
                <div class="comentarios">
                    <h2>Reseñas</h2>
                    <div class="total_comentarios">
                        <div class="caja_comentario">
                            <div class="perfil_comentario">
                                <img src="../../assets/img/icono_fabricant.png" alt="">
                                <div class="nombre_val">
                                    <p>Nombre usuario</p>
                                    <div class="estrellas_dadas">
                                        <span class="fluent--star-12-filled"></span>
                                        <span class="fluent--star-12-filled"></span>
                                        <span class="fluent--star-12-filled"></span>
                                        <span class="fluent--star-12-filled"></span>
                                        <span class="fluent--star-12-filled"></span>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum odor amet, consectetuer aipiscing elit. Augue aptent tincidunt felis mollis
                                magnis senectus pellentesque turpis rutrum.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div id="iconos">
            <div class="i_opcio"><a href="../../controller/paginas/inicio.php"><span class="clarity--home-solid"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/favoritos.php"><span class="prime--bookmark"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/carrito.php"><span class="f7--cart"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/notificaciones.php"><span class="ion--notifications-outline"></span></a></div>
            <div class="i_opcio"><a href="../../controller/paginas/perfil.php"><span class="mingcute--user-2-line"></span></a></div>
        </div>
    </footer>
</body>