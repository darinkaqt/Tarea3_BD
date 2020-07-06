<?php 
session_start();
if(!isset($_SESSION["idProfesor"])){
  header("Location: ../p_inicio.php");
}
?>