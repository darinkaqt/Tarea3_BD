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
  <link rel="stylesheet" type="text/css" href="style_t.css">
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
        <a class="nav-link" href="p_asignarmision.php?flag_asignarmision=0">Asignar misión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="p_tablas.php">Datos tabulados</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-2">
      <h4>Tipos:</h4>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="t_estudiante.php">Estudiantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="t_ayudante.php">Ayudantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="t_profesor.php">Profesores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="t_misionestot.php">Misiones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="t_asignaciones.php">Asignaciones</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
      <h3>Catálogo de misiones</h3>

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
      include 'db_config.php';
      $sql = "SELECT * FROM Mision";
      $result = pg_query($dbconn, $sql);
      if( pg_num_rows($result) > 0 ) {
        while($row = pg_fetch_assoc($result)) {
          echo "<tr><td>" . $row["idmision"]. "</td><td>" . $row["idprofesor"] . "</td><td>". $row["idalumno"]. "</td><td>". $row["fechaingreso"]. "</td><td>". $row["estado"]. "</td><td>". $row["descripcion"]. "</td><td>". $row["recompensa"]. "</td></tr>";
        }
        echo "</table>";
        pg_close($dbconn);
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