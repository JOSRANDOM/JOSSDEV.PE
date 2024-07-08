@extends('layouts.app')

@section('contenido')
<div id="main" class="">
    <div>
        <img src="/img/bg-software.jpg" class="d-block w-100" />
    </div>
    <div class="overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-center text-md-end">
                    <h1>JOSSDEV</h1>
                    <p class="d-none d-md-block">
                    Buscamos la excelencia en todos nuestros desarrollos, nos adaptamos a tu presupuesto y disfrutamos lo que hacemos.
                    </p>
                    <a href="#" class="btn btn-outline-light">Deseo una WEB</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2>Herramientas de Desarrollo</h2>
    <div class="dev-tools-icons">
        <img src="/img/tools/laravel.png" class="tool-icon" alt="Laravel">
        <img src="/img/tools/flutter.png" class="tool-icon" alt="Flutter">
        <img src="/img/tools/javascript.png" class="tool-icon" alt="JavaScript">
        <img src="/img/tools/html.png" class="tool-icon" alt="html">
    </div>
</div>

<div class="container mt-5">
    <h2>Herramientas de Diseño</h2>
    <div class="dev-tools-icons">
        <img src="/img/tools/figma.svg.png" class="tool-icon" alt="Laravel">
        <img src="/img/tools/ps.svg.png" class="tool-icon" alt="Flutter">
        <img src="/img/tools/css.png" class="tool-icon" alt="css">
    </div>
</div>

<br>


@endsection