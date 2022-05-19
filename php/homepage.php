<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<style type="text/css">
		body{
			background-color: rgb(174, 245, 252);
			border-color: white;
			border-width: 10px;
		}
	</style>
</head>
<body>
	<center>
	<br><h1>Welcome to our website</h1>
	<h3>You are logged in</h3>
	<form action='../includes/logout.inc.php' method='post'>
		<?php
		$usuario= $_SESSION["userId"];
		require '../includes/dbh.inc.php';
		$stmt=mysqli_stmt_init($conn);
		$sql="SELECT uidusers FROM users WHERE idUsers=$usuario";
		
		mysqli_stmt_prepare($stmt,$sql);
		// mysqli_stmt_bind_param($stmt);
		
		mysqli_stmt_execute($stmt);
		// mysqli_stmt_store_result($stmt);

		$resultado = mysqli_stmt_get_result($stmt);
		
		while ($fila = $resultado->fetch_array(MYSQLI_NUM))
        {
            foreach ($fila as $f)
            {
                print "$f ";
            }
            print "\n";
        }
	 	
		?>
		<button type='submit' class='button button3' name='logout-submit'>Log Out</button>
    </form>
</center>
</body>
</html>