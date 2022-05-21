<?php 
 include("../templatesLoginRegistro/cabeceraLogin.php");   
?>
<!DOCTYPE html>
<html>
<head>
	<title>User login</title>

</head>
<body class="fondo">

<div class="" style="margin-top: 170px;">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="card p-4 text-light bg-dark mb-5">
                <div class="card-header bg-dark text-white">
                    <h2 class="text-center naranjilla">Iniciar sesión </h2>
                </div>
                <div class="card-body w-100">
                    <form name="login" action="../includes/login.inc.php" method="post">
                        <div class="input-group form-group mt-3">
                            <div class="rounded-start border border-dark naranja">
                                <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                            </div>


                            <input type="text" class="form-control border border-dark" id="exampleInputEmail1" name="mailuid" placeholder="Nombre de usuario/Email..."><br>

                        </div>
                        <div class="input-group form-group mt-3">

                            <div class="rounded-start border border-dark naranja">
                                <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                            </div>


							<input type="password" class="form-control border border-dark" id="exampleInputPassword1" name="pwd" placeholder="Contraseña..."><br>

                        </div>

						<div class="form-group mt-3">

						<button type="submit" class="btn float-end w-100 btn btn-dark naranja px-4" name="login-submit">Iniciar Sesión</button> 

                        </div>
                    </form>

                </div>
                <div class="card-footer bg-dark">
                    <div class="d-flex justify-content-center">
                        <div class="naranjilla" >Siempre en UnlimitedGames, llevando juego a la vida de todos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	

</body>
</html>
