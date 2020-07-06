<?php include 'validar_profesor.php' ?>

<?php include '..\headers.php' ?>
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
                    <?php $idp=$_GET["id_p"];?>
                    El registro del profesor fue exitoso!!<br>Su ID es: <?php echo $idp?>
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Rellene los campos vacíos.
                    </div>
          </div>
          <?php } ?>


      <h3>Bienvenido profesor!</h3>
      <br>
      <h5>Por favor ingrese los datos del profesor a registrar</h5>
        <form action="..\Formulario\form_reg_profesor.php" method="POST"> 
          <div class="form-group">
            <label for="nombre">Ingrese Nombre:</label>
            <input type="text" class="form-control" placeholder="Ej: Juan" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="apellido">Ingrese apellido:</label>
            <input type="text" class="form-control" placeholder="Ej: Perez" id="apellido" name="apellido">
          </div>
          <div class="form-group">
            <label for="especialidad">Ingrese su especialidad:</label>
            <input type="integer" class="form-control" placeholder="Ej: inteligencia artificial" id="especialidad" name="especialidad">
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