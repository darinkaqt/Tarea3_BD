<?php include 'validar_alumno.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="imagen63.ico"/>
  <title>Sistema de Misiones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../Imagenes/style.css">
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
      <a class="nav-link" href="mod_estudiante.php?flag_mod=0"> Modificar datos </a>
      </li>
      <?php if($_SESSION["acceso"]) { ?>
      <li class="nav-item">
      <a class="nav-link" href="t_misiones.php"> Misiones asignadas </a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="p_asignarmision.php"> Asignar misión </a>
      </li>
      <?php } ?>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h4>¿Estás motivado?</h4>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <p> Es hora de que ayudes a un estudiante!
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-6">
      <?php if($_GET["flag_asignarmision"]==1){ ?>
      <div class="container-sm">
                <div class="alert alert-success">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                La misión fue asignada correctamente!!
                </div>
      </div>
      <?php } elseif($_GET["flag_asignarmision"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> La misión no está registrada.
                </div>
      </div>
      <?php } elseif($_GET["flag_asignarmision"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> el idAyudantia no te pertenece
                </div>
      </div>
      <?php } elseif($_GET["flag_asignarmision"]==4){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Asignación ya registrada
                </div>
      </div>
      <?php } elseif($_GET["flag_asignarmision"]==5){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Los campos son obligatorios.
                </div>
      </div>
      <?php } ?>
      <h3>Asignate una misión!</h3>
      <br>
      <h5>Por favor ingrese los siguientes datos:</h5>
          <form action="../Formulario/form_asignarmision.php" method ="POST">
          <div class="form-group">
            <label for="idMision">Id de la misión:</label>
            <input type="text" class="form-control" placeholder="Ej: 12345" id="idMision" name="idMision">
          </div>
          <div class="form-group">
            <label for="idAyudantia">Id de la ayudantia:</label>
            <input type="text" class="form-control" placeholder="Ej: 12345" id="idAyudantia" name="idAyudantia">
          </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>
<br>
<br>
<br>
<br>


</body>
</html>