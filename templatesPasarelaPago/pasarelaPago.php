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
      <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cart d-block mx-auto mb-4 text-white" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </svg>
      <h1 class="text-white titulomasvendidos">Pasarela de pago</h1>
    </div>





    <hr class="my-1">
    <?php
    $idJ = $_GET['idJ'];
    echo '<form action="./pasarelaPagoFinal.php?idJ=', $idJ, '" method="post">';
    // echo '<a href="./pasarelaPagoFinal.php?idJ=', $idJ, '" style="text-decoration: none;>"';
    ?>

    <div class="row gy-3">

      <div class="col-md-6">
        <label for="cc-name" class="form-label text-white">Nombre en la tarjeta</label>
        <input type="text" maxlength="30" class="form-control" id="cc-name" placeholder="" required>

      </div>

      <div class="col-md-6">
        <label class="form-label text-white">Número de la tarjeta</label>
        <input type="text" maxlength="16" minlength="-16" class="form-control"  placeholder="" required>

      </div>

    </div>

    <div class="minispacer"></div>

    <div class="row">

      <div class="col-md-3">
        <label for="cc-expiration" class="form-label text-white">Fecha de expiración</label>
        <input type="text" maxlength="5" minlength="-5" class="form-control" id="cc-expiration" placeholder="MM/AA" required>

      </div>

      <div class="col-md-3">
        <label for="cc-cvv" class="form-label text-white">CVC/CVV</label>
        <input type="text" maxlength="3" minlength="-3" class="form-control" id="cc-cvv" placeholder="000" required>

      </div>

      <div class="col-md-3">

        <div class="minispacer"></div>

        <h1 class="naranjilla titulomasvendidos">
          <?php
          $idJuego = $_GET['idJ'];

          require '../includes/dbh.inc.php';
          $stmt = mysqli_stmt_init($conn);

          $sql = "SELECT nombreJuego FROM productos WHERE id=$idJuego";

          mysqli_stmt_prepare($stmt, $sql);

          mysqli_stmt_execute($stmt);

          $resultado = mysqli_stmt_get_result($stmt);

          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
            foreach ($fila as $f) {
              echo '<small>', $f, '</small>';
            }
          }
          ?>
        </h1>

      </div>


      <div class="col-md-2">

        <div class="minispacer"></div>

        <h1 class="naranjilla titulomasvendidos">
          <?php
          $idJuego = $_GET['idJ'];
          require '../includes/dbh.inc.php';
          $stmt = mysqli_stmt_init($conn);
          $sql = "SELECT precio FROM productos WHERE id=$idJuego";

          mysqli_stmt_prepare($stmt, $sql);

          mysqli_stmt_execute($stmt);

          $resultado = mysqli_stmt_get_result($stmt);

          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
            foreach ($fila as $f) {
              echo '<small>', $f, '</small>';
            }
          }
          ?>
          €

        </h1>

      </div>


    </div>

    <hr class="my-4">

    <input class="w-100 btn btn-dark naranja btn-lg" type="submit" value="Pagar">


    </form>
</div>
</div>
</main>

<div class="spacer"></div>


</div>

<div class="spacer"></div>

<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>