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
      <a class="nav-link active" href="inicio_profesor.php?flag_alumno=0"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
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
      <a class="nav-link" href="r_ayudante.php?flag_alumno=0"> Registro Ayudantes </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="imparticion.php?flag_mod=0"> Imparticion </a>
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
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-7">
    <?php if($_GET["flag_alumno"]==1){ ?>
      <div class="container-sm">
        <div class="alert alert-success">
          <button class="close" data-dismiss=alert><span>&times;</span></button>
          Sesion iniciada!
        </div>
      </div>
    <?php } ?>
      <h3>Bienvenido Profesor<h3>
      <br>
      <h4>¿Por qué estamos aquí?</h4>
      <br>
      <p>Una base de datos es un conjunto de datos pertenecientes a un mismo contexto y almacenados sistemáticamente para su posterior uso. En este sentido; una biblioteca puede considerarse una base de datos compuesta en su mayoría por documentos y textos impresos en papel e indexados para su consulta. Actualmente, y debido al desarrollo tecnológico de campos como la informática y la electrónica, la mayoría de las bases de datos están en formato digital, siendo este un componente electrónico, por tanto se ha desarrollado y se ofrece un amplio rango de soluciones al problema del almacenamiento de datos.<br><br>

      Es por esto, que en el ramo de Bases de datos de la Universidad Técnica Federico Santa María se les ha solicitado a sus estudiantes realizar un sistema de misiones que motive a los ayudantes a asistir a los estudiantes que están complicados con sus ramos. En este sistema, los profesores pueden añadir misiones que siempre son sobre un alumno, las cuales los ayudantes pueden aceptar y llevarse una recompensa asociada si completan la misión. <br><br>

      Lo invitamos a ingresar a nuestra página creada con los mayores conocimientos posibles para entregar una herramienta de alta calidad. Por esto, usted, estudiante, ayudante o profesor/a, dada esta cordial bienvenida, le pedimos que se identifique en el sector izquierdo cliqueando e ingresando sus datos. Esperamos que este sistema de misiones pueda resolver los problemas que dificulten a los estudiantes.<br><br><br><br>

      Se despide atentamente, el grupo 8,<br>
      Darinka Quiñones<br>
      Ignacio Ulloa<br>
      Raul Cruz
      </p>

      
      <form action="../cerrar_sesion.php" method="POST">
      <button type="submit" class="btn btn-warning">Cerrar sesion</button>
          
  </div>
</div>
<br>
<br>
<br>
<br>

</body>
</html>