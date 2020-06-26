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
  <link rel="stylesheet" type="text/css" href="..\style.css">
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
      <a class="nav-link active" href="..\p_inicio.php"><img src="..\imagen63.jpg" width="30" height="30"> Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="..\p_anadirmision.php?flag_anadirmision=0">Añadir Misión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="..\p_estadomision.php?flag_estado=0">Cambiar estado misión</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="..\p_recompensa.php?flag_recompensa=0">Modificar recompensas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="..\p_asignarmision.php?flag_asignarmision=0">Asignar misión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="..\p_tablas.php">Datos tabulados</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-2">
      <h3>Registro</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="p_estudiante.php?flag_alumno=0">Estudiante</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="p_ayudante.php?flag_ayudante=0">Ayudante</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="p_profesor.php?flag_profesor=0">Profesor/a</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
          <?php if($_GET["flag_profesor"]==1){ ?>
          <div class="container-sm">
                    <div class="alert alert-success">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    El registro del profesor fue exitoso!!
                    </div>
          </div>
          <?php } elseif($_GET["flag_profesor"]==2){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El profesor ya se encuentra registrado.
                    </div>
          </div>
          <?php } elseif($_GET["flag_profesor"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Debe ingresar un ID para el profesor.
                    </div>
          </div>
          <?php } ?>
      <h3>Bienvenido profesor/a!</h3>
      <br>
      <h5>Por favor ingrese sus datos</h5>
      <form action="form_profesor.php" method="POST">
        <div class="form-group">
          <label for="idProfesor">Inserte su id de profesor:</label>
          <input type="text" class="form-control" placeholder="Ej: 105" id="idProfesor" name="idProfesor">
        </div>
        <div class="form-group">
          <label for="nombreProfesor">Ingrese su nombre:</label>
          <input type="text" class="form-control" placeholder="Ej: Cecilia" id="nombreProfesor" name="nombreProfesor">
        </div>
        <div class="form-group">
          <label for="apellidoProfesor">Ingrese su apellido:</label>
          <input type="text" class="form-control" placeholder="Ej: Perez" id="apellidoProfesor" name="apellidoProfesor">
        </div>
        <div class="form-group">
          <label for="especialidad">Ingrese su especialidad:</label>
          <input type="text" class="form-control" placeholder="Ej: Bases de datos" id="especialidad" name="especialidad">
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