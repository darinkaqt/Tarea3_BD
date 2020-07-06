<?php include 'validar_alumno.php' ?>

<?php include '..\headers.php' ?>
<?php include '..\barras.php' ?>

<!-- Cuerpo -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
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
    <?php if($_SESSION["acceso"] == 0) { ?>
      <h3>Bienvenido Alumno<h3>
    <?php } else if($_SESSION["acceso"] == 1) { ?>
      <h3>Bienvenido Ayudante<h3>
    <?php } ?>
      <br>

<?php include '..\cuerpo.php' ?>