<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./img/minilogo.png">
  <link href="carousel.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
  <title>Unlimited Games</title>




</head>


<body>



  <!--BARRA DE NAVEGACION-->

  <header class="p-3 text-white bg-dark">

    <!-- ICONO Y LINKS -->

    <div class="container-border">


      <div class="row justify-content-center align-items-center">


        <div class="col-sm-1 ">

          <a href="index.php" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <img src="./img/logo.png" alt="logo Unlimited Games" width="160" height="70">
          </a>

        </div>

        <div class="col-sm-4  ">

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

            <li><a href="" class="nav-link px-4 text-white">Inicio</a></li>
            <li><a href="" class="nav-link px-4 text-white">PC</a></li>
            <li><a href="" class="nav-link px-4 text-white">Play Station</a></li>
            <li><a href="" class="nav-link px-4 text-white">Xbox</a></li>
            <li><a href="" class="nav-link px-4 text-white">Ayuda</a></li>

          </ul>

        </div>

        <!-- BANDERAS (CAMBIO DE IDIOMAS) -->

        <div class="col-sm-2 ">

          <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

            <a href="" class="text-decoration-none px-2">
              <img src="img/iconobanderaespaña.png" class="rounded-circle" alt="Español" width="30px" height="30px">
            </a>
            <a href="" class="text-decoration-none px-2">
              <img src="img/iconobanderainglaterra.png" class="rounded-circle" alt="Inglés" width="30px" height="30px">
            </a>
            <a href="" class="text-decoration-none px-2">
              <img src="img/iconobanderafrancia.png" class="rounded-circle" alt="Francés" width="30px" height="30px">
            </a>
            <a href="" class="text-decoration-none px-2">
              <img src="img/iconobanderaalemania.png" class="rounded-circle" alt="Alemán" width="30px" height="30px">
            </a>

          </div>

        </div>


        <!-- BOTONES DE REGISTRO E INICIO DE SESIÓN -->

        <div class="col-sm-2">

          <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <!-- 
            <button type="button" class="btn btn-dark naranja px-4">Iniciar Sesión</button> -->

            <div class="minispacerhorizontal"></div>

            <!-- <button type="button" class="btFn btn-dark naranja px-4">Registrarse</button> -->
            <?php
            $usuario = $_SESSION["userId"];
            require './includes/dbh.inc.php';
            $stmt = mysqli_stmt_init($conn);
            $sql = "SELECT uidusers FROM users WHERE idUsers=$usuario";

            mysqli_stmt_prepare($stmt, $sql);
            // mysqli_stmt_bind_param($stmt);

            mysqli_stmt_execute($stmt);
            // mysqli_stmt_store_result($stmt);

            $resultado = mysqli_stmt_get_result($stmt);

            while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
              foreach ($fila as $f) {
                echo "<a class='nav-link px-4 text-white'>$f</a> ";
              }
              print "\n";
            }



            if (isset($_SESSION["userId"])) {
              echo '<form class="" action="includes/logout.inc.php" method="post">
                      <button class="btn btn-dark naranja px-4" type="submit" name="logout-submit">
                      Log Out
                      </button>
                    </form>';
            } else {
              require 'login.php';
            }



            ?>
          </div>

        </div>


      </div>


    </div>


  </header>