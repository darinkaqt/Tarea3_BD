<?php include 'validar_profesor.php' ?>

<?php include '..\headerst.php' ?>
<?php include '..\barras.php' ?>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-1">
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
            <strong>Error:</strong> No puede cambiar el rol a un ayudante
            </div>
        </div>
        <?php } ?>

        <h3>Modificar datos de alumnos</h3>

        <table>
        <tr>
        <th>Rol alumno</th>
        <th>Nombre</th>
        <th>Apellido</th>
        </tr>

        <?php
        include '../db_config.php';

        $sql = "SELECT rolalumno, nombre, apellido FROM Alumno";
        $result = pg_query($dbconn, $sql);
        if( pg_num_rows($result) > 0 ) {
            while($row = pg_fetch_assoc($result)) { ?>
                <tr>
                    <?php echo "<td>" . $row["rolalumno"]. "</td>"; ?>
                    <?php echo "<td>" . $row["nombre"] . "</td>"; ?>
                    <?php echo "<td>". $row["apellido"]. "</td>"; ?>
                <tr>
            <?php }
            echo "</table>";
        }
        else{
            echo "</table>";
        }
        ?>
        </table>

        <br>

        <?php
        $sql = "SELECT rolalumno, nombre, apellido FROM Alumno";
        $result = pg_query($dbconn, $sql);
        ?>

        <form action="../Formulario/form_aux.php" method="POST">
            <p> Elegir rol del alumno:
            
            <select name="alumn">
                <?php while($row = pg_fetch_assoc($result)) { ?>
                <option><?php echo $row["rolalumno"] ?></option>
                <?php } ?>
            </select>
                <input type="submit" value="Modificar" name="modificar">
            </p>
        </form>

        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
</body>
</html>