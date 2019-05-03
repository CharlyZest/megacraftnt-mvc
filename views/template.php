<!DOCTYPE html>
<html lang="es-MX">
<head>
    <!-- <base href="/"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MegacraftNT - Servidor de Minecraft</title>
            <!-- SEO -->
    <meta name="keywords" content="minecraft, mexico, servidor mexicano, minecraft, megacraft,megacraftnt, ip, jugadores, skywars, survival, skyblock, ctw, practice, hcf, pvp, factions, diversion">
    <meta description="¡Comienza tu aventura! Se el mejor, construye grandes edificios, haz grandes cultivos, entra al caliente mundo del nether o cualquier otra cosa que se te ocurra!.">
    <meta author="Carlos G">
            <!-- SEO OG -->
    <meta property="og:title" content="MegacraftNT - Servidor de Mineacraft">
    <meta property="og:description" content="¡Comienza tu aventura! Se el mejor, construye grandes edificios, haz grandes cultivos, entra al caliente mundo del nether o cualquier otra cosa que se te ocurra!.">
    <meta property="og:image" content="https://megacraft.mx/static/img/logo-cuadro.png">
    <meta property="og:url" content="">
            <!-- SEO TW -->
    <meta name="twitter:site" content="@megacraftmx">
    <meta name="twitter:creator" content="@Charly_Evil">
    <meta name="twitter:card" content="summary">
            <!-- SEO Extras -->
    <meta property="og:site_name" content="MegacraftNT - Servidor de Mineacraft">
    <meta name="twitter:image:alt" content="Entra para ver más contenido!">
            <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
            <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col">
                <img class="impulso bounceIn" src="static/img/logo-vector.svg" alt="MegacraftNT">
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="boton-caja col-md-4" ><p class="boton bounceIn" onclick="copiar()"><span>PLAY.MEGACRAFT.MX</span></p></div>
            <div class="boton-caja col-md-4"><a href="/modalidades"><p class="boton bounceIn">Jugar Ahora</p></a></div>
            <div class="boton-caja col-md-4"><p class="boton bounceIn">Jugadores Conectados » <span id="jugadores"></span>/<span id="max"></span> </p></div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-md navbar-light" id="nav-bar">
        <a class="navbar-brand" href="/inicio">MegacraftNT </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu-desplegable" aria-controls="menu-desplegable" aria-expanded="false" aria-label="Desplegar Menu">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="menu-desplegable">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="/modalidades"><span class="fas fa-gamepad"></span> Modalidades</a></li>
                <li class="nav-item active"><a class="nav-link" href="https://foro.megacraft.mx" target="_blank"><span class="fas fa-comments"></span> Foro</a></li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" id="submenu-sanciones" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ban"></span> Sanciones</a>
                    <div class="dropdown-menu" aria-labelledby="submenu-sanciones">
                        <a class="dropdown-item" href="/reglas">Reglas</a>
                        <a class="dropdown-item" href="/sanciones">Lista de Sanciones</a>
                        <a class="dropdown-item" href="/apelar">Apelar</a>
                    </div>
                </li>
                <li class="nav-item active"><a class="nav-link" href="https://megacraftmx.buycraft.net"><span class="fas fa-store"></span> Tienda</a></li>
                <li class="nav-item active"><a class="nav-link" href="/cuenta"><span class="fas fa-user"></span> Cuenta</a></li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" id="submenu-soporte" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-life-ring"></span> Soporte</a>
                    <div class="dropdown-menu" aria-labelledby="submenu-soporte">
                        <a href="/ayuda" class="dropdown-item"><span class="fas fa-question"></span> Ayuda</a>
                        <a href="/ticket" class="dropdown-item"><span class="fas fa-ticket-alt"></span> Tickets</a>
                        <a href="/contacto" class="dropdown-item"><span class="fas fa-envelope-square"></span> Contacto</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container">
        <div class="row">
            <main class="col-sm-8">
                <?php 
                $mostrar = new Pagina();
                $mostrar -> mostrarPagina();
                ?>
            </main>
            <aside class="col-sm-4">
                <article class="col-12">
                    <p class="center">GoogleAds</p>
                    <hr>
                    <!-- <figure class="mt-3" id="GoogleAds" style="padding: 0 20px; margin: auto; width: 300px;height: 600px; background-color: #dfdfdf;"></figure> -->
                    <hr>
                </article>
                <article class="aside-bg col-12">
                    <div class="centro">
                        <a href='https://www.40servidoresmc.es/megacraft' target='_blank'><img style='max-width:160px;' src='https://www.40servidoresmc.es/img/botonvota.png' alt='Servidores de Minecraft 40servidoresMC, Vota por MegacraftNT'></a>
                    </div>
                </article>
                <article class="aside-bg col-12">
                    <div class="centro">
                        <p>Consulta la lista de los mejores <a href="https://www.40servidoresmc.es/" target="_blank">40servidoresMC</a> </p>
                    </div>
                </article>
            </aside>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4" id="about">
                    <h3>Sobre Nosotros</h3>
                    <hr>
                    <p>A principios de año un grupo de amigos decidieron crear una comunidad abierta para todos, para que juegues con tus amigos y te diviertas.</p>
                    <strong><p>!Conectate, Explora y Diviertete!</p></strong>
                </div>
                <div class="col-sm-4">
                    <h3>Enlaces</h3>
                    <hr>
                    <ul>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="/staff">Staff</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3>Contacto</h3>
                    <hr>
                    <a class="social" target="_blank" href="https://facebook.com/megacraftmx"><span class="fab fa-facebook-f"></span></a>
                    <a class="social" target="_blank" href="https://twitter.com/megacraftmx"><span class="fab fa-twitter"></span></a>
                    <br>
                    <a class="social" target="_blank" href="https://instagram.com"><span class="fab fa-instagram"></span></a>
                    <a class="social" href="mailto:contacto@megacraft.mx"><span class="fas fa-envelope"></span></a>
                </div>
            </div>
        </div>
        <div class="col footer-copy">
            <p>2018 &copy; MegacraftNT - Equipo de desarrollo MegacraftNT</p>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="static/js/megacraft.js"></script>
</body>
</html>