@extends('layouts.app')

@section('contenido')
<div id="main" class="">
    <div class="my-4 mx-3 mx-md-5">
            <h1>SOBRE JOSSDEV</h1>
            <hr class="mb-2"/>
        <p>
            Nuestra empresa nació de la idea de poder apoyar ha aquellas pequeñas empresan que
            no cuentan con el presupuesto suficiente para costear una gran WEB
            y desean migrar a las plataformas virtuales.
        </p>
    </div>
    
 
<!-- TARJETAS -->
    <div id="tarjetas" class="m-3 mx-md-5">
        <h1>EQUIPO DE TRABAJO</h1>
        <hr class="mb-2"/>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-center">
            <div class="col">
                <div class="card">
                <img src="img/img-perfil.png" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title">JOSEPH MORI</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/img-perfil.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BRYAN MORI</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/img-perfil.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PERCY OLARTE</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/img-perfil.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    

</div>

<br>


@endsection