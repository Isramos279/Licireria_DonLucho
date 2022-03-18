<?php
require_once "../conexion/conexion.php";
    if(isset($_GET['id_persona'])){$id_persona=$_GET['id_persona'];}
    if(isset($_GET['id'])){$id=$_GET['id'];}
if(isset($_GET['nivel'])){$nivel=$_GET['nivel'];}
if(isset($_GET['stok'])){$stok=$_GET['stok'];}
try {
  
  
//insertar
$sql="UPDATE producto SET stok = $stok WHERE id_producto=".$id;
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: inicio.php?id_persona=".$id_persona."&nivel=".$nivel);
}else {
  echo "No se pudo actualizar";
  Header("Location: inicio.php?id_persona=".$id_persona."&nivel=".$nivel);
}

} catch (Exception $e) {
  echo ($e);
}

?>