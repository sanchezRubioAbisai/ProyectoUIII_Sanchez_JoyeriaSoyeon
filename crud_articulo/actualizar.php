<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articulo WHERE ID_Articulo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                        
                                <input type="text" class="form-control mb-3" name="ID_Articulo" placeholder="ID" value="<?php echo $row['ID_Articulo']  ?>">
                                <input type="text" class="form-control mb-3" name="NombreArticulo" placeholder="Nombre" value="<?php echo $row['NombreArticulo']  ?>">
                                <input type="text" class="form-control mb-3" name="TipoArticulo" placeholder="Tipo" value="<?php echo $row['TipoArticulo']  ?>">
                                <input type="text" class="form-control mb-3" name="PrecioArticulo" placeholder="Precio" value="<?php echo $row['PrecioArticulo']  ?>">
                                <input type="text" class="form-control mb-3" name="ExistenciaArticulo" placeholder="Existencia" value="<?php echo $row['ExistenciaArticulo']  ?>">
                                <input type="text" class="form-control mb-3" name="EnPromocion" placeholder="En Promocion" value="<?php echo $row['EnPromocion']  ?>">
                                <input type="text" class="form-control mb-3" name="TiempoPromo" placeholder="Tiempo de la promocion" value="<?php echo $row['TiempoPromo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>