<?php 
session_start();
if(isset($_SESSION["userId"])){
  include("../templatesPlataformasCabecerayPie/cabeceralogin.php");
} else{
 include("../templatesPlataformasCabecerayPie/cabeceralogout.php");   
}
?>

<main>

  <div class="container py-4 ">
    
    <header class="pb-3 mb-4 border-bottom">
      <a href="../templatesPlataformas" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-playstation text-white" viewBox="0 0 16 16">
        <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z"/>
        </svg>
        <h1 class="px-3  text-white titulomasvendidos">PlayStation</h1>
      </a>
    </header>

    

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-5" style="background-image: url('../img/residentevilvillageinicio.png'); background-size: cover;">
        </div>
      </div>

      <div class="col-md-6 align-items-center">
        <div class="h-100 p-5 bg-dark border-dark rounded-5">
        <h1 class="naranjilla titulomasvendidos">Nombre del juego</h1>
        <div class="spacer"></div>
        <div class="row align-items-center">
          <h1 class="text-white titulomasvendidos">P.V.P <small>0.00€</small></h1>
        
          </div>

          <div class="minispacer"></div>
          
          <a href="../templatesPasarelaPago/pasarelaPago.php" class="text-reset">
          <button class="btn btn-lg btn-dark naranja"  type="button">Comprar Juego</button>
          </a>

        </div>
      </div>
    </div>

<div class="minispacer"></div>
    <div class="p-5 mb-4 bg-dark rounded-5">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold naranjilla">Descripción</h1>
        <p class="col-md-8 fs-4 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod felis id maximus tincidunt. Phasellus consequat lacus dolor, id pulvinar mauris malesuada vel.</p>
      </div>
    </div>
    
  </div>
</main>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>