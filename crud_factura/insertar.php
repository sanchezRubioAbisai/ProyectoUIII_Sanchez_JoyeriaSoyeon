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


$sql="INSERT INTO factura VALUES('$ID_Transaccion','$NoTarjeta','$NombreTitular','$Apellidos','$CVV','$FechadeCaducidad','$MontoaPagar')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: factura.php");
}
?>