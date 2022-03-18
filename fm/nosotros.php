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
    <div>
        <div class="px-4 py-5 my-5 text-center">            
            <h1 class="display-5 fw-bold">Nuestra Misión</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Brindar a nuestros clientes calidad constante en la atención y el servicio para satisfacer sus necesidades y requerimientos, proporcionando productos de calidad y en buen tiempo.</p>
            </div>
        </div>
        <div class="px-4  my-5 text-center">            
            <h1 class="display-5 fw-bold">Nuestra Visión</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Mantener posicionamiento en el mercado como una empresa sólida y competitiva en nuestra actividad comercial.</p>
            </div>
        </div>

    </div>
    <div class="row">
    <div class="col-3">
      
    </div>
    <div class="col">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.1308664206817!2d-78.65964228569378!3d-1.6664501987848146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d3078a0f0218b3%3A0x4c27e4c2480f0705!2sLicores%20Don%20Paco!5e0!3m2!1ses!2sec!4v1647414720375!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
  </div>
  <div class="px-4  my-5 text-center">            
            <h1 class="display-5 fw-bold">Para contactos:</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Celular: (+593)987654321</p>
              <p class="lead mb-4">Teléfono:(032)2230210</p>
              <p class="lead mb-4">Facebook: facebook.con/licreriadonlucho</p>
              <p class="lead mb-4">Correo: atencioncliente@donlucho.com</p>
            </div>
        </div>
  
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