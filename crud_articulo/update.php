<?php

include("conexion.php");
$con=conectar();


$ID_Articulo=$_POST['ID_Articulo'];
$NombreArticulo=$_POST['NombreArticulo'];
$TipoArticulo=$_POST['TipoArticulo'];
$PrecioArticulo=$_POST['PrecioArticulo'];
$ExistenciaArticulo=$_POST['ExistenciaArticulo'];
$EnPromocion=$_POST['EnPromocion'];
$TiempoPromo=$_POST['TiempoPromo'];

$sql = "UPDATE articulo SET NombreArticulo='$NombreArticulo', TipoArticulo='$TipoArticulo', PrecioArticulo='$PrecioArticulo', ExistenciaArticulo='$ExistenciaArticulo', EnPromocion='$EnPromocion', TiempoPromo='$TiempoPromo' WHERE ID_Articulo = '$ID_Articulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulos.php");
    }
?>