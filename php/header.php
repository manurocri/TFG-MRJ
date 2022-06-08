<?php 
session_start();
 ?>

	 <main>
	 	<?php 
	 	if(isset($_SESSION["userId"])){
	 		require 'homepage.php';
	 	}

	 	?>
	 </main>


 <?php 
 ?>