<?php
require_once "../conexion/conexion.php";

 require_once "../conexion/conexion.php";
    if(isset($_GET['id_persona'])){$id_persona=$_GET['id_persona'];}
if(isset($_GET['id_producto'])){$id_producto=$_GET['id_producto'];}
if(isset($_GET['nivel'])){$nivel=$_GET['nivel'];}
    $fecha = date('Y-m-d');
try {
  
  
//insertar
$sql="INSERT INTO producto_persona(id_producto,id_persona,fecha) 
VALUES('$id_producto','$id_persona','$fecha')";
$query= mysqli_query($conexion,$sql);

if($query){
    //actualizar
	$sql2="UPDATE producto SET stok = stok-1 WHERE id_producto=".$id_producto;
	$query2= mysqli_query($conexion,$sql2);

	if($query2){
	    Header("Location: inicio.php?id_persona=".$id_persona."&nivel=".$nivel);
	}else {
	  echo "";
	}
}else {
  echo "No se pudo insertar prod: ".$id_producto." pers: ".$id_persona." fecha ".date("Y-m-d");
}

} catch (Exception $e) {
  echo ($e);
}

?>