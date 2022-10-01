<?php
include_once('../config/config.php');
include('Lector.php');


if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $lector= new Lector(); /* LLAMO A MI LIBRO DE RECETAS */
  
  
    $save = $lector-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div>' ;
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
  }
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crear lector</title>
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
    <input type="text" name="nombres" id="nombres"   class="form-control" >

  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular" class="form-control"  placeholder="Numero de celular">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Profesion</label>
    <input type="text" name="profesion" id="profesion" class="form-control"  placeholder="Profesional en">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Interes</label>
    <input type="text" name="interes" id="interes" class="form-control">
  </div>
  <div class="col-12">
    <button  class="btn btn-primary">Registrar</button>
  </div>
</form>





</body>
</html>