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
      <li class="nav-item">
      <a class="nav-link active" href="r_ayudante.php?flag_mod=0"> Registro Ayudantes </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="imparticion.php?flag_mod=0"> Imparticion </a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    </div>
      <div class="col-sm-7">


          <?php if($_GET["flag_mod"]==1){ ?>
          <div class="container-sm">
                    <div class="alert alert-success">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    Asignación exitosa!!
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==2){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Usted no imparte el ramo
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El ramo no existe
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==4){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El alumno no existe
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==5){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El alumno ya es ayudante del ramo
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==6){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Debe llenar todos los campos
                    </div>
          </div>
          <?php } ?>


      <h3>Registro de ayudantía!</h3>
      <br>
      <h5>Promueva alumno a ayudante</h5>
        <form action="..\Formulario\form_reg_ayudante.php" method="POST"> 
          <div class="form-group">
            <label for="idAyudantia">Ingrese id de ayudantía:</label>
            <input type="text" class="form-control" placeholder="Ej: Ayudantia1" id="idAyudantia" name="idAyudantia">
          </div>
          <div class="form-group">
            <label for="siglaramo">Ingrese sigla del ramo:</label>
            <input type="text" class="form-control" placeholder="Ej: INF155" id="siglaramo" name="siglaramo">
          </div>
          <div class="form-group">
            <label for="rolAlumno">Ingrese rol del ayudante:</label>
            <input type="text" class="form-control" placeholder="Ej: 202073012" id="rolAlumno" name="rolAlumno">
          </div>
          <div class="form-group">
            <label for="carga">Ingrese carga de ayudantía:</label>
            <input type="text" class="form-control" placeholder="Ej: 5" id="carga" name="carga">
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