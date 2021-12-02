<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE ID_Empleado='$id'";
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
                    
                        
                                <input type="text" class="form-control mb-3" name="ID_Empleado" placeholder="ID" value="<?php echo $row['ID_Empleado']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido" value="<?php echo $row['Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="FechadeNacimiento" placeholder="Fecha de Nacimiento" value="<?php echo $row['FechadeNacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="FechaIngreso" placeholder="Fecha de Ingreso" value="<?php echo $row['FechaIngreso']  ?>">
                                <input type="text" class="form-control mb-3" name="TurnoLaboral" placeholder="Turno Laboral" value="<?php echo $row['TurnoLaboral']  ?>">
                                <input type="text" class="form-control mb-3" name="CorreoElectronico" placeholder="Correo Electronico" value="<?php echo $row['CorreoElectronico']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>