<?php
    if(isset($_GET['id_persona'])){
    $id_persona=$_GET['id_persona'];
  }
  if(isset($_GET['nivel'])){
    $nivel=$_GET['nivel'];
  }
?>
<?php 
  require_once "../conexion/conexion.php";
  // session_start();
  if (empty($_POST['codigobarras'])) {
    //echo "ingrese datos";
  }else{
    $codigobarras=$_POST['codigobarras'];
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $contenido=$_POST['contenido'];
    $precio=$_POST['precio'];
    $stok=$_POST['stok'];
    $nombretipo=$_POST['nombretipo'];
    $foto = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    //$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    //$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));


    // ingresar tipo
    $query="INSERT INTO tipo(nombre) VALUES ('$nombretipo')";
    $resultado = $conexion->query($query);

    if ($resultado) {
      echo "ingreso1";
    }else{
      echo "no ingreso1";
    }

    // consultar ultimo tipo ingresado
    $ultimo = "SELECT MAX(id_tipo) AS id FROM TIPO";
    $result = $conexion->query($ultimo);

    

    $fila =  mysqli_fetch_row($result);
    $ultimoidtipo =$fila[0];
    //Ingresar producto
    $query = "INSERT INTO PRODUCTO Values(Default,'$codigobarras','$nombre','$marca','$contenido','$precio','$stok','$ultimoidtipo','$foto')";
    
    $ingreso = $conexion->query($query);

    if ($ingreso) {
      echo "<script type='text/javascript' >alert('datos guardados');</script>";
      echo "<script >setTimeout(\"location.href='inicio.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>'\",1000)</script>";

    }

    
}
  //header("location: ../fm/inicio.php");



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


<!------ Formulario --->
<div class="container">
            <form enctype="multipart/form-data" method="POST" >
              <br>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>
              <div class="row">
                <div class="col-1"></div>
                  
                <div class="col-3">
                  <label for="formGroupExampleInput" class="form-label">Codigo de barras</label>
                  <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="codigobarras" required> 
                </div>
              </div>
              <div class="row">
                <div class="col-1"></div>

                <div class="col-3">
                  <label for="formGroupExampleInput" class="form-label">Ingrese Nombre del producto</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nombre" required>
                </div>
              
                <div class="col-3 ">
                  <label for="formGroupExampleInput" class="form-label">Ingrese Marca del producto</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="marca" required>
                </div>
              
                <div class="col-3">
                    <label for="formGroupExampleInput" class="form-label">Contenido</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="(000 ml)" name="contenido" required>
                </div>
              </div>

              <div class="row">
                <div class="col-1"></div>
                <div class="col-1">
                    <label for="formGroupExampleInput" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="precio" required>
                    <br>
                </div>
                <div class="col-1">
                    <label for="formGroupExampleInput" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="stok" required>
                    <br>
                </div>
                <div class="col-1">
                    <label for="formGroupExampleInput" class="form-label">Tipo</label>
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example" name="nombretipo" required>
                      <option selected></option>
                      <option value="1">RON</option>
                      <option value="2">WISKI</option>
                      <option value="3">ALCHOL ARTESANAL</option>
                      <option value="4">CERVEZA</option>
                      <option value="5">VODKA</option>
                      <option value="6">VINO</option>
                      <option value="7">COCTELES</option>
                    </select>
                    <br>
                </div>
                 <div class="col-4">
                    <label for="formGroupExampleInput" class="form-label">Imagen</label>
                    <!-- <label for="formFileSm" class="form-label">Imagen</label> -->
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="image" required>
                    <br>
                </div>
              </div>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>

              <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                  <button class="btn btn-dark" type="submit" >Guardar</button>
                </div>
                <div class="col-5"></div>
              </div>

              <br>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>

            </form>
            <div class="row">
                  <?php
                  include ("../conexion/conexion.php");
                  //session_start();
                  $query = 'SELECT id_producto,nombre,marca,contenido,stok FROM producto;';
                  
                  $resultado = $conexion->query($query);
                  //print($result);
                  echo "<table class='table'>\n";
                  echo "<thead'>\n";
                      echo "<th scope='col' >N</th>\n";
                      echo "<th scope='col'>Nombre</th>\n";
                      echo "<th scope='col'>Marca</th>\n";
                      echo "<th scope='col'>Contenido</th>\n";
                      echo "<th scope='col'>Stok</th>\n";
                      echo "<th scope='col'>Acciones</th>\n";
                  echo "</thead'>\n";

                  while ($row = $resultado->fetch_assoc()) {

                      echo "\t<tr>\n";
                      foreach ($row as $col_value) {
                          echo "\t\t<td>$col_value</td>\n";
                      }
                      ?>
                      \t\t<td><a href="modificarStok.php?stok=<?php echo $row['stok'] ?>&nivel=<?php echo $nivel ?>&id=<?php echo $row['id_producto'] ?>&id_persona=<?php echo $id_persona?>">Modificar</a></td>\n;
                      \t</tr>\n;
<?php
                  }
                  echo "</table>\n";
              ?>
            </div>
</div>
  
<!--- Fin Catalogo ---->
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); ">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="">DonLuchoLicor.com</a>
</div>
<!-- Copyright -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>