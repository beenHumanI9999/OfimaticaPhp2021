<?php

include("conexionUsuario.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE alumno SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: indexUsuario.php");
    }
    else {
    echo'<script type="text/javascript">
        alert("Fallo en actualizar datos");
        window.location.href="indexUsuario.php";
        </script>';
    }
?>