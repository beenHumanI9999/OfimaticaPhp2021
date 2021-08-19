<?php 
    include("conexionLibro.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM libros WHERE id='$id'";
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
                                <li><a href="../Usuario/indexUsuario.php">Usuarios</a></li>
                             
                                <li><a href="../index.html">Cerrar Sesion</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
                <div class="container mt-3">
                    <div class="col-md-12">
                        <h1> Actualización de datos <th><a href="indexLibro.php" class="btn btn-primary btn-block">Regresar</a></th> </h1>
                        
                        <form action="updateLibro.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <h4> Nombre: </h4><input type="text" class="form-control mb-3" name="libro" placeholder="Nombre" value="<?php echo $row['libro']  ?>"> 
                                <h4> Autor: </h4><input type="text" class="form-control mb-3" name="autor" placeholder="Autor" value="<?php echo $row['autor']  ?>">
                                <h4> Editorial: </h4><input type="text" class="form-control mb-3" name="editorial" placeholder="Editorial" value="<?php echo $row['editorial']  ?>">
                                <h4> Año: </h4><input type="text" class="form-control mb-3" name="anio" placeholder="Año" value="<?php echo $row['anio']  ?>">
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