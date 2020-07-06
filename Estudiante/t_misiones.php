<?php include 'validar_alumno.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="imagen63.ico"/>
  <title>Sistema de Misiones</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="..\Imagenes\style_t.css">
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
      <a class="nav-link active" href="t_misiones.php"> Misiones asignadas </a>
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
    </div>
    <div class="col-sm-7">
      <h3>Misiones asignadas</h3>
      <br>

      <table>
      <tr>
      <th>ID misión</th>
      <th>ID Profesor</th>
      <th>Rol alumno</th>
      <th>Fecha</th>
      <th>Estado</th>
      <th>Descripción</th>
      <th>Recompensa</th>
      </tr>

      <?php
      include '..\db_config.php';
      session_start();
      // Obtener idAyudantia del rolAlumno , segun yo si
      $sql1 = 'SELECT * FROM ayudantia WHERE rolayudante = $1';
      $result1 = pg_query_params($dbconn, $sql1, array($_SESSION["rolAlumno"]));
      pg_close($dbconn);
      echo "$result1[0]"; 
      if( pg_num_rows($result1) > 0 ) {
        while($idayud = pg_fetch_assoc($result1)) {
          // Obtener idMision de cada idAyudantia desde la tabla Asignacion
          $sql2 = 'SELECT idmision FROM asignacion WHERE idayudantia = $1';
          $idmision = pg_query_params($dbconn, $sql2, array($idayud));
          pg_close($dbconn);
          echo $idmision[0];  //entonces??hablaron al mismo tiempo xd asidaj 
          while($idm = pg_fetch_assoc($idmision)){
            // Aqui obtengo los datos de esa mision
            echo "entre";
            $sql3 = 'SELECT * FROM mision WHERE idmision = $1';
            $row = pg_query_params($dbconn, $sql3, array($idm)); //eso segun yo no vale pq mira
            echo "<tr><td>" . $row[0]. "</td><td>" . $row[1] . "</td><td>". $row[2]. "</td><td>". $row[3]. "</td><td>". $row[4]. "</td><td>". $row[5]. "</td><td>". $row[6]. "</td></tr>";
          }

          /* Imprimir misiones asignadas al Ayudante
          if( pg_num_rows($misiones) > 0 ) {  
            echo "</table>";
            pg_close($dbconn);
          }
          else{
            echo "</table>";
            pg_close($dbconn);
          }*/
        }
        echo "</table>";
      }
      else{
        echo "</table>";
        pg_close($dbconn);
      }

      ?>
      </table>

      <br>
  </div>
</div>
<br>
<br>
<br>
<br>


</body>
</html>