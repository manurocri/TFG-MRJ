<?php 
 include("../templatesLoginRegistro/cabeceraRegistro.php");   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>


</head>
<body class="fondo">
	<main>
		<?php 
	 	if (isset($_GET["error"])) {
	 		if ($_GET["error"]=="emptyfields") {
	 			echo '<p>Rellena todos los campos</p>';
	 		}else if($_GET["error"]=="invalidmailuid") {
	 			echo '<p>Nombre de usuario y email invalidos</p>';
	 		}else if($_GET["error"]=="invalidmail") {
	 			echo '<p>Email invalido</p>';
	 		}else if($_GET["error"]=="invaliduid") {
	 			echo '<p>Nombre de usuario invalido</p>';
	 		}else if($_GET["error"]=="passwordcheck") {
	 			echo '<p>Las contraseñas no coinciden</p>';
	 		}else if($_GET["error"]=="usertaken") {
	 			echo '<p>El nombre de ususuario ya esta en uso</p>';
	 		}
	 	}
	 	 
	 	?>

<div class="" style="margin-top: 170px;">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="card p-4 text-light bg-dark mb-5">
                <div class="card-header bg-dark text-white">
                    <h2 class="text-center naranjilla">Registrate</h2>
                </div>
                <div class="card-body w-100">

                    <form name="login" action="../includes/login.inc.php" method="post">


                        <div class="input-group form-group mt-3">
                            <div class="rounded-start border border-dark naranja">
                                <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                            </div>
                            <input type="text" class="form-control border border-dark" id="exampleInputEmail1" name="uid" placeholder="Nombre de usuario..."><br>
                        </div>

                        <div class="input-group form-group mt-3">
                            <div class="rounded-start border border-dark naranja">
                                <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                            </div>
							<input type="text" class="form-control border border-dark" id="exampleInputEmail1" name="mail" placeholder="Email..."><br>
                        </div>

					
                        <div class="input-group form-group mt-3">
                            <div class="rounded-start border border-dark naranja">
                                <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                            </div>
							<input type="password" class="form-control border border-dark" id="exampleInputPassword1" name="pwd" placeholder="Contraseña..."><br>
                        </div>
						
						
                        <div class="input-group form-group mt-3">
                            <div class="rounded-start border border-dark naranja">
                                <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                            </div>
							<input type="password" class="form-control border border-dark" id="exampleInputPassword1" name="pwd-repeat" placeholder="Repite la contraseña..."><br>
                        </div>


						<div class="form-group mt-3">

						<button type="submit" class="btn float-end w-100 btn btn-dark naranja px-4" name="login-submit">Crear cuenta</button> 

                        </div>
                    </form>

                </div>
                <div class="card-footer bg-dark">
                    <div class="d-flex justify-content-center">
                        <div class="naranjilla" >Registrate ya para ser Unlimited y no perderte ningún Game</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	 </main>
</body>
</html>
