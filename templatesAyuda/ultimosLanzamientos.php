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
   <h1 class="px-3 naranjilla titulomasvendidos">Últimos Lanzamientos</h1>
    </a>
  </header>

  <main>
    <h2 class="naranjilla">ÚLTIMOS LANZAMIENTOS UNLIMITEDGAMES</h2>
    <p class="fs-5  text-white">
    Solo serán reservables aquellos juegos que permanecen disponibles. Cuando uno de nuestros juegos es reservado, este se bloquea automáticamente y no podrá ser reservada.

Para una reserva con éxito el usuario debe efectuar el pago de la reserva , una vez en el local abonará el restante.

No se permite el traslado de los juegos a un tercero. Es necesario ponerse en contacto con nosotros en circunstancias especiales.

Usted es el único responsable de introducir sus datos correctamente en el formulario de reserva online.

La reserva se convierte en nula y la entrada será rechazada si el equipo no se presenta o llega 10 minutos o más tarde. En tal situación, debido al carácter de la reserva, el dinero no es reembolsable y la reserva no podrá ser cambiada.

Métodos de Pago: Utilizamos sistemas de pago seguros para proteger la seguridad en el pago mediante tarjeta de crédito o débito (VISA o MASTERCARD). Los datos confidenciales del pago son transmitidos directamente y de forma encriptada (SSL) a la entidad financiera. Al hacer el pago a través de pasarela de pago seguro, el sistema verificará automáticamente que la tarjeta de crédito está activada para el Comercio Electrónico Seguro. Después conectará con el banco emisor de la misma, el cual autorizará la operación. En el caso de que el TPV Virtual informara de la denegación de la tarjeta, se cancelará automáticamente el pedido.

         </p>
   

   


  </main>


  <footer class="pt-5 my-5 text-muted border-top">
  </footer>
</div>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>