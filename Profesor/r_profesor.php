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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="..\p_inicio.php"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="mod_profesor.php?flag_mod=0"> Modificar datos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="mod_profesor_alumno.php?flag_mod=0"> Modificar datos alumnos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="r_profesor.php?flag_alumno=0"> Registro Profesores </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="r_ayudante.php?flag_mod=0"> Registro Ayudantes </a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="imparticion.php?flag_mod=0"> Imparticion </a>
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
                    <?php $idp=$_GET["id_p"];?>
                    El registro del profesor fue exitoso!!<br>Su ID es: <?php echo $idp?>
                    </div>
          </div>
          <?php } elseif($_GET["flag_alumno"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Rellene los campos vacíos.
                    </div>
          </div>
          <?php } ?>


      <h3>Bienvenido profesor!</h3>
      <br>
      <h5>Por favor ingrese los datos del profesor a registrar</h5>
        <form action="..\Formulario\form_reg_profesor.php" method="POST"> 
          <div class="form-group">
            <label for="nombre">Ingrese Nombre:</label>
            <input type="text" class="form-control" placeholder="Ej: Juan" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="apellido">Ingrese apellido:</label>
            <input type="text" class="form-control" placeholder="Ej: Perez" id="apellido" name="apellido">
          </div>
          <div class="form-group">
            <label for="especialidad">Ingrese su especialidad:</label>
            <input type="integer" class="form-control" placeholder="Ej: inteligencia artificial" id="especialidad" name="especialidad">
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