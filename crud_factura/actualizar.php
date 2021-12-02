<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM factura WHERE ID_Transaccion='$id'";
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
                    
                        
                                <input type="text" class="form-control mb-3" name="ID_Transaccion" placeholder="ID de la transaccion" value="<?php echo $row['ID_Transaccion']  ?>">
                                <input type="text" class="form-control mb-3" name="NoTarjeta" placeholder="NoTarjeta" value="<?php echo $row['NoTarjeta']  ?>">
                                <input type="text" class="form-control mb-3" name="NombreTitular" placeholder="Nombre Titular" value="<?php echo $row['NombreTitular']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="CVV" placeholder="CVV" value="<?php echo $row['CVV']  ?>">
                                <input type="text" class="form-control mb-3" name="FechadeCaducidad" placeholder="Fecha de Caducidad" value="<?php echo $row['FechadeCaducidad']  ?>">
                                <input type="text" class="form-control mb-3" name="MontoaPagar" placeholder="Monto a Pagar" value="<?php echo $row['MontoaPagar']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>