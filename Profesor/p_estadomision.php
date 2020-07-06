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
                    <?php $str=$_GET["est"];?>
                    <strong>Cambiado!</strong> La misión está <?php echo $str?>.
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
                    <strong>Error:</strong> Debe agregar el id Misión
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==4){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Usted no creo la mision
                    </div>
          </div>
          <?php } ?>

      <h3>Modificar estado de una misión</h3>
      <br>
      <h5>Por favor ingrese el siguiente dato:</h5>
          <form action="../Formulario/form_estadomision.php" method="POST">
          <div class="form-group">
            <label for="idMision">Id de la misión:</label>
            <input type="text" class="form-control" placeholder="Ej: 12345" id="idMision" name="idMision">
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