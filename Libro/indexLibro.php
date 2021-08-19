<?php 
    include("conexionLibro.php");
    $con=conectar();

    $sql="SELECT *  FROM libros";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Libros</title>
                <link href="css/style.css" rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
                <link rel="stylesheet" href="../Diseño/estilosesion.css">
                <link rel="shortcut icon" href="../Diseño/undraw_male_avatar_323b.svg" type="image/x-icon">
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

            <div class="container mt-5">
                <th><a href="nuevoLibro.php" class="btn btn-secondary">Nuevo</a></th>
                
                    <div class="row"> 
                        


                        <div class="col-md-12">
                            <table class="table" >
                                <h1>Lista Actual</h1>
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Autor</th>
                                        <th>Editorial</th>
                                        <th>Año</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['libro']?></th>
                                                <th><?php  echo $row['autor']?></th>
                                                <th><?php  echo $row['editorial']?></th>
                                                <th><?php  echo $row['anio']?></th>     
                                                <th><a href="actualizarLibro.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleteLibro.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>

                                            </tr>

                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
                <footer>
                    <div class="conteninfo">
                        <h1>Ofimática Agosto 2021</h1>
                        <p>Todos los derechos reservados</p>
            
                    </div>
                </footer>
    </body>
</html>