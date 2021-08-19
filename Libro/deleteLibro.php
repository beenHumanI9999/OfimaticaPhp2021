<?php

include("conexionLibro.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM libros  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: indexLibro.php");
    }
?>
