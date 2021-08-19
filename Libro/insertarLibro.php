<?php
include("conexionLibro.php");
$con=conectar();

$id=$_POST['id'];
$libro=$_POST['libro'];
$autor=$_POST['autor'];
$editorial=$_POST['editorial'];
$anio=$_POST['anio'];


$sql="INSERT INTO libros VALUES('$id','$libro','$autor','$editorial','$anio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: indexLibro.php");
    
}else {
    echo'<script type="text/javascript">
        alert("Fallo en insertar datos");
        window.location.href="indexLibro.php";
        </script>';
}
?>
