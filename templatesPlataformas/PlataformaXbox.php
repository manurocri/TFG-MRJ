<?php 
session_start();
if(isset($_SESSION["userId"])){
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogin.php");
} else{
 include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogout.php");   
}
?>








<div class="container px-4 pt-5" id="custom-cards">
    <h1 class="pb-2 border-bottom text-white titulomasvendidos">Xbox</h1>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=31";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=31" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=31" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/crash4.jpg'); ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=31";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=31";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=31";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=21";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=21" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=21" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/binarydomain.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=21";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=21";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=21";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=57";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=57" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=57" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/outlast2.png');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=57";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=57";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=57";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>
    </div>
  </div>




  <div class="container px-4" id="custom-cards">
    

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=32";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=32" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=32" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/marvelavengers.jpg'); ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=32";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=32";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=32";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=19";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=19" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=19" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/rayman.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=19";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=19";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=19";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=35";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=35" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=35" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/sekiro.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=35";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=35";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=35";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>
    </div>
  </div>



  <div class="container px-4" id="custom-cards">
    

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=30";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=30" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=30" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/mafia.jpg'); ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=30";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=30";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=30";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=33";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=33" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=33" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/minecraftdungeons.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=33";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=33";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=33";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
      <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=28";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=28" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoXbox.php?lang=es&idJ=28" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Xbox/RED.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=28";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox naranjilla" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                    <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                    </svg>';
                  }
                };
              }; ?>
              </li>
              <li class="d-flex align-items-center me-3">
                <small class="bg-dark text-white rounded-5"><?php
                  require '../includes/dbh.inc.php';
                  $stmt = mysqli_stmt_init($conn);
                  $sql = "SELECT nombrejuego FROM productos WHERE id=28";
                  mysqli_stmt_prepare($stmt, $sql);
                  mysqli_stmt_execute($stmt);
                  $resultado = mysqli_stmt_get_result($stmt);
                  while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                    foreach ($fila as $f) {
                      echo $f;
                    }
                    print "\n";
                  }
                  ?></small>
              </li>
              <li class="d-flex align-items-center">
                <small class="bg-dark text-white rounded-5"><?php

                          require '../includes/dbh.inc.php';
                          $stmt = mysqli_stmt_init($conn);
                          $sql = "SELECT precio FROM productos WHERE id=28";

                          mysqli_stmt_prepare($stmt, $sql);

                          mysqli_stmt_execute($stmt);

                          $resultado = mysqli_stmt_get_result($stmt);

                          while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                            foreach ($fila as $f) {
                              echo "$f ";
                            }
                          }
                          ?>€</small>
              </li>
            </ul>
          </div>
        </div></a>
      </div>
    </div>
  </div>







  <?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>