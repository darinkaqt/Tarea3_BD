<?php 
session_start();
if(!isset($_SESSION["rolAlumno"])){
  header("Location: ../p_inicio.php");
}
?>