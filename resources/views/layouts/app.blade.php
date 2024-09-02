<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="JOSSDEV, JD, BANQUEA.PE">
        <meta name="description" content="Desarrollados de acuerdo a tus necesidades">

        <title>JOSSDEV</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    </head>
    <body class="site-body min-w-96">
        <header class="site-body min-w-96">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="/img/logos/d-.png" alt="Logo de BANQUEA.pe" style="max-width: 100px; height: auto;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobrenosotros">Sobre Nosotros</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="bg-white mx-auto text-black ">

            <div>
                <!--<h2>
                     @yield('titulo')
                </h2>-->
                    @yield('contenido')
            </div>

            
        </main>

        <!--FOOTER-->
        <footer id="t3-footer" class="wrap t3-footer">
            <div class="container">
                <div class="t3-spotlight t3-footnav row">
                    <div class="col text-center">
                        <div class="t3-module module" id="Mod126">
                            <div class="module-inner">
                                <div class="module-ct">
                                    <div class="custom">
                                        <div class="footer-about">
                                            <img src="/img/logos/logo BM.png" alt="footer-logo" class="small-logo">
                                            <p>Buscamos la excelencia en todos nuestros desarrollos, nos adaptamos a tu presupuesto y disfrutamos lo que hacemos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <ul class="footer-social">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                    </ul>
                    <p>© Copyright 2024 JOSSDEV, Todos los Derechos Reservados.</p>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
