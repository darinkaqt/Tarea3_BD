<?php include 'validar_profesor.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="..\Imagenes\imagen63.ico"/>
  <title>Sistema de Misiones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="..\Imagenes\style.css">
</head>
<body>

<div class="hero-image">
  <div class="text-center">
    <br>
    <br>
    <br>
  <h1>¡Misiones para salvar a los estudiantes!</h1>
  </div>
</div>

<!-- Encabezado -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="inicio_profesor.php?flag_alumno=0"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="mod_profesor.php?flag_mod=0"> Modificar datos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="mod_profesor_alumno.php?flag_mod=0"> Modificar datos alumnos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="r_profesor.php?flag_alumno=0"> Registro Profesores </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="r_ayudante.php?flag_alumno=0"> Registro Ayudantes </a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="imparticion.php?flag_mod=0"> Imparticion </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="mision.php?flag_mod=0"> Misiones </a>
      </li>
    </ul>
  </div>  
</nav>

<!-- Cuerpo -->
<div class="container" style="margin-top:30px">
  <div class="row">
  <div class="col-sm-3">
  </div>
    <div class="col-sm-8">
      <?php if($_GET["flag_mod"]==1){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                El ramo no existe
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Debe ingresar un ramo
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Usted ya imparte el ramo
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==4){ ?>
      <div class="container-sm">
                <div class="alert alert-success">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                Asignado correctamente
                </div>
      </div>
      <?php } ?>
      
      <h3>Impartición</h3>
      <br>
      <form action="../Formulario/form_imparticion.php" method="POST">
        <h5>Ingrese los ramos que dicta</h5>
        <br>
          <div class="form-group">
            <label for="siglaramo">Sigla ramo:</label>
            <input type="text" class="form-control" placeholder="Ej: Brad" id="siglaramo" name="siglaramo">
          </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
  </div>
  <div class="col-sm-1">
  </div>
</div>
<br>
<br>
<br>
<br>