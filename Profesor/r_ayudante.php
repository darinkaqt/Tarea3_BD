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
                    Asignación exitosa!!
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==2){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Usted no imparte el ramo
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==3){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El ramo no existe
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==4){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El alumno no existe
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==5){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> El alumno ya es ayudante del ramo
                    </div>
          </div>
          <?php } elseif($_GET["flag_mod"]==6){ ?>
          <div class="container-sm">
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss=alert><span>&times;</span></button>
                    <strong>Error:</strong> Debe llenar todos los campos
                    </div>
          </div>
          <?php } ?>


      <h3>Registro de ayudantía!</h3>
      <br>
      <h5>Promueva alumno a ayudante</h5>
        <form action="..\Formulario\form_reg_ayudante.php" method="POST"> 
          <div class="form-group">
            <label for="idAyudantia">Ingrese id de ayudantía:</label>
            <input type="text" class="form-control" placeholder="Ej: Ayudantia1" id="idAyudantia" name="idAyudantia">
          </div>
          <div class="form-group">
            <label for="siglaramo">Ingrese sigla del ramo:</label>
            <input type="text" class="form-control" placeholder="Ej: INF155" id="siglaramo" name="siglaramo">
          </div>
          <div class="form-group">
            <label for="rolAlumno">Ingrese rol del ayudante:</label>
            <input type="text" class="form-control" placeholder="Ej: 202073012" id="rolAlumno" name="rolAlumno">
          </div>
          <div class="form-group">
            <label for="carga">Ingrese carga de ayudantía:</label>
            <input type="text" class="form-control" placeholder="Ej: 5" id="carga" name="carga">
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