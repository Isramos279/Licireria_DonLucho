
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
        <a class="navbar-brand" href="inicio.php"> Licoreria Don Lucho</a>
        <a class="nav-link bi bi-cup-straw" style="color: white;" href="licores.php"> Admin</a>
        <a class="nav-link bi bi-cart3" style="color: white;" href="compras.php"> Compras</a>
        <a class="nav-link bi bi-cart3" style="color: white;" href="vendedor.php"> Ingresar Vendedor</a>
        <a class="nav-link bi bi-info-circle" style="color: white;" href="nosotros.php"> Sobre nosotros</a>
      </div>
    </nav>
  </header>

<h1>Ingresar vendedor</h1>
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
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nombre">
                </div>
              </div>
              <div class="row">
                <div class="col-2"></div>
                <div class="col-8 ">
                  <label for="formGroupExampleInput" class="form-label">Ingrese Apellido</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="apellido">
                </div>
              </div>
              <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="formGroupExampleInput" class="form-label">Ingrese Usuario</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="usuario">
                </div>
                <div class="col-4">
                    <label for="formGroupExampleInput" class="form-label">Ingrese Contraseña</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="contrasenia">
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
                    <label for="formGroupExampleInput" class="form-label">Ingrese numero</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="nombrecont">
                </div>
                
                <div class="col-2 ">
                  <label for="formGroupExampleInput" class="form-label">Tipo</label>
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example" name="descripcion">
                    <option selected>Tipo</option>
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
        <div class="col-1"></div>
      </div>
      
</div>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); ">© 2022 Copyright:
  <a class="text-reset fw-bold" href="inicio.html">DonLuchoLicor.com</a>
</div>


<!-- Copyright -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>