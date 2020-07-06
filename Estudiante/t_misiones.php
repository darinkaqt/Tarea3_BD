<?php include 'validar_alumno.php' ?>

<?php include '../headerst.php' ?>
<?php include '../barras.php' ?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-8">
      <h3>Misiones asignadas</h3>
      <br>

<table>
      <tr>
      <th>ID misión</th>
      <th>Rol alumno</th>
      <th>Estado</th>
      <th>Descripción</th>
      <th>Recompensa</th>
      </tr>

      <?php
      include '..\db_config.php';

      // Obtener idAyudantia del rolAlumno , segun yo si
      $sql1 = 'SELECT * FROM ayudantia WHERE rolayudante = $1';
      $result1 = pg_query_params($dbconn, $sql1, array($_SESSION["rolAlumno"]));

      if( pg_num_rows($result1) > 0 ) {
        while($idayud = pg_fetch_assoc($result1)) {
          //echo "hola";
          // Obtener idMision de cada idAyudantia desde la tabla Asignacion
          $sql2 = 'SELECT idmision FROM asignacion WHERE idayudantia = $1';
          $idmision = pg_query_params($dbconn, $sql2, array($idayud["idayudantia"]));
          
          while($idm = pg_fetch_assoc($idmision)){
            //Aqui obtengo los datos de esa mision
            $sql3 = 'SELECT * FROM mision WHERE idmision = $1';
            $row11 = pg_query_params($dbconn, $sql3, array($idm["idmision"]));
            $row = pg_fetch_assoc($row11);
            echo "<tr><td>" . $row["idmision"]. "</td><td>" . $row["idalumno"] . "</td><td>". $row["estado"]. "</td><td>". $row["descripcion"]. "</td><td>". $row["recompensa"]. "</td></tr>";
          }
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