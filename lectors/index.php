<?php
include('../config/config.php');
include('lector.php');
$p = new Lector();

$allLectores= $p->getAll();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $remove = $p->remove($_GET['id']);
    if ($remove){
        header('Location: ' . ROOT . 'lectors/index.php');
    } else{
        $msj ="<div class='alert alert-danger' rol='alert' > Error al eliminar datos. </div>";
    }
 }

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>


<body>
    <?php include('../menu.php')?>
    <div class="container">
        <h2 class="text-center mb-5"> Lista de Lecotres </h2>

        <div class="row">
            <?php
            while ($lector = mysqli_fetch_object($allLectores)){
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5>Nombre: $lector->nombres  </h5>";
                echo "<p><b>Correo:</b> $lector->email 
                <br>
                <b> Celular: </b>  $lector->celular
                </p>";
                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/lectors/edit.php?id=$lector->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/lectors/index.php?id=$lector->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";
            }
?>
</body>
</html>
