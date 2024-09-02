@extends('layouts.app')

@section('contenido')
<div id="main" class="">
    <div>
        <img src="/img/bg-software.jpg" class="img-fluid" alt="" />
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

<div class="container mt-2 mt-lg-5">
    <h2>Herramientas de Desarrollo</h2>
    <div class="row mt-5 text-center">
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <img src="/img/tools/laravel.png" class="tool-icon" alt="Laravel">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <img src="/img/tools/flutter.png" class="tool-icon" alt="Flutter">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <img src="/img/tools/javascript.png" class="tool-icon" alt="JavaScript">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <img src="/img/tools/html.png" class="tool-icon" alt="html">
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2>Herramientas de Diseño</h2>
    <div class="row mt-5 text-center">
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <img src="/img/tools/figma.svg.png" class="tool-icon" alt="Laravel">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <img src="/img/tools/ps.svg.png" class="tool-icon" alt="Flutter">
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <img src="/img/tools/css.png" class="tool-icon" alt="css">
        </div>
    </div>
</div>

<br>


@endsection