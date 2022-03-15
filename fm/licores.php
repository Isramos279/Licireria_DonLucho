<?php 
  require_once "../conexion/conexion.php";
  // session_start();
  if (empty($_POST['codigobarras'])) {
    echo "ingrese datos";
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
      echo "<script >setTimeout(\"location.href='inicio.php'\",1000)</script>";
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
      <a class="navbar-brand" href="inicio.php"> Licoreria Don Lucho</a>
      <a class="nav-link bi bi-cup-straw" style="color: white;" href="licores.php"> Admin</a>
      <a class="nav-link bi bi-cart3" style="color: white;" href="compras.php"> Compras</a>
      <a class="nav-link bi bi-cart3" style="color: white;" href="vendedor.php"> Ingresar Vendedor</a>
      <a class="nav-link bi bi-info-circle" style="color: white;" href="nosotros.php"> Sobre nosotros</a>
    </div>
  </nav>
</header>


<!------ Formulario --->
<div class="login">
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
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="codigobarras"> 
                </div>
              </div>
              <div class="row">
                <div class="col-1"></div>

                <div class="col-3">
                  <label for="formGroupExampleInput" class="form-label">Ingrese Nombre del producto</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nombre">
                </div>
              
                <div class="col-3 ">
                  <label for="formGroupExampleInput" class="form-label">Ingrese Marca del producto</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="marca">
                </div>
              
                <div class="col-3">
                    <label for="formGroupExampleInput" class="form-label">Contenido</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="contenido">
                </div>
              </div>

              <div class="row">
                <div class="col-1"></div>
                <div class="col-1">
                    <label for="formGroupExampleInput" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="precio">
                    <br>
                </div>
                <div class="col-1">
                    <label for="formGroupExampleInput" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="stok">
                    <br>
                </div>
                <div class="col-1">
                    <label for="formGroupExampleInput" class="form-label">Tipo</label>
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example" name="nombretipo">
                      <option selected>Tipo</option>
                      <option value="1">RON</option>
                      <option value="2">WIski</option>
                    </select>
                    <br>
                </div>
                 <div class="col-4">
                    <label for="formGroupExampleInput" class="form-label">Imagen</label>
                    <!-- <label for="formFileSm" class="form-label">Imagen</label> -->
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
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
          </div>
  <!-- <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-4">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="0" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img src="https://img.search.brave.com/gdhxnEOIUJl_JaVVYs4WwYGzfPNKlLzXn_MQ6ErYuuY/rs:fit:800:800:1/g:ce/aHR0cDovL2Vpa3lv/LmVzLzYxOS10aGlj/a2JveF9kZWZhdWx0/L3Nha2UtZGUtY29y/aWEuanBn" style="height: 300px; width: 100%;"></svg>

            <div class="card-body">
              <p class="card-text">En el llano de Ordoki, protegido por los montes Gorramendi, Auza, Alkurruntz y Legate, donde confluyen las primeras fuentes del Bidasoa, paraje de encantamientos y antaño cobijo de lamias.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">COMPRAR</button>
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="0" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="https://img.search.brave.com/g7diWZBycFitneJXsMK12DcfNdN8idrEWFg6yAdFoP4/rs:fit:800:800:1/g:ce/aHR0cHM6Ly9kaXNk/cmltLmNvbS85Mzkt/bGFyZ2VfZGVmYXVs/dC9aSFVNSVItTUFS/R0FSSVRBLmpwZw" style="height: 300px; width: 100%;"></svg>

            <div class="card-body">
              <p class="card-text">Acercarse a un whisky legendario, plagado de anécdotas que harían temblar a otras marcas y que representa como ningún otro el espíritu escocés, es todo un placer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">COMPRAR</button>
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="0" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="https://1.bp.blogspot.com/-SobvPAjiT54/TflV---LcmI/AAAAAAAAAAY/zTtSPfV4ZfA/s200/OLD+PARR.jpg" style="height: 300px; width: 100%;"></svg>

            <div class="card-body">
              <p class="card-text">Es un whisky blend de malta producido a partir de 15 diferentes whiskies de malta, siendo los más predominantes el Talisker, Cragganmore, Linkwood y Caol Ila. És añejado durante 15 años.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">COMPRAR</button>
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="0" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="https://4.bp.blogspot.com/-UtcrmxVrE9A/TflY3CU5KSI/AAAAAAAAAAs/T_cZawygU94/s1600/LLABEL.jpg" style="height: 300px; width: 100%;"></svg>

            <div class="card-body">
              <p class="card-text">Nombrado así por su distintiva botella. Fue el último blend que Alexander II creó antes de morir, ya que el J.W. Gold Label y Blue Label fueron creados basándose en sus notas.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">COMPRAR</button>
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>
       
        
      </div>
    </div>
  </div> -->

<!--- Fin Catalogo ---->
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); ">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="inicio.html">DonLuchoLicor.com</a>
</div>
<!-- Copyright -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>