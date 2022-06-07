<<<<<<< HEAD
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
   <h1 class="px-3 naranjilla titulomasvendidos">Delvolver Juego</h1>
    </a>
  </header>

  <main>
    <h2 class="naranjilla">DEVOLVER JUEGO UNLIMITEDGAMES</h2>
    <p class="fs-5  text-white">
    Las tiendas online están obligadas a ofrecer un plazo de devolución de 14 días. Aunque esto para la mayoría de la gente es suficiente, también podrías plantearte ampliar este plazo.

A los clientes les atraen más los plazos flexibles… pero además así se consiguen menos devoluciones. Sí, has leído bien: las empresas que experimentaron con la ampliación del plazo de devoluciones descubrieron que se redujo el número de productos devueltos en la medida en que aumentó el plazo.

Por ejemplo, Zalando cuenta con una política de devoluciones de 100 días. Incluso existen empresas que aceptan devoluciones hasta transcurrido un año de la compra.

Según los expertos existen dos explicaciones posibles para este fenómeno.

Si tienes más tiempo para pensártelo, te sientes menos presionado a devolver el producto de inmediato. Te quedas un tiempo con él hasta que acabas pensando “Bueno, pues igual tampoco está tan mal.”

La otra explicación posible es el llamado “endowdment effect” (efecto dotación). Cuanto más tiempo tiene un cliente un producto en sus manos, más apego empieza a sentir por él.

Por otro lado, con un plazo de entrega demasiado largo siempre se corre el peligro de recibir devoluciones de productos antiguos que ya no puedes poner a la venta.

Para poder hacer buen uso de los beneficios de un plazo largo de devoluciones protegiéndote a la vez de las desventajas te recomendamos un periodo de entre 30 y 90 días. Las grandes empresas de comercio digital como Amazon y Mediamarkt.es ofrecen plazos de devolución de 30 días.

Si pruebas tú también con este plazo, ya está bien. Pero ¿quieres rizar el rizo? Entonces inténtalo con 60 o 90 días y observa el efecto de estos plazos en tu tienda.

         </p>
   

   


  </main>


  <footer class="pt-5 my-5 text-muted border-top">
  </footer>
</div>





<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>
=======
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
   <h1 class="px-3 naranjilla titulomasvendidos">Delvolver Juego</h1>
    </a>
  </header>

  <main>
    <h2 class="naranjilla">DEVOLVER JUEGO UNLIMITEDGAMES</h2>
    <p class="fs-5  text-white">
    Las tiendas online están obligadas a ofrecer un plazo de devolución de 14 días. Aunque esto para la mayoría de la gente es suficiente, también podrías plantearte ampliar este plazo.

A los clientes les atraen más los plazos flexibles… pero además así se consiguen menos devoluciones. Sí, has leído bien: las empresas que experimentaron con la ampliación del plazo de devoluciones descubrieron que se redujo el número de productos devueltos en la medida en que aumentó el plazo.

Por ejemplo, Zalando cuenta con una política de devoluciones de 100 días. Incluso existen empresas que aceptan devoluciones hasta transcurrido un año de la compra.

Según los expertos existen dos explicaciones posibles para este fenómeno.

Si tienes más tiempo para pensártelo, te sientes menos presionado a devolver el producto de inmediato. Te quedas un tiempo con él hasta que acabas pensando “Bueno, pues igual tampoco está tan mal.”

La otra explicación posible es el llamado “endowdment effect” (efecto dotación). Cuanto más tiempo tiene un cliente un producto en sus manos, más apego empieza a sentir por él.

Por otro lado, con un plazo de entrega demasiado largo siempre se corre el peligro de recibir devoluciones de productos antiguos que ya no puedes poner a la venta.

Para poder hacer buen uso de los beneficios de un plazo largo de devoluciones protegiéndote a la vez de las desventajas te recomendamos un periodo de entre 30 y 90 días. Las grandes empresas de comercio digital como Amazon y Mediamarkt.es ofrecen plazos de devolución de 30 días.

Si pruebas tú también con este plazo, ya está bien. Pero ¿quieres rizar el rizo? Entonces inténtalo con 60 o 90 días y observa el efecto de estos plazos en tu tienda.

         </p>
   

   


  </main>


  <footer class="pt-5 my-5 text-muted border-top">
  </footer>
</div>





<?php include("../templatesPlataformasCabecerayPie/piedepaginaFixed.php"); ?>
>>>>>>> bd5765212d5507020a0f2fcd72d230eba126e6ec
