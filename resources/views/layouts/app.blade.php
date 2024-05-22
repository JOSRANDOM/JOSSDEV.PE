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
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
      />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    </head>
    <body class="site-body min-w-96">
        <header class="p-3 border-b bg-white">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/logos/d-.png" alt="Logo de BANQUEA.pe" style="max-width: 200px; height: auto;">


            </div>
        </header>

        <main class="bg-white mx-auto mt-2 text-black ">

            <div>
                <h2>
                     @yield('titulo')
                </h2>
                    @yield('contenido')
            </div>

            
        </main>

        <!--FOOTER-->
        <footer id="t3-footer" class="wrap t3-footer">
            <div class="container">
                <div class="t3-spotlight t3-footnav row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
        
    </body>
</html>
