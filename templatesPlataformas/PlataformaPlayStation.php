<?php
session_start();
if (isset($_SESSION["userId"])) {
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogin.php");
} else {
  include("../templatesPlataformasCabecerayPieListaJuegos/cabeceralogout.php");
}
?>


<div class="container px-4 pt-5" id="custom-cards">
  <h1 class="pb-2 border-bottom text-white titulomasvendidos">PlayStation</h1>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

    <div class="col">
    <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=42";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=42" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=42" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/farcry6.png'); ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=42";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg>';
                  }
                };
              }; ?>
              </div>
              </li>
            
            </ul>
          </div>
      </a>
    </div>

  </div>

  <div class="col">
  <?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=38";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=38" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=38" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/tlou.png');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=38";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg>';
                  }
                };
              }; ?>
              </div>
            </li>
          
          </ul>
        </div>
    </a>
  </div>
</div>

<div class="col">
<?php
      require '../includes/dbh.inc.php';
      $stmt = mysqli_stmt_init($conn);
      $sql = "SELECT cantidad FROM productos WHERE id=45";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=45" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=45" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/AC.png');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
          <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=45";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=47";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=47" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=47" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/nier.jpg'); ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=47";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=50";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=50" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=50" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/silentH.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=50";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=52";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=52" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=52" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/drake.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=52";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=41";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=41" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=41" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/gtaV.jpg'); ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=41";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=36";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=36" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=36" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/horizon.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=36";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=51";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=51" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=51" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/PlayStation/tombraider.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=51";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=54";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=54" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=54" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Playstation/sanandreas.jpg'); ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=54";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=58";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=58" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=58" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Playstation/GodOfWar.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=58";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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
      $sql = "SELECT cantidad FROM productos WHERE id=59";
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_execute($stmt);
      $resultado = mysqli_stmt_get_result($stmt);
      while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
        foreach ($fila as $f) {

          if (isset($_SESSION["userId"])) {
            if ($f > 0 || $_SESSION["userId"] == 1) {
              echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=59" style="text-decoration: none;">';
            } else if ($f < 1) {
              echo '<a>';
            };
          } else if ($f > 0) {
            echo '<a href="../templatesJuegos/juegoPlayStation.php?lang=es&idJ=59" style="text-decoration: none;">';
          } else if ($f < 1) {
            $userId = 0;
            echo '<a>';
          };
        }
      }; ?>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../img/Playstation/Uncharted4.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <div class="row">
              <?php
              require '../includes/dbh.inc.php';
              $stmt = mysqli_stmt_init($conn);
              $sql = "SELECT cantidad FROM productos WHERE id=59";
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $resultado = mysqli_stmt_get_result($stmt);
              while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
                foreach ($fila as $f) {
                  if ($f < 1) {
                    echo '<div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation naranjilla" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
                  </svg></div> <div class="col-md-auto"><h3 class="naranjilla">OUT OF STOCK</h3></div>';
                  } else if ($f > 0) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
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