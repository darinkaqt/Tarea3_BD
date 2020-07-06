<?php include 'validar_alumno.php' ?>

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
      <a class="nav-link" href="inicio_estudiante.php?flag_alumno=0"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="mod_estudiante.php?flag_mod=0"> Modificar datos </a>
      </li>
      <?php if($_SESSION["acceso"]) { ?>
      <li class="nav-item">
      <a class="nav-link" href="t_misiones.php"> Misiones asignadas </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="p_asignarmision.php"> Asignar misión </a>
      </li>
      <?php } ?>
    </ul>
  </div>  
</nav>

<!-- Cuerpo -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h4>¿Cambios?</h4>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <P ALIGN="justify"> Los cambios son buenos
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-6">
      <?php if($_GET["flag_mod"]==1){ ?>
      <div class="container-sm">
                <div class="alert alert-success">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                Actualizado correctamente!
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Ingrese datos para actualizar
                </div>
      </div>
      <?php } ?>
      <h3>Rellene los datos que quiera modificar</h3>
      <br>
        <form action="../Formulario/form_mod_alumno.php" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="Ej: Brad" id="nombre" name="nombre">
          </div>

        <br><br>
        <form action="../Formulario/form_mod_alumno.php" method="POST">
          <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" placeholder="Ej: Pitt" id="apellido" name="apellido">
          </div>

        <br><br>
        <form action="../Formulario/form_mod_alumno.php" method="POST">
          <div class="form-group">
            <label for="contrasenia">Contraseña:</label>
            <input type="text" class="form-control" placeholder="Ej: Contraseña123" id="contrasenia" name="contrasenia">
          </div>
        <button type="submit" class="btn btn-primary">Cambiar</button>
  </div>
</div>
<br>
<br>
<br>
<br>


</body>
</html>