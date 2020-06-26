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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link active" href="..\p_inicio.php"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    </div>
      <div class="col-sm-7">


          <?php if($_GET["flag_alumno"]==1){ ?>
          <div class="container-sm">
                    <div class="alert alert-success">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    El registro del estudiante fue exitoso!!
                    </div>
          </div>
          <?php } elseif($_GET["flag_alumno"]==2){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El estudiante ya se encuentra registrado.
                    </div>
          </div>
          <?php } elseif($_GET["flag_alumno"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Debe ingresar un rol para el estudiante.
                    </div>
          </div>
          <?php } ?>


      <h3>Bienvenido estudiante!</h3>
      <br>
      <h5>Por favor ingrese sus datos para registrarse</h5>
        <form action="form_alumno.php" method="POST"> 
          <div class="form-group">
            <label for="rolAlumno">Ingrese su Rol:</label>
            <input type="text" class="form-control" placeholder="Ej: 202073012" id="rolAlumno" name="rolAlumno">
          </div>
          <div class="form-group">
            <label for="nombreAlumno">Ingrese Nombre:</label>
            <input type="text" class="form-control" placeholder="Ej: Juan" id="nombreAlumno" name="nombreAlumno">
          </div>
          <div class="form-group">
            <label for="apellidoAlumno">Ingrese apellido:</label>
            <input type="text" class="form-control" placeholder="Ej: Perez" id="apellidoAlumno" name="apellidoAlumno">
          </div>
          <div class="form-group">
            <label for="anioingreso">Ingrese su año de ingreso:</label>
            <input type="integer" class="form-control" placeholder="Ej: 2020" id="anioingreso" name="anioingreso">
          </div>
          <div class="form-group">
            <label for="contrasenia">Ingrese su contraseña:</label>
            <input type="text" class="form-control" placeholder="Ej: Contraseña123" id="contrasenia" name="contrasenia">
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