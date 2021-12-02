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


$sql="INSERT INTO articulo VALUES('$ID_Articulo','$NombreArticulo','$TipoArticulo','$PrecioArticulo','$ExistenciaArticulo','$EnPromocion','$TiempoPromo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulos.php");
}
?>