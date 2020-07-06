<?php include 'validar_profesor.php' ?>

<?php include '..\headerst.php' ?>
<?php include '..\barras.php' ?>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-8">

        <?php if($_GET["flag_mod"]==1){ ?>
        <div class="container-sm">
            <div class="alert alert-success">
            <button class="close" data-dismiss=alert><span>&times;</span></button>
            Actualizado correctamente!
            </div>
        </div>
        <?php } elseif($_GET["flag_mod"]==2){ ?>
        <div class="container-sm">
            <div class="alert alert-danger">
            <button class="close" data-dismiss=alert><span>&times;</span></button>
            <strong>Error:</strong> No se ingresaron datos para modificar
            </div>
        </div>
        <?php } elseif($_GET["flag_mod"]==3){ ?>
        <div class="container-sm">
            <div class="alert alert-danger">
            <button class="close" data-dismiss=alert><span>&times;</span></button>
            Ayudante eliminado
            </div>
        </div>
        <?php } ?>

        <h3>Modificar datos de ayudantes</h3>

        <table>
        <tr>
        <th>Rol alumno</th>
        <th>Nombre</th>
        <th>Apellido</th>
        </tr>

        <?php
        include '../db_config.php';

        $sql1 = "SELECT siglaramo FROM imparticion WHERE idprofesor=$1";
        $result1 = pg_query_params($dbconn, $sql1, array($_SESSION["idProfesor"]));

        if( pg_num_rows($result1) > 0 ) {
            while($row1 = pg_fetch_assoc($result1)){
                $sql2 = "SELECT rolayudante FROM Ayudantia WHERE siglaramo=$1";
                $result2 = pg_query_params($dbconn, $sql2, array($row1["siglaramo"]));

                while($row2 = pg_fetch_assoc($result2)){
                    $sql = "SELECT * FROM Alumno WHERE rolalumno=$1";
                    $result = pg_query_params($dbconn, $sql, array($row2["rolayudante"]));
                    $row = pg_fetch_assoc($result); ?>

                    <tr>
                        <?php echo "<td>" . $row["rolalumno"]. "</td>"; ?>
                        <?php echo "<td>" . $row["nombre"] . "</td>"; ?>
                        <?php echo "<td>". $row["apellido"]. "</td>"; ?>
                    <tr>
                <?php }
            }
            echo "</table>";
        }
        else echo "</table>"; ?>
        
        </table>
        <br>

        <?php
        $sql1 = "SELECT siglaramo FROM imparticion WHERE idprofesor=$1";
        $result1 = pg_query_params($dbconn, $sql1, array($_SESSION["idProfesor"]));

        if( pg_num_rows($result1) > 0 ) {?>
            <form action="../Formulario/form_aux.php" method="POST">
            <p> Elegir rol del ayudante:
            <select name="alumn">
            <?php while($row1 = pg_fetch_assoc($result1)){
                $sql2 = "SELECT rolayudante FROM Ayudantia WHERE siglaramo=$1";
                $result2 = pg_query_params($dbconn, $sql2, array($row1["siglaramo"]));


                while($row2 = pg_fetch_assoc($result2)){
                    $sql = "SELECT rolalumno FROM Alumno WHERE rolalumno=$1";
                    $result = pg_query_params($dbconn, $sql, array($row2["rolayudante"]));
                    $row = pg_fetch_assoc($result); ?>

                    <option><?php echo $row["rolalumno"] ?></option>

                <?php }
            }?>
            </select>
                <input type="submit" value="Modificar" name="modificar">
                <input type="submit" value="Eliminar" name="eliminar"">
            </p>
            </form>
        <?php }
        else ?>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<script src="../confirm.js"></script>
</body>
</html>