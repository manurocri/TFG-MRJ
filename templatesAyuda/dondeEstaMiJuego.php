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
   <h1 class="px-3 naranjilla titulomasvendidos">Política de Compra</h1>
    </a>
  </header>

  <main>
    <h2 class="naranjilla">POLÍTICA DE COMPRA UNLIMITEDGAMES</h2>
    <p class="fs-5  text-white">
    A la hora de realizar compras online, uno de los factores que se deben tener en cuenta son las políticas de envío. Estas determinarán las condiciones y tiempos en los que el pedido será despachado y, por ello, son de vital importancia a la hora de transmitir confianza y asegurar una buena experiencia de compra. 

Qué son las políticas de envío
Se denominan como políticas de envío al conjunto de normas y directrices que describen cómo se llevará a cabo el proceso de envío de los productos adquiridos. Estas políticas deben aparecer en el marketplace o página de compra, y deben ser fácilmente accesibles. De esta forma, el cliente podrá saber qué puede esperar y qué no una vez que haya completado su compra. 
Las políticas de envío son importantes porque aportan confianza al comprador (le aportan información concreta sobre cómo se gestionará el envío y la entrega de su pedido) y constituyen un marco legal de referencia respecto a la compra realizada. De esta forma, dotan de seguridad al proceso de compra y, además, permiten que el cliente sepa cuándo y en qué condiciones va a recibir su pedido. 
Tanto si se trata de envíos nacionales como internacionales, una buena política de envío establece los medios de envío en el momento de la compra. De esta forma, el cliente sabe si su pedido se enviará por vía aérea o marítima, por transporte de ferrocarril o de carretera, etc. Además, si se puede completar con un sistema de seguimiento en transporte logístico al que tenga acceso el cliente, mejor.    
</p>
   

   


  </main>


  <footer class="pt-5 my-5 text-muted border-top">
  </footer>
</div>






<?php include("../templatesPlataformasCabecerayPie/piedepaginaFixed.php"); ?>