<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming Flix</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!--INICIO CABECALHO DO SITE-->
    <header>

        <div class="nav container">
            <!-- INICIO LOGO DO SITE-->
            <a href="index.php" class="logo" title="Streaming">
                Streaming<span>Flix</span>
            </a>
            <!-- FIM LOGO DO SITE-->

            <!-- INICIO BUSCA DO SITE-->
            <div class="busca-site">
                <input type="search" id="busca-input" placeholder="Buscar Filmes"></input>
                <i class='bx bx-search-alt-2'></i>
            </div>

            <a href="" class="user">
                <img src="assets/img/user.png" alt="foto perfil user" class="user-img">
            </a>

            <!--INCIO MENU PRINCIPAL-->
            <div class="navbar">
                <a href="#home" class="nav-link">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#popular" class="nav-link">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-title">Em Alta</span>
                </a>
                <a href="#filmes" class="nav-link">
                    <i class='bx bx-compass'></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="#filmes" class="nav-link">
                    <i class='bx bx-tv'></i>
                    <span class="nav-link-title">Filmes</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-heart'></i>
                    <span class="nav-link-title">Favoritos</span>
                </a>
            </div>
            <!--FIM MENU PRINCIPAL-->

            <!-- FIM BUSCA DO SITE-->

        </div>
    </header>
    <!--FIM CABECALHO DO SITE-->

    <!--INICIO BANNER DESTAQUE-->
    <section class="banner container">
        <!--INICIO IMAGEM DESTAQUE-->
        <img src="assets/img/home-background.png" alt="" class="banner-img">
        <!--FIM IMAGEM DESTAQUE-->
        <div class="banner-texto">
            <h1 class="banner-titulo">Super Mário 2 <br> o Filme</h1>

            <p>Lançamento em Setembro</p>

            <a href="" class="ver-btn">
                <i class='bx bxs-right-arrow'></i>
                <span>Veja o Trailer</span>
            </a>
        </div>

    </section>
    <!--FIM BANNER DESTAQUE-->

    <!--INICIO EM ALTA-->
    <section class="popular container" id="popular">

        <!--INICIO TOPO EM ALTA-->
        <div class="topoFilmes">
            <h2 class="topoTitulo">Em Alta</h2>

            <!--INICIO SETA SLIDE-->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <!-- FIM SETA SLIDE-->

        </div>
        <!--FIM TOPO EM ALTA-->

        <!--INICIO BOX SLIDE EM ALTA-->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!--INICIO SLIDE ITEM BOX SLIDE EM ALTA-->
                <div class="swiper-slide">
                    <!-- INCIO BOX FILME -->
                    <div class="filme-box">
                        <img src="assets/img/filme-1.jpg" alt="" class="filme-box-img">

                        <div class="box-titulo">
                        <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                        <span class="categoria-filme">Lorem</span>
                            <a href="ver-filme.php" class="ver-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <!-- FIM BOX FILME -->
                </div>
                <!--FIM SLIDE ITEM BOX SLIDE EM ALTA-->

                <!--INICIO SLIDE ITEM BOX SLIDE EM ALTA-->
                <div class="swiper-slide">
                    <!-- INCIO BOX FILME -->
                    <div class="filme-box">
                        <img src="assets/img/filme-2.jpg" alt="" class="filme-box-img">

                        <div class="box-titulo">
                        <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                        <span class="categoria-filme">Lorem</span>
                            <a href="ver-filme.php" class="ver-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <!-- FIM BOX FILME -->
                </div>
                <!--FIM SLIDE ITEM BOX SLIDE EM ALTA-->

                <!--INICIO SLIDE ITEM BOX SLIDE EM ALTA-->
                <div class="swiper-slide">
                    <!-- INCIO BOX FILME -->
                    <div class="filme-box">
                        <img src="assets/img/filme-3.jpg" alt="" class="filme-box-img">

                        <div class="box-titulo">
                        <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                        <span class="categoria-filme">Lorem</span>
                            <a href="ver-filme.php" class="ver-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <!-- FIM BOX FILME -->
                </div>
                <!--FIM SLIDE ITEM BOX SLIDE EM ALTA-->

                <!--INICIO SLIDE ITEM BOX SLIDE EM ALTA-->
                <div class="swiper-slide">
                    <!-- INCIO BOX FILME -->
                    <div class="filme-box">
                        <img src="assets/img/filme-4.jpg" alt="" class="filme-box-img">

                        <div class="box-titulo">
                        <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                        <span class="categoria-filme">Lorem</span>
                            <a href="ver-filme.php" class="ver-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <!-- FIM BOX FILME -->
                </div>
                <!--FIM SLIDE ITEM BOX SLIDE EM ALTA-->

                <!--INICIO SLIDE ITEM BOX SLIDE EM ALTA-->
                <div class="swiper-slide">
                    <!-- INCIO BOX FILME -->
                    <div class="filme-box">
                        <img src="assets/img/filme-5.jpg" alt="" class="filme-box-img">

                        <div class="box-titulo">
                        <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                        <span class="categoria-filme">Lorem</span>
                            <a href="ver-filme.php" class="ver-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <!-- FIM BOX FILME -->
                </div>
                <!--FIM SLIDE ITEM BOX SLIDE EM ALTA-->

                <!--INICIO SLIDE ITEM BOX SLIDE EM ALTA-->
                <div class="swiper-slide">
                    <!-- INCIO BOX FILME -->
                    <div class="filme-box">
                        <img src="assets/img/filme-6.jpg" alt="" class="filme-box-img">

                        <div class="box-titulo">
                        <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                        <span class="categoria-filme">Lorem</span>
                            <a href="ver-filme.php" class="ver-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <!-- FIM BOX FILME -->
                </div>
                <!--FIM SLIDE ITEM BOX SLIDE EM ALTA-->

                <!--INICIO SLIDE ITEM BOX SLIDE EM ALTA-->
                <div class="swiper-slide">
                    <!-- INCIO BOX FILME -->
                    <div class="filme-box">
                        <img src="assets/img/filme-7.jpg" alt="" class="filme-box-img">

                        <div class="box-titulo">
                            <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                            <span class="categoria-filme">Lorem</span>
                            <a href="ver-filme.php" class="ver-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <!-- FIM BOX FILME -->
                </div>
                <!--FIM SLIDE ITEM BOX SLIDE EM ALTA-->

            </div>
        </div>
        <!--FIM BOX SLIDE EM ALTA-->

    </section>
    <!--FIM EM ALTA-->

    <!--INICIO FILMES-->
    <section class="filmes container" id="movies">
        <!--TOPO FILMES-->
        <div class="topoFilmes">
            <h2 class="topoTitulo">
                Filmes e Shows
            </h2>
        </div>
        <!--FIM TOPO FILMES-->

        <!--INICIO CORPO FILMES-->
        <div class="filmes-content">
            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-8.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->

            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-9.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->

            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-10.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->

            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-11.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->

            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-12.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->

            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-13.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->

            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-14.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->

            <!-- INCIO BOX FILME -->
            <div class="filme-box">
                <img src="assets/img/filme-15.jpg" alt="" class="filme-box-img">

                <div class="box-titulo">
                    <h2 class="titulo-filme">Lorem: ipsum dolor sit amet!</h2>
                    <span class="categoria-filme">Lorem</span>
                    <a href="ver-filme.php" class="ver-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- FIM BOX FILME -->
        </div>
        <!--FIM CORPO FILMES-->

    </section>
    <!--FIM FILMES-->

    <div class="proxima-pagina">
        <a href="" class="proxima-btn">Próxima Página</a>
    </div>

    <!--INICIO RODAPE DO SITE-->
    <footer class="direitos">
        <p>&#169; Todos os direitos reservados</p>
    </footer>
    <!--FIM RODAPE DO SITE-->


    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>