<?php include 'validar_profesor.php' ?>

<?php include '..\headerst.php' ?>
<?php include '..\barras.php' ?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-8">
      <h3>Misiones creadas por usted</h3>
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
      include '../db_config.php';
      $sql = "SELECT * FROM Mision WHERE idprofesor=$1";
      $result = pg_query_params($dbconn, $sql, array($_SESSION["idProfesor"]));
      if( pg_num_rows($result) > 0 ) {
        while($row = pg_fetch_assoc($result)) {
          echo "<tr><td>" . $row["idmision"]. "</td><td>". $row["idalumno"]. "</td><td>". $row["estado"]. "</td><td>". $row["descripcion"]. "</td><td>". $row["recompensa"]. "</td></tr>";
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