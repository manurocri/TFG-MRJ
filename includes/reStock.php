<?php
$idJuego = $_GET['idJ'];
$cantidad= $_POST['cantidad'];
require '../includes/dbh.inc.php';

$stmt = mysqli_stmt_init($conn);
        $sql = "UPDATE productos SET cantidad= cantidad+ $cantidad WHERE id=$idJuego";
        mysqli_stmt_prepare($stmt, $sql);

        mysqli_stmt_execute($stmt);


header('location: ../index.php');



?>