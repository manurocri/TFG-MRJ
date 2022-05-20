<?php 
 include("../templatesLoginRegistro/cabecera.php");   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <style type="text/css">
		body{
			margin:20px;
		}
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  border: 1px solid #e7e7e7;
		  background-color: #f3f3f3;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: #666;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover:not(.active) {
		  background-color: #ddd;
		}

		li a.active {
		  color: white;
		  background-color: #4CAF50;
		}
	</style> -->
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
	 		<input type="text" class="form-control" id="exampleInputEmail1" name="uid" placeholder="Username"><br>
	 		<label for="mail">Email</label>
	 		<input type="text" class="form-control" id="exampleInputEmail1" name="mail" placeholder="E-mail"><br>
	 		<label for="exampleInputPassword1">Contraseña</label>
	 		<input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password"><br>
	 		<label for="exampleInputPassword1">Repetir Password</label>
	 		<input type="password" class="form-control" id="exampleInputPassword1" name="pwd-repeat" placeholder="Repeat Password"><br>
	 		<button type="submit" class="btn btn-primary" name="signup-submit">Registrarme</button>
	 	</form>
	 	<center><br><big><a href="../index.php">Login</a></big></center>
	 </main>
</body>
</html>
<?php include("../templatesLoginRegistro/piedepagina.php"); ?>