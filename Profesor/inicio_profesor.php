<?php include 'validar_profesor.php' ?>

<?php include '..\headers.php' ?>
<?php include '..\barras.php' ?>

<!-- Cuerpo -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-7">
    <?php if($_GET["flag_mod"]==1){ ?>
      <div class="container-sm">
        <div class="alert alert-success">
          <button class="close" data-dismiss=alert><span>&times;</span></button>
          Sesion iniciada!
        </div>
      </div>
    <?php } ?>
    <h3>Bienvenido Profesor<h3>
    <br>

<?php include '..\cuerpo.php' ?>