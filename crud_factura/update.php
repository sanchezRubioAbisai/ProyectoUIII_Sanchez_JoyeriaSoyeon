<?php

include("conexion.php");
$con=conectar();


$ID_Transaccion=$_POST['ID_Transaccion'];
$NoTarjeta=$_POST['NoTarjeta'];
$NombreTitular=$_POST['NombreTitular'];
$Apellidos=$_POST['Apellidos'];
$CVV=$_POST['CVV'];
$FechadeCaducidad=$_POST['FechadeCaducidad'];
$MontoaPagar=$_POST['MontoaPagar'];

$sql = "UPDATE factura SET NoTarjeta='$NoTarjeta', NombreTitular='$NombreTitular', Apellidos='$Apellidos', CVV='$CVV', FechadeCaducidad='$FechadeCaducidad', MontoaPagar='$MontoaPagar' WHERE ID_Transaccion = '$ID_Transaccion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>