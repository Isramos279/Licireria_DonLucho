
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
      <a class="navbar-brand" href="inicio.php"> Licoreria Don Lucho</a>
      <a class="nav-link bi bi-cup-straw" style="color: white;" href="licores.php"> Admin</a>
      <a class="nav-link bi bi-cart3" style="color: white;" href="compras.php"> Compras</a>
      <a class="nav-link bi bi-cart3" style="color: white;" href="vendedor.php"> Ingresar Vendedor</a>
      <a class="nav-link bi bi-info-circle" style="color: white;" href="nosotros.php"> Sobre nosotros</a>
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
    $query = "SELECT * FROM producto";
    $resultado =$conexion->query($query);

    while ($row = $resultado->fetch_assoc()) {
       ?>
       <div class="card">
        <img src="data:imge/jpg;base64, <?php echo base64_encode($row['foto']); ?>">
        <h4><?php echo $row['nombre']; ?></h4>
        <p><?php echo $row['contenido']; ?></p>  
       </div>
       <?php
     } 
  ?>
  <!-- <div class="row">
    <div class="col-1">Column</div>
    <div class="col-5">Column</div>
  </div> -->
</div>


<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); ">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="inicio.html">DonLuchoLicor.com</a>
</div> -->
<!-- Copyright -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>