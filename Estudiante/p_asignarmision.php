<?php include 'validar_alumno.php' ?>

<?php include '..\headers.php' ?>
<?php include '..\barras.php' ?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h4>¿Estás motivado?</h4>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <p> Es hora de que ayudes a un estudiante!
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <?php if($_GET["flag_mod"]==1){ ?>
      <div class="container-sm">
                <div class="alert alert-success">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                La misión fue asignada correctamente!!
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> La misión no está registrada.
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> el idAyudantia no te pertenece
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==4){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Asignación ya registrada
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==5){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Los campos son obligatorios.
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==6){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> No puedes ser tu propio ayudante.
                </div>
      </div>
      <?php } ?>
      <h3>Asignate una misión!</h3>
      <br>
      <h5>Por favor ingrese los siguientes datos:</h5>
          <form action="../Formulario/form_asignarmision.php" method ="POST">
          <div class="form-group">
            <label for="idMision">Id de la misión:</label>
            <input type="text" class="form-control" placeholder="Ej: 12345" id="idMision" name="idMision">
          </div>
          <div class="form-group">
            <label for="idAyudantia">Id de la ayudantia:</label>
            <input type="text" class="form-control" placeholder="Ej: 12345" id="idAyudantia" name="idAyudantia">
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