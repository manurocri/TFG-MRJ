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
   <h1 class="px-3 naranjilla titulomasvendidos">Envíos Gratuitos</h1>
    </a>
  </header>

  <main>
    <h2 class="naranjilla">ENVÍOS GRATUITOS UNLIMITEDGAMES</h2>
    <p class="fs-5  text-white">
    Los gastos de envío en Península, Baleares y Canarias pueden variar dependiendo del departamento, del importe final del pedido y del tipo de envío u opción de recogida. El importe mínimo de pedido es de 10€.

En el caso de que la forma de pago elegida sea contra reembolso (solo en España peninsular y Baleares), los gastos de envío se incrementarán en 1,5€. Estos gastos son aplicados por envío, independientemente del número de artículos.

Si haces un pedido con varios artículos y éstos tienen distintos gastos de envío a una única dirección, se aplicará el del importe más alto.

Hay artículos que por sus características de peso y volumen o por las condiciones del domicilio de entrega (altura de techos, ascensor, hueco de la escalera…), sólo se pueden dejar a pie de calle. Pero si aun así deseas que te lo entreguemos en tu domicilio, deberás comunicarnos estas circunstancias previamente llamando al teléfono 900 373 900, te pasaremos un presupuesto de los gastos de envío y si lo aceptas procederemos a realizar las gestiones necesarias para entregártelo en el menor tiempo posible. Ten en cuenta que si fuera necesario por ejemplo, poner una grúa, se necesitan permisos especiales que conllevan unos trámites que pueden alargar el plazo de entrega.

No aplicable a pedidos con artículos de otras webs: Supermercado, Primeriti, etc... y ventas de artículos de Market Place.

         </p>
   

   


  </main>


  <footer class="pt-5 my-5 text-muted border-top">
  </footer>
</div>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>