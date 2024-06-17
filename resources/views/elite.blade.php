@include('partials.nav')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/animat.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="imagenes/ico.ico">
    <title>Elite</title>
  </head>
  <body>
 @include('partials.redes')
    
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="bene" style="padding-top: 172px;">EQUIPOS</h3>
            <h3 class="subb" style="padding-top: 0px;">GYM ELITE</h3>
            <div class="col-sm-4 gym">
                <img class="zoom" src="/imagenes/gym elite/cp-301.jpg">
              <p class="tp">CP-301 </p>
              <h2 class="sut">Combo prensa - Tracción
                Hércules PLUS</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img class="zoom" src="/imagenes/gym elite/cp-302.jpg">
              <p class="tp">CP-302</p>
              <h2 class="sut">Prensa hombros
                Hércules PLUS</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img class="zoom" src="/imagenes/gym elite/cp-305.jpg">
              <p class="tp">CP-305</p>
              <h2 class="sut">Entrenador mariposa pectoral PLUS</h2> 
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