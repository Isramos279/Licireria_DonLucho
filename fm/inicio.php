
<?php

    if(isset($_GET['usuario'])){
    $usuario=$_GET['usuario'];
  }
    if(isset($_GET['id_persona'])){
    $id_persona=$_GET['id_persona'];
  }
  if(isset($_GET['nivel'])){
    $nivel=$_GET['nivel'];
  }
    //Arreglo de id de productos ecogidos 
    $id_producto=0;
    $productos=array();
    //---------
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Don Lucho</title>

    <link rel="stylesheet" type="text/css" href="../estilos/style.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <LINK REL=StyleSheet HREF="../css/misEstilos.css" TYPE="text/css" MEDIA=screen>
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

<!-- CARUSEL
  ================================================== -->

<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://img.search.brave.com/t5nE-mNlBR9gsOvCX7MXsE7JXLpkUsQiiZ5heFZnpRQ/rs:fit:600:316:1/g:ce/aHR0cHM6Ly9zdDMu/ZGVwb3NpdHBob3Rv/cy5jb20vMTA2MzQz/Ny8xNzk0MC9pLzQ1/MC9kZXBvc2l0cGhv/dG9zXzE3OTQwMjQ1/NC1zdG9jay1waG90/by1ib3R0bGVzLW9m/LWFzc29ydGVkLWds/b2JhbC1saXF1b3Iu/anBn" class="d-block w-100" alt="..." style="height: 400px; width: 100px;">
      </div>
      <div class="carousel-item">
        <img src="https://img.search.brave.com/1DzNztRhgwm8lH5cM6tUKbnKUcKr3et8-KSGtSRcjrc/rs:fit:558:308:1/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vcGhvdG9z/L2JvdHRsZXMtb2Yt/YXNzb3J0ZWQtaGFy/ZC1saXF1b3ItYnJh/bmRzLXBpY3R1cmUt/aWQ1NDUzNDQ1MjQ_/az02Jm09NTQ1MzQ0/NTI0JnM9MTcwNjY3/YSZ3PTAmaD1OQ3hi/OHJoWnY5X0NReTJF/WU9Iak94TndZdUE0/UV82SmFKdnRiX2Zl/WC1NPQ" class="d-block w-100" alt="..." style="height: 400px; width: 100px;">
      </div>
      <div class="carousel-item">
        <img src="https://img.search.brave.com/NIRC1iBg2kCl7wrHlCNSJ7UGzimdjDn1itED6XbdkK8/rs:fit:640:424:1/g:ce/aHR0cHM6Ly9hc3Nl/dDIuemFua3lvdS5j/b20vaW1hZ2VzL3dl/cnZpY2UtY2FyZC9j/NzcvZjJmYy82NDAv/NDI0L3cvMTk5NjEv/LS8xMzc3NzA5NDYx/LnBuZw" class="d-block w-100" alt="..." style="height: 400px; width: 100px;" >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
  <!-- FIN CARUSEL
  ================================================== -->

<!------ consulta y catalogo --->
<h1 class="title">Catalogo productos</h1>
<br>
<div class="container">
  <?php 
  include("../conexion/conexion.php");
    $query = "SELECT * FROM producto WHERE stok>=1";
    $resultado =$conexion->query($query);

    while ($row = $resultado->fetch_assoc()) {
       ?>
       <div class="card">
        <img src="data:imge/jpg;base64, <?php echo base64_encode($row['foto']); ?>">
          <div class="card-body">
            <h4><?php echo $row['nombre']; ?></h4>
            <p><?php echo "Contenido: ".$row['contenido']. "ml"; ?></p> 
            <p><?php echo "Precio: ".$row['precio']. "$"; ?></p> 
            <label>Cantidad diponible: <?php echo $row['stok'];?></label>
            <a href="producto_persona.php?id_persona=<?php echo $id_persona ?>&id_producto=<?php echo $row['id_producto'] ?>&nivel=<?php echo $nivel?>" class="btn btn-primary">Comprar</a></button>
            <input type="text" id="id_producto" value="<?php echo $row['id_producto']; ?>" hidden>
          </div>
       </div>
       <?php
     } 
  ?>

<form id="fm_productos" method="POST" action="producto_persona.php" hidden>
  <input id="compra_id_persona" name="id_persona" value="<?php echo $id_persona ?>">
  <input id="compra_id_producto" name="id_producto">
  <input id="compra_btn_producto" type="submit" value="enviar" >
</form>
</div>

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); ">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="">DonLuchoLicor.com</a>
</div> -->
<!-- Copyright -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer>
  <!-- JQuery 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


      <script src="../js/inicio.js"></script>-->
</footer>
</html>