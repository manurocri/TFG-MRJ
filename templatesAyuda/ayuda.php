<?php 
session_start();
if(isset($_SESSION["userId"])){
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogin.php");
} else{
 include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogout.php");   
}
?>



<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a class="d-flex align-items-center text-dark text-decoration-none">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-question-circle naranjilla" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
   </svg>      
   <h1 class="px-3 naranjilla titulomasvendidos">Ayuda</h1>
    </a>
  </header>

  <main>
    <h2 class="naranjilla">SERVICIO DE ASISTENCIA RÁPIDA</h2>
    <p class="fs-5 col-md-8 text-white">Accede a nuestras preguntas más frecuentes con un solo clic.</p>
    <div class="spacer"></div>

   

    <div class="row g-5">
      <div class="col-md-6">
        <h2 class="naranjilla">ENVÍO Y ENTREGA</h2>
        <ul class="icon-list">
          <li><a href="../templatesAyuda/enviosGratuitos.php" class="colorblancotexto linksnaranjilla">¿Cómo puedo obtener envíos gratuitos?</a></li>
          <li><a class="text-white text-decoration-line-through">¿Cuáles son las opciones de entrega de UnlimitedGames?</a></li>
        </ul>
      </div>

      <div class="col-md-6">
        <h2 class="naranjilla">DEVOLUCIONES</h2>
        <ul class="icon-list">
        <li><a class="text-white text-decoration-line-through">¿Cuál es la política de devoluciones de UnlimitedGames?</a></li>
        <li><a href="../templatesAyuda/devolverJuego.php" class="colorblancotexto linksnaranjilla">¿Cómo puedo devolver mi juego?</a></li>
        <li><a class="text-white text-decoration-line-through">¿Dónde está mi reembolso?</a></li>
        </ul>
      </div>

      <div class="row g-5">
      <div class="col-md-6">
        <h2 class="naranjilla">PEDIDOS</h2>
        <ul class="icon-list">
          <li><a href="../templatesAyuda/dondeEstaMiJuego.php" class="colorblancotexto linksnaranjilla">¿Política de compra?</a></li>
          <li><a class="text-white text-decoration-line-through">¿Puedo cambiar o cancelar mi juego?</a></li>
          <li><a class="text-white text-decoration-line-through">¿Ofrece UnlimitedGames descuentos?</a></li>

        </ul>
      </div>

      <div class="col-md-6">
        <h2 class="naranjilla">INFORMACIÓN DEL PRODUCTO</h2>
        <ul class="icon-list">
        <li><a href="../templatesAyuda/ultimosLanzamientos.php" class="colorblancotexto linksnaranjilla">¿Cómo puedo conseguir los últimos lanzamientos?</a></li>
        <li><a class="text-white text-decoration-line-through">¿Cómo puedo encontrar el juego adecuado?</a></li>
        </ul>
      </div>

    </div>


  </main>


  <footer class="pt-5 my-5 text-muted border-top">
  </footer>
</div>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>