<?php
require_once "../conexion/conexion.php";

$id_persona=$_POST['id_persona']
$id_producto=$_POST['id_producto']

$sql="INSERT INTO producto_persona(id_producto,id_persona,fecha) 
VALUES($id_persona,$id_producto,date("d.m.y")";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inicio.php");
}else {
	echo "No se pudo insertar prod: ".$id_producto." pers: ".$id_persona." fecha ".date("d.m.y");
}
?>