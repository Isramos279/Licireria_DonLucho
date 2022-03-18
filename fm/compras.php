<?php
    if(isset($_GET['id_persona'])){
    $id_persona=$_GET['id_persona'];
  }
  if(isset($_GET['nivel'])){
    $nivel=$_GET['nivel'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Don Lucho</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>    
</head>
<body>
<header>
  <nav class="navbar navbar-dark bg-dark ">
    <div class="container-md">    
    
      <a class="navbar-brand" href="inicio.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>"> Licoreria Don Lucho</a>

      <a id="productos" class="nav-link bi bi-cup-straw" style="color: white;" href="licores.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>" <?php if($nivel<1) { echo "hidden";}?>> Productos</a>

      <a id="vendedor" class="nav-link bi bi-cart3" style="color: white;" href="compras.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>" <?php if($nivel<1) { echo "hidden";}?>> Compras</a>

      <a id="nuvoVendedor" class="nav-link bi bi-cart3" style="color: white;" href="vendedor.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>" <?php if($nivel<1) { echo "hidden";}?>> Ingresar Vendedor</a>

      <a class="nav-link bi bi-info-circle" style="color: white;" href="nosotros.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>"> Sobre nosotros</a>
      <a class="nav-link bi bi-box-arrow-right" style="color: white;" href="../index.php"> Salir</a>
    </div>
  </nav>
</header>


<!------ --->
  <div class="container">
    <?php
        include ("../conexion/conexion.php");
        //session_start();
        $query = 'SELECT p.nombre,p.apellido,pd.nombre as producto ,pp.fecha FROM persona as p INNER JOIN producto_persona as pp ON p.id_persona = pp.id_persona INNER JOIN producto as pd on pd.id_producto=pp.id_producto;';
        
        $resultado = $conexion->query($query);
        //print($result);
        echo "<table class='table'>\n";
        echo "<thead'>\n";
            echo "<th scope='col'>Nombre</th>\n";
            echo "<th scope='col'>Apellido</th>\n";
            echo "<th scope='col'>Producto</th>\n";
            echo "<th scope='col'>Fecha</th>\n";
        echo "</thead'>\n";

        while ($row = $resultado->fetch_assoc()) {
            echo "\t<tr>\n";
            foreach ($row as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
    ?>
  </div>
<!---  ---->
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); ">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="">DonLuchoLicor.com</a>
</div>
<!-- Copyright -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>