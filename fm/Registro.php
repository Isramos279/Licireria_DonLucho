<?php 
  require_once "../conexion/conexion.php";
  // session_start();
  $id_persona=0;
  if (empty($_POST['nombre'])) {
    //echo "ingrese datos";
  }else{
    //datos de la tabla persona
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $contrasenia=$_POST['contrasenia'];
    //datos de la tabla contacto
    $nombrecont=$_POST['nombrecont'];
    $descripcion=$_POST['descripcion'];
    //dato quemado nivel USUARIO 
    $nivel=0;
    
    // ingresar Contacto
    $query="INSERT INTO contacto VALUES (Default,'$nombrecont','$descripcion')";
    $resultado = $conexion->query($query);

    if ($resultado) {
      echo "ingreso1";
    }else{
      echo "no ingreso1";
    }

    //Consultar ultimo Contacto ingresado
    $ultimo = "SELECT MAX(id_contacto) AS id FROM contacto";
    $result = $conexion->query($ultimo);

    $fila =  mysqli_fetch_row($result);
    $ultimoidtipo =$fila[0];
    
    //Ingresar PERSONA
    $query = "INSERT INTO PERSONA Values(Default,'$usuario','$contrasenia','$nombre','$apellido','$nivel','$ultimoidtipo')";
    $ingreso = $conexion->query($query);
    $id_persona=mysqli_insert_id($conexion);
    

    if ($ingreso && $resultado ) {
      echo "<script type='text/javascript' >alert('datos guardados');</script>";
      Header("Location: ../index.php?id=".$id_persona);

    }else{
      echo "<script type='text/javascript' >alert('datos no guardados');</script>";
      echo "<script >setTimeout(\"location.href='../index.php'\")</script>";
    }

    
}
  //header("location: ../fm/inicio.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Login</title>
    <link href="signin.css">
 

    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
      body{
        /* background:radial-gradient(center center, ellipse, white 25%, peru 66%, black 96%); */
        background:linear-gradient(top, white, black);
        background:-webkit-linear-gradient(top, white, black);
        background:-moz-linear-gradient(top, white, black);
        background:-o-linear-gradient(top, white, black);
        background:-ms-linear-gradient(top, white, black);
      }
      .login{
        padding: 4%;
        border-radius: 5%;
        background:linear-gradient(top, #1162ac,white);
        background:-webkit-linear-gradient(top,  #1162ac,white);
        background:-moz-linear-gradient(top,  #1162ac,white);
        background:-o-linear-gradient(top,  #1162ac,white);
        background:-ms-linear-gradient(top,  #1162ac,white);
      }
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

    
    <!-- Custom styles for this template -->
    <link href="../signin.css" rel="stylesheet">
  </head>
  <body class="text-center"> 
    <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-3">  <img src="../img/logo.png" alt="" height=100% width=100%> </div>
        <div class="col-7">
          <div class="login">
            <form method="POST">
              <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                  <label for="formGroupExampleInput" class="form-label">Ingrese su nombre</label>
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
                    <label for="formGroupExampleInput" class="form-label">Ingrese numero de contacto</label>
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
                  <a type="button" class="btn btn-dark" href="../index.php">Regresar</a>
                </div>
                <div class="col">
                  <button class="btn btn-dark" type="submit">Guardar</button>
                </div>
                <div class="col"></div>
              
              </div>

              <br>

            </form>
          </div>
      </div>
    </div>
    </div> 
  </body>
</html>
