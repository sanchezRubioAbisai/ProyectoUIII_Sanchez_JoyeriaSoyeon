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

$sql = "UPDATE empleado SET Nombre='$Nombre', Apellido='$Apellido', FechadeNacimiento='$FechadeNacimiento', FechaIngreso='$FechaIngreso', TurnoLaboral='$TurnoLaboral', CorreoElectronico='$CorreoElectronico' WHERE ID_Empleado = '$ID_Empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>