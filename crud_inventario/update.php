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

$sql = "UPDATE inventario SET NodeLote='$NodeLote', Marca='$Marca', FechaEmpaquetado='$FechaEmpaquetado', NoDeBodega='$NoDeBodega', TipoJoya='$TipoJoya', FechadeSurtido='$FechadeSurtido' WHERE ID_Joya = '$ID_Joya'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>