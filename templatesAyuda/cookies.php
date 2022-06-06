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
   <h1 class="px-3 naranjilla titulomasvendidos">Política Cookies</h1>
    </a>
  </header>

  <main>
    <h2 class="naranjilla">POLÍTICA DE COOKIES UNLIMITEDGAMES</h2>
    <p class="fs-5  text-white">Política de cookies
UnlimitedGames informa acerca del uso de las cookies en su página web: www.miweb.es
¿Qué son las cookies?
Las cookies son archivos que se pueden descargar en su equipo a través de las páginas web. Son herramientas que tienen un papel
esencial para la prestación de numerosos servicios de la sociedad de la información. Entre otros, permiten a una página web
almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información
obtenida, se pueden utilizar para reconocer al usuario y mejorar el servicio ofrecido.<br>
Tipos de cookies
Según quien sea la entidad que gestione el dominio desde donde se envían las cookies y trate los datos que se obtengan se pueden
distinguir dos tipos:
<br><br>
• Cookies propias: aquéllas que se envían al equipo terminal del usuario desde un equipo o dominio gestionado
por el propio editor y desde el que se presta el servicio solicitado por el usuario.
<br><br>
• Cookies de terceros: aquéllas que se envían al equipo terminal del usuario desde un equipo o dominio que no es
gestionado por el editor, sino por otra entidad que trata los datos obtenidos través de las cookies.
En el caso de que las cookies sean instaladas desde un equipo o dominio gestionado por el propio editor pero la información que se
recoja mediante éstas sea gestionada por un tercero, no pueden ser consideradas como cookies propias.
Existe también una segunda clasificación según el plazo de tiempo que permanecen almacenadas en el navegador del cliente,
pudiendo tratarse de:
<br><br>
• Cookies de sesión: diseñadas para recabar y almacenar datos mientras el usuario accede a una página web. Se
suelen emplear para almacenar información que solo interesa conservar para la prestación del servicio
solicitado por el usuario en una sola ocasión (p.e. una lista de productos adquiridos).
<br><br>
• Cookies persistentes: los datos siguen almacenados en el terminal y pueden ser accedidos y tratados durante un
periodo definido por el responsable de la cookie, y que puede ir de unos minutos a varios años.
Por último, existe otra clasificación con cinco tipos de cookies según la finalidad para la que se traten los datos obtenidos:
    <br><br>
• Cookies técnicas: aquellas que permiten al usuario la navegación a través de una página web,
plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por
ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso
restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar
la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación,
almacenar contenidos para la difusión de vídeos o sonido o compartir contenidos a través de redes sociales.
<br><br>
• Cookies de personalización: permiten al usuario acceder al servicio con algunas características de carácter
general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el
idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al
servicio, etc.
<br><br>
• Cookies de análisis: permiten al responsable de las mismas, el seguimiento y análisis del comportamiento de los
usuarios de los sitios web a los que están vinculadas. La información recogida mediante este tipo de cookies se
utiliza en la medición de la actividad de los sitios web, aplicación o plataforma y para la elaboración de perfiles
de navegación de los usuarios de dichos sitios, aplicaciones y plataformas, con el fin de introducir mejoras en
función del análisis de los datos de uso que hacen los usuarios del servicio.
<br><br>
• Cookies publicitarias: permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios.
<br><br>
• Cookies de publicidad comportamental: almacenan información del comportamiento de los usuarios obtenida a
través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico
para mostrar publicidad en función del mismo.
<br><br>
• Cookies de redes sociales externas: se utilizan para que los visitantes puedan interactuar con el contenido de
diferentes plataformas sociales (facebook, youtube, twitter, linkedIn, etc..) y que se generen únicamente para
los usuarios de dichas redes sociales. Las condiciones de utilización de estas cookies y la información recopilada
se regula por la política de privacidad de la plataforma social correspondiente. </p>
    <div class="spacer"></div>

   


  </main>


  <footer class="pt-5 my-5 text-muted border-top">
  </footer>
</div>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>