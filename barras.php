<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">

      <li class="nav-item">
      <?php if(basename(get_included_files()[0])=='inicio_estudiante.php' || basename(get_included_files()[0])=='inicio_profesor.php') { ?>
        <?php if($_SESSION["acceso"]==0 || $_SESSION["acceso"]==1) { ?>
      <a class="nav-link active" href="inicio_estudiante.php?flag_mod=0"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
        <?php } else if($_SESSION["acceso"]==2) { ?>
      <a class="nav-link active" href="inicio_profesor.php?flag_mod=0"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
        <?php } ?>
      <?php } else { ?>
        <?php if($_SESSION["acceso"]==0 || $_SESSION["acceso"]==1) { ?>
      <a class="nav-link" href="inicio_estudiante.php?flag_mod=0"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
        <?php } else if($_SESSION["acceso"]==2) { ?>
      <a class="nav-link" href="inicio_profesor.php?flag_mod=0"><img src="..\Imagenes\imagen63.jpg" width="30" height="30"> Inicio </a>
        <?php } ?>
      <?php } ?>
      </li>

      <li class="nav-item">
      <?php if(basename(get_included_files()[0])=='mod_estudiante.php' || basename(get_included_files()[0])=='mod_profesor.php') { ?>
        <?php if($_SESSION["acceso"]==0 || $_SESSION["acceso"]==1) { ?>
      <a class="nav-link active" href="mod_estudiante.php?flag_mod=0"> Modificar datos </a>
        <?php } else if($_SESSION["acceso"]==2) { ?>
      <a class="nav-link active" href="mod_profesor.php?flag_mod=0"> Modificar datos </a>
        <?php } ?>
      <?php } else { ?>
        <?php if($_SESSION["acceso"]==0 || $_SESSION["acceso"]==1) { ?>
      <a class="nav-link" href="mod_estudiante.php?flag_mod=0"> Modificar datos </a>
        <?php } else if($_SESSION["acceso"]==2) { ?>
      <a class="nav-link" href="mod_profesor.php?flag_mod=0"> Modificar datos </a>
        <?php } ?>
      <?php } ?>
      </li>

      <?php if($_SESSION["acceso"]==2) { ?>
      <li class="nav-item dropdown">
        <?php if(basename(get_included_files()[0])=='r_profesor.php' || basename(get_included_files()[0])=='r_ayudante.php') { ?>
      <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <?php } else { ?>
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <?php } ?>
        Registro
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="r_profesor.php?flag_mod=0">Registro Profesores</a>
        <a class="dropdown-item" href="r_ayudante.php?flag_mod=0">Registro Ayudantes</a>
      </div>
      </li>
      <?php } ?>

      <li class="nav-item">
      <?php if($_SESSION["acceso"]==2) { ?>
        <?php if(basename(get_included_files()[0])=='imparticion.php') { ?>
      <a class="nav-link active" href="imparticion.php?flag_mod=0"> Impartir</a>
        <?php } else { ?>
      <a class="nav-link" href="imparticion.php?flag_mod=0"> Impartir</a>
        <?php } ?>
      <?php } ?>
      </li>

      <li class="nav-item">
      <?php if($_SESSION["acceso"]==2) { ?>
        <?php if(basename(get_included_files()[0])=='l_alumno.php' || basename(get_included_files()[0])=='mod_profesor_alumno.php') { ?>
      <a class="nav-link active" href="l_alumno.php?flag_mod=0"> Alumnos</a>
        <?php } else { ?>
      <a class="nav-link" href="l_alumno.php?flag_mod=0"> Alumnos</a>
        <?php } ?>
      <?php } ?>
      </li>

      <li class="nav-item">
      <?php if($_SESSION["acceso"]==2) { ?>
        <?php if(basename(get_included_files()[0])=='l_ayudante.php') { ?>
      <a class="nav-link active" href="l_ayudante.php?flag_mod=0"> Ayudantes</a>
        <?php } else { ?>
      <a class="nav-link" href="l_ayudante.php?flag_mod=0"> Ayudantes</a>
        <?php } ?>
      <?php } ?>
      </li>

      <li class="nav-item dropdown">
      <?php if(basename(get_included_files()[0])=='l_mision.php' || basename(get_included_files()[0])=='t_misiones.php' || basename(get_included_files()[0])=='p_anadirmision.php' || basename(get_included_files()[0])=='p_estadomision.php' || basename(get_included_files()[0])=='p_recompensa.php') { ?>
        <?php if($_SESSION["acceso"]==1) { ?>
      <a class="nav-link active" href="t_misiones.php?flag_mod=0"> Misiones </a>
        <?php } else if($_SESSION["acceso"]==2) { ?>
      <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Misiones </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="p_anadirmision.php?flag_mod=0">Crear misiones</a>
        <a class="dropdown-item" href="l_mision.php?flag_mod=0">Lista de misiones</a>
        <a class="dropdown-item" href="p_estadomision.php?flag_mod=0">Cambiar estado de mision</a>
        <a class="dropdown-item" href="p_recompensa.php?flag_mod=0">Cambiar recompensa de la mision</a>
      </div>
        <?php } ?>
      <?php } else { ?>
        <?php if($_SESSION["acceso"]==1) { ?>
      <a class="nav-link" href="t_misiones.php?flag_mod=0"> Misiones </a>
        <?php } else if($_SESSION["acceso"]==2) { ?>
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Misiones </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="p_anadirmision.php?flag_mod=0">Crear misiones</a>
        <a class="dropdown-item" href="l_mision.php?flag_mod=0">Lista de misiones</a>
        <a class="dropdown-item" href="p_estadomision.php?flag_mod=0">Cambiar estado de mision</a>
        <a class="dropdown-item" href="p_recompensa.php?flag_mod=0">Cambiar recompensa de la mision</a>
      </div>
        <?php } ?>
      <?php } ?>
      </li>

      <li class="nav-item">
      <?php if($_SESSION["acceso"]==1) { ?>
        <?php if(basename(get_included_files()[0])=='p_asignarmision.php') { ?>
      <a class="nav-link active" href="p_asignarmision.php?flag_mod=0"> Asignar mision</a>
        <?php } else { ?>
      <a class="nav-link" href="p_asignarmision.php?flag_mod=0"> Asignar mision</a>
        <?php } ?>
      <?php } ?>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="..\cerrar_sesion.php"><img src="..\Imagenes\apagar3.jpg" width="30" height="30"> </a>
      </li>

    </ul>
  </div>  
</nav>