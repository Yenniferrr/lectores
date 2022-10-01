<?php
include('../config/config.php');
include('Lector.php');
$p = new Lector();
$data = mysqli_fetch_object($p->getOne($_GET['id']));


if (isset($_POST) && !empty($_POST)){
$update = $p->update($_POST);

if ($update){

$mensaje = '<div class="alert alert-success" role="alert">Lector modificado correctamente </div>';

}else{

$mensaje = '<div class="alert alert-danger" role="alert" >Error al modificar el lector </div>';
}
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modificar lector</title>
</head>


<body>
<?php include('../menu.php') ?>
<div class="container">
<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
<h2 class="text-center mb-5">Informacion del lector</h2>


    <form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="nombres" id="nombres" value="<?= $data->nombres ?>"  class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>"  class="form-control" >

  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" value="<?= $data->apellidos ?>"  class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="email" name="email" id="email" value="<?= $data->email ?>"  class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular" value="<?= $data->celular ?>"  class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Profesion</label>
    <input type="text" name="profesion" id="profesion" value="<?= $data->profesion ?>"  class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>"  class="form-control" >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Interes</label>
    <input type="text" name="interes" id="interes" value="<?= $data->interes ?>"  class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>"  class="form-control" >
  </div>
  <div class="col-12">
    <button  class="btn btn-primary">Guardar cambios</button>
  </div>
</form>
    </body>
    </html>