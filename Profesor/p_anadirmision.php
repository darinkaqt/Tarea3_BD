<?php include 'validar_profesor.php' ?>

<?php include '..\headers.php' ?>
<?php include '..\barras.php' ?>


<!-- Cuerpo -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    </div>

    <div class="col-sm-8">
      <?php if($_GET["flag_mod"]==1){ ?>
      <div class="container-sm">
                <div class="alert alert-success">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <?php $idmi=$_GET["id_mision"];?>
                La misión se registró correctamente<br>El ID de su misión es: <?php echo $idmi?>
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Estudiante no está registrado.
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Debe agregar el rol del estudiante.
                </div>
      </div>
      <?php } ?>
      <h3>Creación de una nueva misión</h3>
      <br>
      <h5>Ingrese los nuevos datos para dejar vigente la misión:</h5>
          <form action="../Formulario/form_anadirmision.php" method ="POST">
          <div class="form-group">
            <label for="idAlumno">Rol del estudiante favorecido:</label>
            <input type="text" class="form-control" placeholder="Ej: 202012123" id="idAlumno" name="idAlumno">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción de la misión:</label>
            <input type="text" class="form-control" placeholder="Ej: Ayudar en la tarea 2 de BD" id="descripcion" name="descripcion">
          </div>
          <div class="form-group">
            <label for="recompensa">Recompensa de la misión:</label>
            <input type="text" class="form-control" placeholder="Ej: Invitarlos a comer al XL" id="recompensa" name="recompensa">
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