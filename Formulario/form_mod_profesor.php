<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    if($nombre == '') $nombre = NULL;
    $apellido = $_POST["apellido"];
    if($apellido == '') $apellido = NULL;
    $especialidad = $_POST["especialidad"];
    if($especialidad == '') $especialidad = NULL;
    $contrasenia = $_POST["contrasenia"];
    if($contrasenia == '') $contrasenia = NULL;

    $flagg = 0;

    if($nombre!=NULL){
        $sql = 'UPDATE profesor SET nombre = $2 WHERE idprofesor = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["idProfesor"], $nombre));
        $flagg = 1;
    }

    if($apellido!=NULL){
        $sql = 'UPDATE profesor SET apellido = $2 WHERE idprofesor = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["idProfesor"], $apellido));
        $flagg = 1;
    }

    if($especialidad!=NULL){
        $sql = 'UPDATE profesor SET especialidad = $2 WHERE idprofesor = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["idProfesor"], $especialidad));
        $flagg = 1;
    }

    if($contrasenia!=NULL){
        $opciones = array('cost'=>12);
        $contrasenia_hasheada = password_hash($contrasenia, PASSWORD_BCRYPT, $opciones);

        $sql = 'UPDATE profesor SET contrasenia = $2 WHERE idprofesor = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["idProfesor"], $contrasenia_hasheada));
        $flagg = 1;
    }

    pg_close($dbconn);

    if($flagg){
        header("Location: ../Profesor/mod_profesor.php?flag_mod=1");
    }
    else{
        header("Location: ../Profesor/mod_profesor.php?flag_mod=2");
    }
}
?>