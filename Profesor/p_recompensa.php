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
                La recompensa de la misión fue actualizada!!
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> La misión no existe!!
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Los campos son obligatorios.
                </div>
      <?php } elseif($_GET["flag_mod"]==4){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Usted no creo la mision
                </div>
      </div>
      <?php } ?>
      <h3>Cambiar la recompensa de una misión</h3>
      <br>
      <h5>Ingrese los datos para realizar los cambios:</h5>
          <form action="../Formulario/form_recompensa.php" method="POST">
          <div class="form-group">
            <label for="idMision">Id misión:</label>
            <input type="text" class="form-control" placeholder="Ej: 12345" id="idMision" name="idMision">
          </div>
          <div class="form-group">
            <label for="recompensa">Nueva recompensa:</label>
            <input type="text" class="form-control" placeholder="Ej: Invitarlos a comer donde el Tío Aceite" id="recompensa" name="recompensa">
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