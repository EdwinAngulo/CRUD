<?php 
require_once("conexion.php");
$documento=$_REQUEST['documento'];

$conexion->query("DELETE FROM aprendices WHERE documento='$documento'");

header("Location:http://ninoadsi.comlu.com/crud/html/index2.html");

?>