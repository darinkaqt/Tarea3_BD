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
      <?php } elseif($_GET["flag_mod"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> No puede cambiar el rol a un ayudante
                </div>
      </div>
      <?php } ?>
      <h5>Rellene casillas a modificar</h5>
        <br>
        <form action="../Formulario/form_mod_profesor_alumno.php" method="POST"> 
          <div class="form-group">
            <label for="rol">Rol:</label>
            <input type="text" class="form-control" placeholder="Ej: 201712309" id="rol" name="rol">
          </div>
        <br>
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="Ej: Brad" id="nombre" name="nombre">
          </div>

        <br>
          <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" placeholder="Ej: Pitt" id="apellido" name="apellido">
          </div>

        <br>
          <div class="form-group">
            <label for="contrasenia">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ej: Contraseña123" id="contrasenia" name="contrasenia">
          </div>
        <br>
          <div class="form-group">
            <label for="anio">Año de ingreso:</label>
            <input type="text" class="form-control" placeholder="Ej: 201712309" id="anio" name="anio">
          </div>
        <br>
        <button type="submit" class="btn btn-primary">Cambiar</button>
  </div>
  <div class="col-sm-1">
  </div>
</div>
<br>
<br>
<br>
<br>


</body>
</html>