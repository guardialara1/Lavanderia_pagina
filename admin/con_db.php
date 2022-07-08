<?php
function conexion(){
    return $conexion = mysqli_connect("localhost","root", "", "clean_is_god");
    // return $conexion = mysqli_connect("localhost","neverasycongelad","****", "clean_is_god");
    $conexion->set_charset("utf8");
}
?>