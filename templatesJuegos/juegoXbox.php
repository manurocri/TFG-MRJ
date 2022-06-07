<?php
session_start();
if (isset($_SESSION["userId"])) {
  include("../templatesPlataformasCabecerayPie/cabeceralogin.php");
} else {
  include("../templatesPlataformasCabecerayPie/cabeceralogout.php");
}
?>

<main>

  <div class="container py-4">

    <header class="pb-3 mb-4 border-bottom">
      <a class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-xbox text-white" viewBox="0 0 16 16">
          <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z" />
        </svg>
        <h1 class="px-3  text-white titulomasvendidos">Xbox</h1>
      </a>
    </header>



    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <?php
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
            '<div class="h-100 p-5 text-white bg-dark rounded-5" style="background-image: url(', $f, '); background-size: cover;"></div>';
          }
        }
        ?>
        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 bg-dark border-dark rounded-5">
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
                echo "$f";
              }
            }
            ?>
          </h1>
<<<<<<< HEAD
          <div class="row">
=======
          <div class="spacer"></div>
          <div class="row align-items-center">
            <h1 class="text-white titulomasvendidos">
            <?php
          $idJuego = $_GET['idJ'];
          require '../includes/dbh.inc.php';
          $stmt = mysqli_stmt_init($conn);
          $sql = "SELECT cantidad FROM productos WHERE id=$idJuego";

          mysqli_stmt_prepare($stmt, $sql);

          mysqli_stmt_execute($stmt);

          $resultado = mysqli_stmt_get_result($stmt);

          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
            foreach ($fila as $f) {
              echo '<small>Stock:', $f, '</small>';
            }
          }
          ?>
          <br>
              <small>
                
                <?php
                $idJuego = $_GET['idJ'];
                require '../includes/dbh.inc.php';
                $stmt = mysqli_stmt_init($conn);
                $sql = "SELECT precio FROM productos WHERE id=$idJuego";
>>>>>>> bd5765212d5507020a0f2fcd72d230eba126e6ec

<div class="spacer"></div>
<div class="row align-items-center">
  

    <div class="col">
      <!-- php --> <?php
                    $idJuego = $_GET['idJ'];
                    require '../includes/dbh.inc.php';
                    $stmt = mysqli_stmt_init($conn);
                    $sql = "SELECT cantidad FROM productos WHERE id=$idJuego";

                    mysqli_stmt_prepare($stmt, $sql);

                    mysqli_stmt_execute($stmt);

                    $resultado = mysqli_stmt_get_result($stmt);

                    while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                      foreach ($fila as $f) {
                        echo '<h1 class="text-white titulomasvendidos"><small >Stock:', $f, '</small></h1>';
                      }
                    }
                    ?>
      <!-- php -->
    </div>

    <br>

    <div class="col">
    <h1 class="text-white titulomasvendidos"> <small>
        <!-- php --> <?php
                      $idJuego = $_GET['idJ'];
                      require '../includes/dbh.inc.php';
                      $stmt = mysqli_stmt_init($conn);
                      $sql = "SELECT precio FROM productos WHERE id=$idJuego";

                      mysqli_stmt_prepare($stmt, $sql);

                      mysqli_stmt_execute($stmt);

                      $resultado = mysqli_stmt_get_result($stmt);

                      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                        foreach ($fila as $f) {
                          echo "$f";
                        }
                      }
                      ?>
        <!-- php -->

        €
      </small></h1>
    </div>
 

</div>

</div>

          <div class="minispacer"></div>
<<<<<<< HEAD
          <div class="row">

<div class="col">
  <?php
  $idJ = $_GET['idJ'];

  if (isset($_SESSION["userId"])) {
    echo '<a href="../templatesPasarelaPago/pasarelaPago.php?idJ=', $idJ, '" class="text-reset">';
  } else {
    echo '<a href="../php/login.php" class="text-reset">';
  }
  ?>


  <button class="btn btn-lg btn-dark naranja" type="button">Comprar Juego</button>
  </a>

  </div>

  <div class="col">

  <form action="../index.php">


    <input type="number" class="">

    <input class="btn btn-dark naranja px-4" type="submit" value="Añadir Stock">



  </form>

  </div>

</div>
=======
          <?php
          $idJ = $_GET['idJ'];
          if (isset($_SESSION["userId"])) {
            echo '<a href="../templatesPasarelaPago/pasarelaPago.php?idJ=', $idJ, '" class="text-reset">';
          } else {
            echo '<a href="../php/login.php" class="text-reset">';
          }
          ?>
          <button class="btn btn-lg btn-dark naranja" type="button">Comprar Juego</button>
          </a>
>>>>>>> bd5765212d5507020a0f2fcd72d230eba126e6ec

        </div>
      </div>
    </div>

    <div class="minispacer"></div>
    <div class="p-5 mb-4 bg-dark rounded-5">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold naranjilla">Descripción</h1>
        <p class="col-md fs-4 text-white">
          <?php
          $lang = $_GET['lang'];
          $idJuego = $_GET['idJ'];
          require '../includes/dbh.inc.php';
          $stmt = mysqli_stmt_init($conn);
          if ($lang == "es") {
            $sql = "SELECT descripcionES FROM productos WHERE id=$idJuego";
          } elseif ($lang == "en") {
            $sql = "SELECT descripcionEN FROM productos WHERE id=$idJuego";
          } elseif ($lang == "gr") {
            $sql = "SELECT descripcionGR FROM productos WHERE id=$idJuego";
          } elseif ($lang = "fr") {
            $sql = "SELECT descripcionFR FROM productos WHERE id=$idJuego";
          }
          mysqli_stmt_prepare($stmt, $sql);

          mysqli_stmt_execute($stmt);

          $resultado = mysqli_stmt_get_result($stmt);

          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
            foreach ($fila as $f) {
              echo "$f";
            }
          }
          ?>
        </p>
      </div>
    </div>

  </div>
</main>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>