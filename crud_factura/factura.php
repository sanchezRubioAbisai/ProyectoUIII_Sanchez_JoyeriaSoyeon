<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM factura";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Factura</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Facturacion</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID_Transaccion" placeholder="ID de la transaccion">
                                    <input type="text" class="form-control mb-3" name="NoTarjeta" placeholder="Digitos de la tarjeta">
                                    <input type="text" class="form-control mb-3" name="NombreTitular" placeholder="Nombre del Titular">
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="CVV" placeholder="CVV">
                                    <input type="text" class="form-control mb-3" name="FechadeCaducidad" placeholder="Fecha de Caducidad">
                                    <input type="text" class="form-control mb-3" name="MontoaPagar" placeholder="Cantidad a pagar">
                                    <a href="../index.php">Inicio</a></li>
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID de transaccion</th>
                                        <th>No. de tarjeta</th>
                                        <th>Nombre del titular</th>
                                        <th>Apellidos</th>
                                        <th>CVV</th>
                                        <th>Fecha de Caducidad</th>
                                        <th>Monto pagado</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_Transaccion']?></th>
                                                <th><?php  echo $row['NoTarjeta']?></th>
                                                <th><?php  echo $row['NombreTitular']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>    
                                                <th><?php  echo $row['CVV']?></th>   
                                                <th><?php  echo $row['FechadeCaducidad']?></th>   
                                                <th><?php  echo $row['MontoaPagar']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_Transaccion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_Transaccion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }while($row=mysqli_fetch_array($query));
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>