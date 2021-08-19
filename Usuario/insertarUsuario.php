<?php
include("conexionUsuario.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: indexUsuario.php");
    
}else {
    echo'<script type="text/javascript">
        alert("Fallo en insertar datos");
        window.location.href="indexUsuario.php";
        </script>';
}
?>
