<?php include '../validar_sesion.php' ?>

<?php include '../headers.php' ?>
<?php include '../barrass.php' ?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    </div>
      <div class="col-sm-8">
          <?php if($_GET["flag_mod"]==1){ ?>
          <div class="container-sm">
                    <div class="alert alert-success">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    Sesion iniciada como alumno.
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==2){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El estudiante no se encuentra registrado.
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> No completo todos los datos.
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==4){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Contraseña incorrecta.
                    </div>
          </div>
          <?php } ?>
      <h3>Bienvenido estudiante!</h3>
      <br>
      <h5>Por favor ingrese sus datos para iniciar sesión</h5>
        <form action="../Formulario/form_ses_alumno.php" method="POST"> 
          <div class="form-group">
            <label for="rolAlumno">Ingrese su Rol:</label>
            <input type="text" class="form-control" placeholder="Ej: 202073012" id="rolAlumno" name="rolAlumno">
          </div>
          <div class="form-group">
            <label for="contrasenia">Ingrese su Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ej: contraseña" id="contrasenia" name="contrasenia">
          </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
  </div>
</div>
<br>
<br>
<br>
<br>

</body>
</html>