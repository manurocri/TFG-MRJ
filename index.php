<?php 

 include("./templates/cabeceralogout.php");   

?>

  <!-- COOKIES -->
<div id="obj1">
  <nav  class="navbar navbar-default fixed-bottom fondocookies">
    <div class="container">
      <div class="row py-2">
        <div class="col-12 col-md text-center text-md-start ">
          <span class="text-white">
            Esta web utiliza cookies propias y/o de terceros para para que la web funcione, realizar estadísticas,
            cargar imágenes y vídeos. Antes de aceptarlas te invitamos a leer nuestra <a
              class="text-decoration-none naranjilla" href="/cookies">política de cookies</a>.
          </span>
        </div>
        <div class="col-12 col-md-auto d-flex justify-content-center align-items-center  py-3 py-md-0">
          <a id="botonAceptarCookies" class="js-cookie-accept btn btn-dark naranja px-4">
            Aceptar
          </a>
          <a id="botonRechazarCookies" class="js-cookie-decline ms-3 btn btn-dark naranja">
            Rechazar
          </a>
        </div>
      </div>
    </div>
  </nav>
</div>





  <!-- CAROUSEL -->
  <main>

    <!-- Carousel con las tres imagenes -->


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/eldenringinicio.jpg" height="">

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Elden Ring</h1>
              <p>Ya a la venta en UnlimitedGames</p>
              <p><a class="btn btn-lg btn-dark naranja" href="#">Juégalo ya!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/residentevilvillageinicio.png" height="">

          <div class="container">
            <div class="carousel-caption">
              <h1>Resident Evil Village</h1>
              <p>Sumergete en un mundo escalofriante</p>
              <p><a class="btn btn-lg btn-dark naranja" href="#">Cómpralo ya!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/diabloIVinicio.png" height="">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Diablo IV</h1>
              <p>Uno de los juegos mas esperados para este 2023</p>
              <p><a class="btn btn-lg btn-dark naranja" href="#">Resérvalo ya!</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sigiente</span>
      </button>

      <!-- espacio -->
      <div class="spacer"></div>
      <!-- espacio -->


    </div>


    <!-- espacio -->
    <div class="spacer"></div>
    <!-- espacio -->


    <!-- Iconos de plataformas
    ================================================== -->





    <div class="container marketing">

      <!-- Tres columnas de iconos debajo del carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle naranja" src="./img/iconopc.png" width="140" height="140">

          <h2 class="naranjilla">PC</h2>
          <p class="text-white">Todos tenemos la necesidad de buscar los mejores juegos de PC en algún momento.</p>
          <p><a class="btn btn-dark naranja" href="#">Saber más &raquo;</a></p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle naranja" src="./img/iconops4.png" width="140" height="140">


          <h2 class="naranjilla">Play Station</h2>
          <p class="text-white">Explora una generación de juegos más aclamados por la crítica, incluidos los éxitos en
            ventas de PlayStation Studios.</p>
          <p><a class="btn btn-dark naranja" href="#">Saber más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle naranja" src="./img/iconoxbox.png" width="140" height="140">


          <h2 class="naranjilla">Xbox</h2>
          <p class="text-white">Explora el catálogo completo de todos los juegos para la consola Xbox.</p>
          <p><a class="btn btn-dark naranja" href="#">Saber más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->




      <!-- espacio -->
      <div class="spacer"></div>
      <!-- espacio -->


      <div class="text-center">
        <h1 class="naranjilla titulomasvendidos">LOS MÁS VENDIDOS</h1>
      </div>



      <!-- Carteles de juegos debajo de iconos -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading naranjilla">Outlast II <span class="colornaranjatexto">Siente el terror en
              cualquier sitio.</span></h2>
          <p class="lead text-white">Some great placeholder content for the first featurette here. Imagine some exciting
            prose here.</p>
        </div>
        <div class="col-md-5">
          <img class="border border-secondary rounded-3" src="./img/outlast2.png" width="500px" height="281.25px">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading naranjilla">Resident Evil Village <span class="colornaranjatexto">Escapa como
              puedas.</span></h2>
          <p class="lead text-white">Another featurette? Of course. More placeholder content here to give you an idea of
            how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="border border-secondary rounded-3" src="./img/residentevilvillageinicio.png" width="500px"
            height="281.25px">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading naranjilla">The Last of Us Parte II <span
              class="colornaranjatexto">Sobrevive.</span></h2>
          <p class="lead text-white">And yes, this is the last block of representative placeholder content. Again, not
            really intended to be actually read, simply here to give you a better view of what this would look like with
            some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <img class="border border-secondary rounded-3" src="./img/thelastofus2.jpg" width="500px" height="281.25px">

        </div>
      </div>



      <!-- /Fin de los carteles publicitarios -->

      <!-- espacio -->
      <div class="spacer"></div>
      <!-- espacio -->


    </div><!-- container -->



  </main>


  <?php include("./templates/piedepagina.php"); ?>










  