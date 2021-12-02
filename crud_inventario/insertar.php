<?php
include("conexion.php");
$con=conectar();

$ID_Joya=$_POST['ID_Joya'];
$NodeLote=$_POST['NodeLote'];
$Marca=$_POST['Marca'];
$FechaEmpaquetado=$_POST['FechaEmpaquetado'];
$NoDeBodega=$_POST['NoDeBodega'];
$TipoJoya=$_POST['TipoJoya'];
$FechadeSurtido=$_POST['FechadeSurtido'];


$sql="INSERT INTO inventario VALUES('$ID_Joya','$NodeLote','$Marca','$FechaEmpaquetado','$NoDeBodega','$TipoJoya','$FechadeSurtido')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inventario.php");
}
?>