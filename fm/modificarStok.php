<?php
$id=$_GET['id'];
$stok=$_GET['stok'];
    if(isset($_GET['id_persona'])){
    $id_persona=$_GET['id_persona'];
  }
  if(isset($_GET['nivel'])){
    $nivel=$_GET['nivel'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
	
                <div class="col-1">
                    <label for="formGroupExampleInput" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="" name="stok_" value="<?php echo $stok ?>" required>
                    <br>
                </div>
                <a href="updateStok.php?stok=<?php echo $stok ?>&id_persona= <?php echo $id_persona ?>&nivel=<?php echo $nivel ?>&id= <?php echo $id ?>">Modificar</a>
        </div>
</div>
</body>
</html>
