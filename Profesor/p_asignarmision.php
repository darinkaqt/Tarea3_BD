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
  <link rel="stylesheet" type="text/css" href="style.css">
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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="p_inicio.php"><img src="imagen63.jpg" width="30" height="30"> Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="p_anadirmision.php?flag_anadirmision=0">Añadir Misión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="p_estadomision.php?flag_estado=0">Cambiar estado misión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="p_recompensa.php?flag_recompensa=0">Modificar recompensas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="p_asignarmision.php?flag_asignarmision=0">Asignar misión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="p_tablas.php">Datos tabulados</a>
      </li>
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
                La misión fue asignada al ayudante!!
                </div>
      </div>
      <?php } elseif($_GET["flag_asignarmision"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> La misión y/o el ayudante no están registrados.
                </div>
      </div>
      <?php } elseif($_GET["flag_asignarmision"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Los campos son obligatorios.
                </div>
      </div>
      <?php } ?>
      <h3>Asignar misión a un ayudante!</h3>
      <br>
      <h5>Por favor ingrese los siguientes datos:</h5>
          <form action="form_asignarmision.php" method ="POST">
          <div class="form-group">
            <label for="idMision">Id de la misión:</label>
            <input type="text" class="form-control" placeholder="Ej: 12345" id="idMision" name="idMision">
          </div>
          <div class="form-group">
            <label for="rolAyudante">Rol ayudante:</label>
            <input type="text" class="form-control" placeholder="Ej: 202012123" id="rolAyudante" name="rolAyudante">
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