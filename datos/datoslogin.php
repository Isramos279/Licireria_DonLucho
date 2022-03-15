<?php 
require_once "../conexion/conexion.php";

$usuario=$_POST['usuario'];
$contrasenia=$_POST['contrasenia'];
if (empty($_POST['usuario'])) {
	echo "vacio";
	// echo "<script type='text/javascript' >alert('llene los datos');</script>";
}else{
	
	session_start();
	$_SESSION['usuario']=$usuario;


	// Consultar ultimo tipo ingresado
	$query = "SELECT * FROM usuario ='$usuario' and contrasenia ='$contrasenia'";
	$resultado = $conexion->query($query);


	echo "$resultado";
}


// $fila = pg_fetch_array($result);
// $ultimoidtipo =$fila[0];
// //Ingresar producto
// $query = "INSERT INTO PRODUCTO Values(DEFAULT,'$codigobarras','$nombre','$marca','$contenido','$precio','$stok','$ultimoidtipo','$foto')";
// $ingreso = pg_query($conexion,$query);

// header("location: ../fm/inicio.php");

?>