<?php 
    include("conexionUsuario.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE cod_estudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Actualizar</title>
                <link href="css/style.css" rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
                <link rel="stylesheet" href="../Diseño/estilosesion.css">
                <link rel="shortcut icon" href="../Diseño/undraw_male_avatar_323b.svg" type="image/x-icon">
            </head>
        
    </head>
    <body>
                <header>
                    <div class="contentheader">
                        <img class="imagenh" src="../Diseño/data_maintenance_isometric.svg">
                        <dir></dir>
                        <nav>
                            <ul class="menu">
                                <li><a href="../Libro/indexLibro.php">Libros</a></li>
                             
                                <li><a href="../index.html">Cerrar Sesion</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
                <div class="container mt-3">
                    <div class="col-md-12">
                        <h1> Actualización de datos <th><a href="indexUsuario.php" class="btn btn-primary btn-block">Regresar</a></th> </h1>
                        
                        <form action="updateUsuario.php" method="POST">
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">
                                <h4> Dni: </h4><input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>"> 
                                <h4> Nombres: </h4><input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <h4> Apellidos: </h4><input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            
                    
                        </form>
                    </div>
                    
                </div>
                <br></br>
                <footer>
                    <div class="conteninfo">
                        <h1>Ofimática Agosto 2021</h1>
                        <p>Todos los derechos reservados</p>
            
                    </div>
                </footer>
    </body>
</html>