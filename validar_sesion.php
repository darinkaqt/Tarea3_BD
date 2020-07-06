<?php 
session_start();
if(isset($_SESSION["rolAlumno"])){
    header("Location: Estudiante/inicio_estudiante.php?flag_mod=0");
}
if(isset($_SESSION["idProfesor"])){
    header("Location: Profesor/inicio_profesor.php?flag_mod=0");
}
?>