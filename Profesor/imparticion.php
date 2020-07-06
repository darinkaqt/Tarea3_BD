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
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                El ramo no existe
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==2){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Debe ingresar un ramo
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==3){ ?>
      <div class="container-sm">
                <div class="alert alert-danger">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                <strong>Error:</strong> Usted ya imparte el ramo
                </div>
      </div>
      <?php } elseif($_GET["flag_mod"]==4){ ?>
      <div class="container-sm">
                <div class="alert alert-success">
                <button class="close" data-dismiss=alert><span>&times;</span></button>
                Asignado correctamente
                </div>
      </div>
      <?php } ?>
      
      <h3>Impartición</h3>
      <br>
      <form action="../Formulario/form_imparticion.php" method="POST">
        <h5>Ingrese los ramos que dicta</h5>
        <br>
          <div class="form-group">
            <label for="siglaramo">Sigla ramo:</label>
            <input type="text" class="form-control" placeholder="Ej: Brad" id="siglaramo" name="siglaramo">
          </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
  </div>
  <div class="col-sm-1">
  </div>
</div>
<br>
<br>
<br>
<br>