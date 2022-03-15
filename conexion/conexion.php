<?php
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="donlucho";

	$conexion=mysqli_connect($servidor,$usuario,$password,$bd) or die(mysql_error());	
?>