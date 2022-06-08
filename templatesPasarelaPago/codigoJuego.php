<?php
session_start();
if (isset($_SESSION["userId"])) {
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogin.php");
} else {
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogout.php");
}
?>


<div class="container">
  <main>
    <div class="py-5 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cart-check d-block mx-auto mb-4 text-white" viewBox="0 0 16 16">
        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
      </svg>
      <h1 class="text-white titulomasvendidos">Compra realizada con éxito</h1>
    </div>





    

<div class="row">

    <div class="col-md-14">
        <?php

        
        $numeroAleatorio=rand(11111111111111111,99999999999999999);
       


        $idJuego = $_GET['idJ'];

        require '../includes/dbh.inc.php';
        $stmt = mysqli_stmt_init($conn);

        $sql = "SELECT rutaImg FROM productos WHERE id=$idJuego";

        mysqli_stmt_prepare($stmt, $sql);

        mysqli_stmt_execute($stmt);

        $resultado = mysqli_stmt_get_result($stmt);

        while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
          foreach ($fila as $f) {
            echo
            '<div class="h-100 p-5 text-white bg-dark rounded-5" style="background-image: url(', $f, '); background-size: cover;">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
        

        <div class="row justify-content-center">

        <h1 class="col-5 naranjilla bg-dark rounded-5">INTRODUCE TU CÓDIGO</h1>

        <div class="minispacer"></div>

        <h1 class="col-4 pl-2 naranjilla bg-dark rounded-5"> ',$numeroAleatorio,'</h1>

        </div>

        

        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>

            </div>';
          }
        }
            
        ?>
        
      </div>

      </div>

      

    <div class="minispacer"></div>


    <a href="../index.php" style="text-decoration: none;">
    <input class="w-100 btn btn-dark naranja btn-lg" type="button"  value="Volver Al Inicio" >
    </a>

    </form>
</div>
</div>
</main>

<div class="spacer"></div>


</div>

<div class="spacer"></div>

<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>