
<?php 
require_once "conexion/conexion.php";


if (empty($_POST['usuario'])) {
  // echo "vacio";
  //echo "<script type='text/javascript' >alert('llene los datos');</script>";
}else{
  if(isset($_GET['id'])){
    $id_persona=$_GET['id'];
  }
  $usuario=$_POST['usuario'];
  $contrasenia=$_POST['contrasenia'];
  $_SESSION['usuario']=$usuario;
    // Consultar ultimo tipo ingresado
  $query = "SELECT * FROM  persona  WHERE usuario='$usuario' and contrasenia ='$contrasenia'";
  //correr qu
  $resultado = $conexion->query($query);
  $filas=mysqli_fetch_row($resultado);
  if($filas){
    $nivel =$filas[5];
    $id_persona=$filas[0];
  }
  /*while ($row = $resultado->fetch_assoc()) 
  {
      $id_persona=$row['id_persona'];
      $usuario=$row['usuario'];
      $nivel=$row['nivel'];
  } */
  $var =1;

  //echo "$var";
if($filas){
    header("location: fm/inicio.php?id_persona=".$id_persona."&"."usuario=".$usuario."&"."nivel=".$nivel);
}else
{
    echo "<script type='text/javascript' >alert('datos incorrec');</script>";
  }
  
  //echo "$resultado";
}
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
        border-radius: 5%;
        background:linear-gradient(top, #1162ac,white);
        background:-webkit-linear-gradient(top,  #1162ac,white);
        background:-moz-linear-gradient(top,  #1162ac,white);
        background:-o-linear-gradient(top,  #1162ac,white);
        background:-ms-linear-gradient(top,  #1162ac,white);
      }
      /*.bd-placeholder-img {
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
      */}
    </style>    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center"> 
    <div class="container">
      

      <div class="row">
        <div class="col">
          <img src="img/logo.png" alt="" height=100% width=100%>
        </div>
        <div class="col-sm-2 "></div>
        <div class="col">
          <div class="login">
            <main class="form-signin">
              <br><br><br><br><br>
              
              <form method="POST">
                <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
        
                <div class="col mb-3">
                  <label for="formGroupExampleInput" class="form-label">Usuario</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="usuario" required>
                </div>
                <div class="col mb-3">
                  <label for="formGroupExampleInput" class="form-label">Cntraseña</label>
                  <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="contrasenia" required>
                </div>
                <br>
        
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button> 
                
                <a class="w-100 btn-lg" type="button" href="fm/registro.php">Registrarte</a>
                <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
              </form>
            </main>
          </div>
        </div>
        <div class="col-sm- "></div>
      </div>
      <!-- btn de prueba -->
      <!-- <input type="button" value="Enviar variable" id="send"/> -->
      <!-- -->
    </div>
  </body>]


</html>
