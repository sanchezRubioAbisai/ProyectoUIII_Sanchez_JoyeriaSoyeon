<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ARTICULOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registre su articulo</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID_Articulo" placeholder="ID">
                                    <input type="text" class="form-control mb-3" name="NombreArticulo" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="TipoArticulo" placeholder="Tipo">
                                    <input type="text" class="form-control mb-3" name="PrecioArticulo" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="ExistenciaArticulo" placeholder="Existencia Si=1, No=0">
                                    <input type="text" class="form-control mb-3" name="EnPromocion" placeholder="En Promocion(Si o No)">
                                    <input type="text" class="form-control mb-3" name="TiempoPromo" placeholder="Tiempo en Promocion(en caso de aplicar)">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Precio</th>
                                        <th>Existencia</th>
                                        <th>En Promocion</th>
                                        <th>Tiempo en Promocion</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_Articulo']?></th>
                                                <th><?php  echo $row['NombreArticulo']?></th>
                                                <th><?php  echo $row['TipoArticulo']?></th>
                                                <th><?php  echo $row['PrecioArticulo']?></th>    
                                                <th><?php  echo $row['ExistenciaArticulo']?></th>    
                                                <th><?php  echo $row['EnPromocion']?></th>
                                                <th><?php  echo $row['TiempoPromo']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_Articulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_Articulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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