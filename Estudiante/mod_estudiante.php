<?php include 'validar_alumno.php' ?>

<?php include '../headers.php' ?>
<?php include '../barras.php' ?>

<!-- Cuerpo -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h4>¿Cambios?</h4>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <P ALIGN="justify"> Los cambios son buenos
        </li>
      </ul>
      <hr class="d-sm-none">
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
                <strong>Error:</strong> Ingrese datos para actualizar
                </div>
      </div>
      <?php } ?>
      <h3>Rellene los datos que quiera modificar</h3>
      <br>
        <form action="../Formulario/form_mod_alumno.php" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="Ej: Brad" id="nombre" name="nombre">
          </div>

        <br><br>
        <form action="../Formulario/form_mod_alumno.php" method="POST">
          <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" placeholder="Ej: Pitt" id="apellido" name="apellido">
          </div>

        <br><br>
        <form action="../Formulario/form_mod_alumno.php" method="POST">
          <div class="form-group">
            <label for="contrasenia">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ej: Contraseña123" id="contrasenia" name="contrasenia">
          </div>
        <button type="submit" class="btn btn-primary">Cambiar</button>
  </div>
</div>
<br>
<br>
<br>
<br>


</body>
</html>