@include('partials.nav')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    

    <link href="{{ asset('/css/animat.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="icon" href="{{ asset('/imagenes/imagenes/ico.ico') }}" type="image/x-icon">
    
  
    <title>Construparks</title>
  </head>
  <body>
  
@include('partials.redes')
        
    <div class="container-fluid contvid">
        <video class="video__iframe" src="/imagenes/imagenes/27.mp4" autoplay muted loop></video>
        <img  data-aos="slide-up" class="tres" style="padding-top: 38%;" src="/imagenes/imagenes/efect.png">
    </div>
    <div class="container-fluid eje">
        <div class="row sp">
            <div class="col-sm-6 sin"><img  class="im" data-aos="flip-up" src="imagenes/imagenes/Playtime-527192.webp"></div>
            <div class="col-sm-6 azul sin">
              <p class="taz"><strong class="tit1">¿Quienes somos?</strong><br><br>
                Somos una empresa fundada en el año 2010, dedicada a ofrecer
                soluciones en equipos recreativos, deportivos y mobiliario para
                espacios urbanos, con la finalidad de promover la convivencia
                familiar y el sano entretenimiento. con los estándares de calidad,
                servicio, diseño y producción más altos.<br>
                Nuestros productos cuentan con estándares de calidad altos
                dentro del mercado, ofreciendo el diseño y la construcción de
                espacios urbanos con el equipamiento adecuado.</p>
            </div>  
        </div>
    </div>
    
    <div class="container-fluid bankUno" >
     
        <h1 data-aos="zoom-in" >
            NOSOTROS LO TRANSFORMAMOS
        </h1>
    </div>
    <div class="container-fluid eje">
        <div class="row sp">
            <div class="col-sm-6 azul sin">
              <p class="taz"><strong class="tit1">¿Qué hacemos?</strong><br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div> 
            <div class="col-sm-6 sin"><img  class="im" data-aos="flip-up" src="/imagenes/imagenes/Sports-facilities-446639.webp"></div>
        </div>
    </div>
  <!-- <div  id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
   <div class="container-fluid carr">
        <p class="lore" style="color: white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm-6">
                          <div class="ct">
                            <h2>FASE 1</h2><br>
                            <h3><strong style="font-family: monospace; color: orange;">ANÁLISIS DEL ENTORNO Y EL SUELO</strong></h3>
                            <p class="vs">SE HACEN ESTUDIOS PARA DETERMINAR LA CALIDAD DEL SUELO Y DEFINIR LA COMPOSICIÓN DE LOS PAVIMENTOS
                               Y JARDINES Y EL TIPO DE CIMENTACIÓN DE LOS EQUIPOS.</p>
                          </div>
                    </div>
                    <div class="col-sm-6">
                            <img data-aos="zoom-in" src="imagenes/Crop-engineers-browsing-tablet-537180.webp" class="carusel">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-6">
                          <div class="ct">
                            <h2>FASE 2</h2><br>
                            <h3><strong style="font-family: monospace; color: orange;">PROYECTO CONCEPTUAL Y ARQUITECTÓNICO</strong></h3>
                            <p class="vs">SE HACEN EJERCICIOS DE DISEÑO Y SE DIBUJAN LAS DIFERENTES POSIBILIDADES DE DISEÑO DEL PARQUE Y 
                               DISTRIBUCIÓN DE LOS EQUIPOS, SE HACEN PREVISUALIZACIONES O RENDERS DE LA PROPUESTA.</p>
                          </div>
                    </div>
                    <div class="col-sm-6">
                            <img data-aos="zoom-in" src="imagenes/camara05.jpg" class="carusel">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-6">
                          <div class="ct">
                            <h2>FASE 3</h2><br>
                            <h3><strong style="font-family: monospace; color: orange;">PROYECTO EJECUTIVO</strong></h3>
                            <p class="vs">SE DETERMINAN TODOS LOS ASPECTOS QUE INTERVIENEN EN EL DISEÑO, SE DEFINEN LOS TIPOS DE SUELO Y VEGETACIÓN
                            Y TIPO DE ANCLAJE DE LOS EQUIPOS S Y SE REALIZAN LOS DIBUJOS PARA QUE LOS CONSTRUCTORES PUEDAN LEERLOS Y EJECUTAR LA OBRA.</p>
                          </div>
                    </div>
                    <div class="col-sm-6">
                            <img data-aos="zoom-in" src="imagenes/Discussing-ideas-for-design-539119.webp" class="carusel">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-6">
                          <div class="ct">
                            <h2>FASE 4</h2><br>
                            <h3><strong style="font-family: monospace; color: orange;">CONSTRUCCIÓN</strong></h3>
                            <p class="vs">
                             SE HACE UN DESPALME DEL TERRENO, ENRIQUECIMIENTO DEL SUELO SEGÚN EL CASO, NIVELACIÓN Y COMPACTACIÓN DEL SUELO.<br>
                             SE FORJAN LOS ELEMENTOS DE CONCRETO COMO CIRCULACIONES PEATONALES Y PLAZAS, SE PREPARA LA CIMENTACIÓN DE CADA JUEGO SACANDO UN MOLDE DE LA POSICIÓN DE LOS BARRENOS EN LA PLACA DEL JUEGO PARA PREPARAR EL ANCLAJE SEGÚN LO REQUIERA CADA JUEGO.<br>
                             SE COLOCAN LOS ACABADOS EN LOS PISOS, YA SEA UN MATERIAL SUELTO COMO GRAVA O ARENA, O UN MATERIAL FIRME COMO EL CONCRETO.<br>
                             SE INSTALAN LOS JUEGOS DE ACUERDO A SUS REQUERIMIENTOS Y ESPECIFICACIONES
                            </p>
                          </div>
                    </div>
                    <div class="col-sm-6">
                            <img data-aos="zoom-in" src="imagenes/45af92e6-a4dc-44ec-a9df-c531c4ba5305.webp" class="carusel">
                    </div>
                </div>
            </div>
          </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-chevron-left der" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
            </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-chevron-right der" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </button>
        </div>
    </div> -->
    <div class="container-fluid botm">
      <div class="row">
          <div class="col-3">
            <div class="contenedor">
              <img  class="img-fluid" src="/imagenes/imagenes/gym.jpg">
              <img  class="img-fluid top" src="imagenes/imagenes/GymColores.jpg">
            </div>
          </div>
          <div class="col-3">
            <div class="contenedor">
              <img  class="img-fluid " src="/imagenes/imagenes/Ludico Infantil color.jpg">
              <img  class="img-fluid top" src="/imagenes/imagenes/Ludico infantil colores.jpg">
            </div>
          </div>
          <div class="col-3">
            <div class="contenedor">
              <img  class="img-fluid " src="/imagenes/imagenes/gymelite.jpg">
              <img  class="img-fluid top" src="/imagenes/imagenes/gymelite2.jpg">
             </div>
          </div>
          <div class="col-3">
            <div class="contenedor">
              <img  class="img-fluid" src="/imagenes/imagenes/hifraulico color.jpg">
              <img  class="img-fluid top" src="/imagenes/imagenes/hidraulico colores.jpg">
            </div>  
          </div>
      </div>
  </div>

             <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
             <script>
             AOS.init();
             </script>

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