@include('partials.nav')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css"> --}}

    {{-- <link href="{{ asset('public/css/style.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('/css/animat.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <link rel="icon" href="imagenes/imagenes/ico.ico">
    <title>Equipos</title>
  </head>
  <body>
   @include('partials.redes')
    {{-- <div class="flecha">
        <li class="nav-item fle">
            <a class="nav-link active" aria-current="page" href="#nav"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
        </svg></a>
        </li>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
        <div class="container-fluid">
          <img class="logo" src="/imagenes/imagenes/logo.png">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">¿QUIÉNES SOMOS?</a>
              </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#equipos" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Equipos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="gym.html">GYM</a></li>
                    <li><a class="dropdown-item" href="elite.html">GYM ELITE</a></li>
                    <li><a class="dropdown-item" href="hidraulico.html">HIDRAULICOS</a></li>
                    <li><a class="dropdown-item" href="ludico.html">LUDICO</a></li>
                    <li><a class="dropdown-item" href="energy.html">ENERGY</a></li>
                  </ul>
                </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contacto.html">CONTACTO</a>
              </li>
            </ul>
          </div>
        </div>
    </nav> --}}
    <div class="container-fluid contvid">
        <video class="video__iframe" src="/imagenes/imagenes/2.mov" autoplay muted loop></video>
        <img class="tres" style="padding-top: 38%;" src="/imagenes/imagenes/efect.png">
    </div>
    <div class="container-fluid">
  <div class="container">
        <div class="row justify-content-center">
            <h3 class="bene" style="padding-top: 172px;">EQUIPOS</h3>
            <h3 class="subb" style="padding-top: 0px;">GYM</h3>
            <div class="col-sm-4 ">
              <img  class="zoom" src="/imagenes/gym/cp-103.jpg">
            <p class="tp">CP-103</p>
            <h2 class="sut">Prensa de Pierna Doble</h2> 
          </div>
          <div class="col-sm-4 ">
              <img  class="zoom" src="/imagenes/gym/cp-106.jpg">
            <p class="tp">CP-106</p>
            <h2 class="sut">Prensa Pectoral Hércules</h2> 
          </div>
          <div class="col-sm-4">
            <img  class="zoom" src="/imagenes/gym/cp-127.jpg">
          <p class="tp">CP-127</p>
          <h2 class="sut">Entrenador Doble Squi</h2> 
        </div>
            <div class="bto"><a href="gym.html"><button type="button" class="btn btn-warning btnn">VER MÁS</button></a></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="subb" style="padding-top: 140px;">GYM ELITE</h3>
            <div class="col-sm-4">
              <img class="zoom" src="/imagenes/gym elite/cp-301.jpg">
            <p class="tp">CP-301 </p>
            <h2 class="sut">Combo prensa - Tracción
              Hércules PLUS</h2> 
          </div>
          <div class="col-sm-4">
              <img class="zoom" src="/imagenes/gym elite/cp-302.jpg">
            <p class="tp">CP-302</p>
            <h2 class="sut">Prensa hombros
              Hércules PLUS</h2> 
          </div>
          <div class="col-sm-4">
              <img class="zoom" src="/imagenes/gym elite/cp-305.jpg">
            <p class="tp">CP-305</p>
            <h2 class="sut">Entrenador mariposa pectoral PLUS</h2> 
          </div>
            <div class="bto"><a href="elite.html"><button type="button" class="btn btn-warning btnn">VER MÁS</button></a></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="subb" style="padding-top: 140px;">HIDRAULICO</h3>
            <div class="col-sm-4">
              <img  class="zoom" src="imagenes/hidraulicos/UBX-217.jpg">
            <p class="tp">CP-404</p>
            <h2 class="sut">Entrenador hidráulico
              para sentadillas</h2> 
          </div>
          <div class="col-sm-4">
              <img  class="zoom" src="imagenes/hidraulicos/UBX-218.jpg">
            <p class="tp">CP-405</p>
            <h2 class="sut">Entrenador hidráulico completo
              para pierna</h2> 
          </div>
          <div class="col-sm-4">
              <img  class="zoom" src="imagenes/hidraulicos/UBX-244.jpg">
            <p class="tp">CP-406</p>
            <h2 class="sut">Entrenador hidráulico para triceps</h2> 
          </div>
            <div class="bto"><a href="hidraulico.html"><button type="button" class="btn btn-warning btnn">VER MÁS</button></a></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="subb" style="padding-top: 140px;">LUDICO</h3>
            <div class="col-sm-4">
                <img   class="zoom" src="imagenes/ludico/cp-206.jpg">
              <p class="tp">CP-206</p>
              <h2 class="sut">Columpio</h2> 
            </div>
            <div class="col-sm-4">
                <img  class="zoom" src="imagenes/ludico/cp-220.jpg">
              <p class="tp">CP-221</p>
              <h2 class="sut">Divertijuego 14</h2> 
            </div>
            <div class="col-sm-4">
              <img  class="zoom" src="imagenes/ludico/cp-205.jpg">
            <p class="tp">CP-205</p>
            <h2 class="sut">Puente Colgante</h2> 
          </div>
            <div class="bto"><a href="ludico.html"><button type="button" class="btn btn-warning btnn">VER MÁS</button></a></div>
        </div>
    </div>
        <div class="container">
        <div class="row justify-content-center">
            <h3 class="subb" style="padding-top: 140px;">ENERGY</h3>
              <div class="col-sm-4 gym">
                <img  class="zoom" src="imagenes/recargables/503.jpg">
              <p class="tp">CP-503</p>
              <h2 class="sut">Bici leta de mano recargable</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="imagenes/recargables/504.jpg">
              <p class="tp">CP-504</p>
              <h2 class="sut">Entrenador hidráulico para sentadillas</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="imagenes/recargables/505.jpg">
              <p class="tp">CP-505</p>
              <h2 class="sut">Entrenador hidráulico completo para pierna</h2> 
            </div>
            <div class="bto"><a href="recargable.html"><button type="button" class="btn btn-warning btnn">VER MÁS</button></a></div>
        </div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>