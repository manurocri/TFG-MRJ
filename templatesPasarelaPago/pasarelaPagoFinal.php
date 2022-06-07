<?php

$idJuego = $_GET['idJ'];
require '../includes/dbh.inc.php';
$stmt = mysqli_stmt_init($conn);
$sql = "SELECT cantidad FROM productos WHERE id=$idJuego";


mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

while ($fila = $resultado->fetch_array(MYSQLI_NUM)) {
  foreach ($fila as $f) {
    if($f>0){
        $stmt2 = mysqli_stmt_init($conn);
        $sql2 = "UPDATE productos SET cantidad= cantidad-1 WHERE id=$idJuego";
        mysqli_stmt_prepare($stmt2, $sql2);

        mysqli_stmt_execute($stmt2);
    }else{}
  }
}


header('location: ../index.php');
