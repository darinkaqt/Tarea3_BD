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
      <a class="nav-link" href="inicio_ayud.php"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="mod_estudiante.php"> Modificar datos </a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="t_misiones.php"> Misiones asignadas </a>
      </li>
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