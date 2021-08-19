<?php

include("conexionLibro.php");
$con=conectar();

$id=$_POST['id'];
$libro=$_POST['libro'];
$autor=$_POST['autor'];
$editorial=$_POST['editorial'];
$anio=$_POST['anio'];

$sql="UPDATE libros SET  libro='$libro',autor='$autor',editorial='$editorial',anio='$anio' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: indexLibro.php");
    }
    else {
    echo'<script type="text/javascript">
        alert("Fallo en actualizar datos");
        window.location.href="indexLibro.php";
        </script>';
    }
?>