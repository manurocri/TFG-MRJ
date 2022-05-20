<?php 
 include("../templatesLoginRegistro/cabeceraRegistro.php");   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>


</head>
<body>
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

	 	<form action="../includes/signup.inc.php" method="post">
	 		<br><center><label><h2>Registro de usuarios</h2></h2></label></center>
	 		<label for="name">Nombre de usuario</label>
	 		<input type="text" class="" id="exampleInputEmail1" name="uid" placeholder="Username"><br>
	 		<label for="mail">Email</label>
	 		<input type="text" class="" id="exampleInputEmail1" name="mail" placeholder="E-mail"><br>
	 		<label for="exampleInputPassword1">Contraseña</label>
	 		<input type="password" class="" id="exampleInputPassword1" name="pwd" placeholder="Password"><br>
	 		<label for="exampleInputPassword1">Repetir Password</label>
	 		<input type="password" class="" id="exampleInputPassword1" name="pwd-repeat" placeholder="Repeat Password"><br>
	 		<button type="submit" class="btn btn-dark naranja px-4" name="signup-submit">Registrarme</button>
	 	</form>
	 </main>
</body>
</html>
<?php include("../templatesLoginRegistro/piedepagina.php"); ?>