<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM inventario";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inventario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registro de Joyas</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID_Joya" placeholder="ID de la Joya">
                                    <input type="text" class="form-control mb-3" name="NodeLote" placeholder="No. de Lote">
                                    <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca">
                                    <input type="text" class="form-control mb-3" name="FechaEmpaquetado" placeholder="Fecha de Empaquetado">
                                    <input type="text" class="form-control mb-3" name="NoDeBodega" placeholder="No. De Bodega">
                                    <input type="text" class="form-control mb-3" name="TipoJoya" placeholder="Tipo de Joya">
                                    <input type="text" class="form-control mb-3" name="FechadeSurtido" placeholder="Fecha de Surtido">
                                    <a href="../index.php">Inicio</a></li>
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID de la Joya</th>
                                        <th>No. de Lote</th>
                                        <th>Marca</th>
                                        <th>Fecha de empaquetado</th>
                                        <th>No. de Bodega</th>
                                        <th>Tipo de Joya</th>
                                        <th>Fecha de surtido</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_Joya']?></th>
                                                <th><?php  echo $row['NodeLote']?></th>
                                                <th><?php  echo $row['Marca']?></th>
                                                <th><?php  echo $row['FechaEmpaquetado']?></th>    
                                                <th><?php  echo $row['NoDeBodega']?></th>
                                                <th><?php  echo $row['TipoJoya']?></th> 
                                                <th><?php  echo $row['FechadeSurtido']?></th>     
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_Joya'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_Joya'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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