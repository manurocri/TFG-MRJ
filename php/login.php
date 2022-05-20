<?php 
 include("../templatesLoginRegistro/cabeceraLogin.php");   
?>
<!DOCTYPE html>
<html>
<head>
	<title>User login</title>

</head>
<body>
	<div class="form-group margin">
	<form class="" action="../includes/login.inc.php" method="post">
		<center><label><h2>User login</h2></h2></label></center>
		<label for="exampleInputEmail1">Email</label>
		<input type="text" class="" id="exampleInputEmail1" name="mailuid" placeholder="Username/Email..."><br>
		<label for="exampleInputPassword1">Contraseña</label>
		<input type="password" class="" id="exampleInputPassword1" name="pwd" placeholder="Password..."><br>
		<button type="submit" class="btn btn-dark naranja px-4" name="login-submit">Login</button> 
	</form>
    </div>

</body>
</html>
<?php include("../templatesLoginRegistro/piedepagina.php"); ?>