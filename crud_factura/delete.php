<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM factura  WHERE ID_Transaccion='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>
