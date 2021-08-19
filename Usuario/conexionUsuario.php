<?php
function conectar(){
    $host="basedatos:3306";
    $user="root";
    $pass="123";

    $bd="login";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
