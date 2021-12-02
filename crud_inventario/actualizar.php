<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM inventario WHERE ID_Joya='$id'";
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
                    
                        
                                <input type="text" class="form-control mb-3" name="ID_Joya" placeholder="ID de la Joya" value="<?php echo $row['ID_Joya']  ?>">
                                <input type="text" class="form-control mb-3" name="NodeLote" placeholder="NodeLote" value="<?php echo $row['NodeLote']  ?>">
                                <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca" value="<?php echo $row['Marca']  ?>">
                                <input type="text" class="form-control mb-3" name="FechaEmpaquetado" placeholder="Fecha de Empaquetado" value="<?php echo $row['FechaEmpaquetado']  ?>">
                                <input type="text" class="form-control mb-3" name="NoDeBodega" placeholder="No De Bodega" value="<?php echo $row['NoDeBodega']  ?>">
                                <input type="text" class="form-control mb-3" name="TipoJoya" placeholder="Tipo de Joya" value="<?php echo $row['TipoJoya']  ?>">
                                <input type="text" class="form-control mb-3" name="FechadeSurtido" placeholder="Fecha de Surtido" value="<?php echo $row['FechadeSurtido']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>