<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empleados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Bienvenido empleado, valida tus credenciales.</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID_Empleado" placeholder="Ingresa tu ID">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="FechadeNacimiento" placeholder="Fecha de nacimiento">
                                    <input type="text" class="form-control mb-3" name="FechaIngreso" placeholder="Fecha de ingreso">
                                    <input type="text" class="form-control mb-3" name="TurnoLaboral" placeholder="Turno Laboral">
                                    <input type="text" class="form-control mb-3" name="CorreoElectronico" placeholder="Correo Electronico">
                                    <a href="../index.php">Inicio</a></li>
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Turno</th>
                                        <th>Correo Electronico</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_Empleado']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['FechadeNacimiento']?></th>    
                                                <th><?php  echo $row['FechaIngreso']?></th>    
                                                <th><?php  echo $row['TurnoLaboral']?></th>
                                                <th><?php  echo $row['CorreoElectronico']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_Empleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_Empleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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