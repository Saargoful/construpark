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
    <link rel="icon" href="/imagenes/imagenes/ico.ico">
    <title>Energy</title>
  </head>
  <body>
   @include('partials.redes')
   
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="bene" style="padding-top: 172px;">EQUIPOS</h3>
            <h3 class="subb" style="padding-top: 0px;">ENERGY</h3>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/501.jpg">
              <p class="tp">CP-501</p>
              <h2 class="sut">Bici leta recargable</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/502.jpg">
              <p class="tp">CP-502</p>
              <h2 class="sut">Bici leta de spinning recargable</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/503.jpg">
              <p class="tp">CP-503</p>
              <h2 class="sut">Bici leta de mano recargable</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/504.jpg">
              <p class="tp">CP-504</p>
              <h2 class="sut">Entrenador hidráulico para sentadillas</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/505.jpg">
              <p class="tp">CP-505</p>
              <h2 class="sut">Entrenador hidráulico completo para pierna</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/506.jpg">
              <p class="tp">CP-506</p>
              <h2 class="sut">Entrenador hidráulico para triceps</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/507.jpg">
              <p class="tp">CP-507</p>
              <h2 class="sut">Bicicleta de mano ajustable</h2> 
            </div>
            <div class="col-sm-4 gym">
                <img  class="zoom" src="/imagenes/recargables/508.jpg">
              <p class="tp">CP-508</p>
              <h2 class="sut">Elíptica ajustable</h2> 
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