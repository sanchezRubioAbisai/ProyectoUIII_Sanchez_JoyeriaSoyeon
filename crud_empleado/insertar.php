<?php
include("conexion.php");
$con=conectar();

$ID_Empleado=$_POST['ID_Empleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$FechadeNacimiento=$_POST['FechadeNacimiento'];
$FechaIngreso=$_POST['FechaIngreso'];
$TurnoLaboral=$_POST['TurnoLaboral'];
$CorreoElectronico=$_POST['CorreoElectronico'];


$sql="INSERT INTO empleado VALUES('$ID_Empleado','$Nombre','$Apellido','$FechadeNacimiento','$FechaIngreso','$TurnoLaboral','$CorreoElectronico')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
}
?>