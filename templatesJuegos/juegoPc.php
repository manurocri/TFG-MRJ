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
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-pc-display text-white" viewBox="0 0 16 16">
        <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
        </svg>
        <h1 class="px-3  text-white titulomasvendidos">PC</h1>
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
        <h1 class="text-white titulomasvendidos">0.00<small>€</small></h1>
        
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
        <p class="col-md fs-4 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod felis id maximus tincidunt. Phasellus consequat lacus dolor, id pulvinar mauris malesuada vel.</p>
      </div>
    </div>
    
  </div>
</main>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>