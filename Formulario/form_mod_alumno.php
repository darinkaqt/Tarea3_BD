<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    if($nombre == '') $nombre = NULL;
    $apellido = $_POST["apellido"];
    if($apellido == '') $apellido = NULL;
    $contrasenia = $_POST["contrasenia"];
    if($contrasenia == '') $contrasenia = NULL;

    $flagg = 0;

    if($nombre!=NULL){
        $sql = 'UPDATE alumno SET nombre = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolAlumno"], $nombre));
        $flagg = 1;
    }

    if($apellido!=NULL){
        $sql = 'UPDATE alumno SET apellido = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolAlumno"], $apellido));
        $flagg = 1;
    }

    if($contrasenia!=NULL){
        $opciones = array('cost'=>12);
        $contrasenia_hasheada = password_hash($contrasenia, PASSWORD_BCRYPT, $opciones);

        $sql = 'UPDATE alumno SET contrasenia = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolAlumno"], $contrasenia_hasheada));
        $flagg = 1;
    }

    pg_close($dbconn);

    if($flagg){
        header("Location: ../Estudiante/mod_estudiante.php?flag_mod=1");
    }
    else{
        header("Location: ../Estudiante/mod_estudiante.php?flag_mod=2");
    }
}
?>