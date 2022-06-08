<?php
session_start();
if (isset($_SESSION["userId"])) {
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogin.php");
} else {
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogout.php");
}
?>








<div class="container px-4 pt-5" id="custom-cards">
  <h1 class="pb-2 border-bottom text-white titulomasvendidos">PC</h1>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=1";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=1" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=1" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/eldenringinicio.jpg'); ">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h4 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
            </h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=1";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
              </li>

            </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=10";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=10" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=10" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>

      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/Cyberpunk.jpg');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=10";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>

          </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=5";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=5" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=5" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/call3.jpg');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=5";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
           
          </ul>
        </div>

      </div>
      </a>
    </div>
  </div>
</div>




<div class="container px-4" id="custom-cards">


  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=55";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=55" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=55" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/diablo.jpeg'); ">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=55";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
           
          </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=6";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=6" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=6" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/fifa.jpg');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=6";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
           
          </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=3";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=3" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=3" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/dying.jpg');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=3";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
            
          </ul>
        </div>

      </div>
      </a>
    </div>
  </div>
</div>



<div class="container px-4" id="custom-cards">


  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=56";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=56" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=56" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/resident.png'); ">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=56";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
            
          </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=4";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=4" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=4" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/sims.png');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=4";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
           
          </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=9";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=9" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=9" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/callGhost.png');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=9";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
            
          </ul>
        </div>

      </div>
      </a>
      
    </div>

  </div>
</div>



<div class="container px-4" id="custom-cards">


  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=17";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=17" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=17" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/reddead.jpg'); ">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=17";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
            
          </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=15";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=15" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=15" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/ages.jpg');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=15";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
           
          </ul>
        </div>

      </div>
      </a>
    </div>

    <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=13";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=13" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPc.php?lang=es&idJ=13" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/pc/farm.jpg');">

        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=13";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-pc-display naranjilla" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-pc-display " viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
          </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
            
          </ul>
        </div>

      </div>
      </a>
      
    </div>

  </div>
</div>






<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>