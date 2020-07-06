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
                    El registro del estudiante fue exitoso!!
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==2){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El estudiante ya se encuentra registrado.
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Debe ingresar un rol para el estudiante y/o contraseña.
                    </div>
          </div>
          <?php } ?>
      <h3>Bienvenido estudiante!</h3>
      <br>
      <h5>Por favor ingrese sus datos para registrarse</h5>
        <form action="..\Formulario\form_reg_alumno.php" method="POST"> 
          <div class="form-group">
            <label for="rolAlumno">Ingrese su Rol:</label>
            <input type="text" class="form-control" placeholder="Ej: 202073012" id="rolAlumno" name="rolAlumno">
          </div>
          <div class="form-group">
            <label for="nombreAlumno">Ingrese Nombre:</label>
            <input type="text" class="form-control" placeholder="Ej: Juan" id="nombreAlumno" name="nombreAlumno">
          </div>
          <div class="form-group">
            <label for="apellidoAlumno">Ingrese apellido:</label>
            <input type="text" class="form-control" placeholder="Ej: Perez" id="apellidoAlumno" name="apellidoAlumno">
          </div>
          <div class="form-group">
            <label for="anioingreso">Ingrese su año de ingreso:</label>
            <input type="integer" class="form-control" placeholder="Ej: 2020" id="anioingreso" name="anioingreso">
          </div>
          <div class="form-group">
            <label for="contrasenia">Ingrese su contraseña:</label>
            <input type="password" class="form-control" placeholder="Ej: Contraseña123" id="contrasenia" name="contrasenia">
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