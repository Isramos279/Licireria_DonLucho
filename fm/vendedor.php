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


if (empty($_POST['usuario'])) {
  // echo "vacio";
  //echo "<script type='text/javascript' >alert('llene los datos');</script>";
}else{
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $contrasenia=$_POST['contrasenia'];
    //datos de la tabla contacto
    $nombrecont=$_POST['nombrecont'];
    $descripcion=$_POST['descripcion'];
    //dato quemado nivel USUARIO 
    $nivel=1;
    // ingresar Contacto para vendedor
    $query="INSERT INTO contacto VALUES (Default,'$nombrecont','$descripcion')";
    $resultado = $conexion->query($query);
    //Consultar ultimo Contacto ingresado
    $ultimo = "SELECT MAX(id_contacto) AS id FROM contacto";
    $result = $conexion->query($ultimo);

    $fila =  mysqli_fetch_row($result);
    $ultimoidtipo =$fila[0];
    
    //Ingresar PERSONA
    $query = "INSERT INTO PERSONA Values(Default,'$usuario','$contrasenia','$nombre','$apellido','$nivel','$ultimoidtipo')";
    $ingreso = $conexion->query($query);

    

    if ($ingreso && $resultado ) {
      echo "<script type='text/javascript' >alert('datos guardados');</script>";
      echo "<script >setTimeout(\"location.href='inicio.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>'\")</script>";

    }else{
      echo "<script type='text/javascript' >alert('datos no guardados');</script>";
      echo "<script >setTimeout(\"location.href='inicio.php?id_persona=<?php echo $id_persona ?>&nivel=<?php echo $nivel?>'\")</script>";
    }
} 
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

<h1>Formulario de vendedor</h1>
<div class="container-fluit">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <div class="login">
            <form method="POST">
              <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                  <label for="formGroupExampleInput" class="form-label">Ingrese Nombre</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nombre" required>
                </div>
              </div>
              <div class="row">
                <div class="col-2"></div>
                <div class="col-8 ">
                  <label for="formGroupExampleInput" class="form-label">Ingrese Apellido</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="apellido" required>
                </div>
              </div>
              <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="formGroupExampleInput" class="form-label">Ingrese Usuario</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="usuario" required>
                </div>
                <div class="col-4">
                    <label for="formGroupExampleInput" class="form-label">Ingrese Contraseña</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="contrasenia" required>
                    <br>
                </div>
              </div>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>
              <div class="row">
                <div class="col-2"></div>
                <div class="col-1 "></div>
                <div class="col-4">
                    <label for="formGroupExampleInput" class="form-label">Numero de contacto</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nombrecont" required>
                </div>
                
                <div class="col-2 ">
                  <label for="formGroupExampleInput" class="form-label">Tipo</label>
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example" name="descripcion" required>
                    <option selected></option>
                    <option value="1">Celular</option>
                    <option value="2">Teléfono</option>
                  </select>
                    <br>
                </div>
              </div>
              <div class="row">
                <hr width=50%  align="right">
                <br>
              </div>
              <div class="row">
                <div class="col"></div>
                <div class="col">

                </div>
                <div class="col">
                  <button class="btn btn-dark" type="submit">Guardar</button>
                </div>
                <div class="col"></div>
              </div>
              <br>
            </form>
        </div>
        <div class="col-1"></div>
      </div>
      
</div>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); ">© 2022 Copyright:
  <a class="text-reset fw-bold" href="">DonLuchoLicor.com</a>
</div>


<!-- Copyright -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>