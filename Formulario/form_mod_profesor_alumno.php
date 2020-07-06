<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rol = $_POST["rol"];
    if($rol == '') $rol = NULL;
    $nombre = $_POST["nombre"];
    if($nombre == '') $nombre = NULL;
    $apellido = $_POST["apellido"];
    if($apellido == '') $apellido = NULL;
    $contrasenia = $_POST["contrasenia"];
    if($contrasenia == '') $contrasenia = NULL;
    $anio_ing = $_POST["anio"];
    if($anio_ing == '') $anio_ing = NULL;

    $flagg = 0;
    $change_rol = 0;
    $flag_ayu = 0;

    $sql10 = 'SELECT * FROM ayudantia WHERE rolayudante = $1';
    $result10 = pg_query_params($dbconn, $sql10, array($_SESSION["rolcito"]));
    $row10 = pg_fetch_assoc($result10);

    if($row10){
        $flag_ayu = 1;
    }

    if($rol!=NULL){
        $sql = 'UPDATE alumno SET rolalumno = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolcito"], $rol));
        $_SESSION["rolcito"] = $rol;
        $change_rol = 1;
        $flagg = 1;
    }

    if($nombre!=NULL){
        $sql = 'UPDATE alumno SET nombre = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolcito"], $nombre));
        $flagg = 1;
    }
    
    if($apellido!=NULL){
        $sql = 'UPDATE alumno SET apellido = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolcito"], $apellido));
        $flagg = 1;
    }
    
    if($contrasenia!=NULL){
        $opciones = array('cost'=>12);
        $contrasenia_hasheada = password_hash($contrasenia, PASSWORD_BCRYPT, $opciones);
    
        $sql = 'UPDATE alumno SET contrasenia = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolcito"], $contrasenia_hasheada));
        $flagg = 1;
    }
    
    if($anio_ing!=NULL){
        $sql = 'UPDATE alumno SET anioingreso = $2 WHERE rolalumno = $1';
        pg_query_params($dbconn, $sql, array($_SESSION["rolcito"], $anio_ing));
        $flagg = 1;
    }

    pg_close($dbconn);

    if($change_rol == 1 && $flag_ayu == 1){
        header("Location: ../Profesor/l_alumno.php?flag_mod=3");
    }
    else if($flagg){
        header("Location: ../Profesor/l_alumno.php?flag_mod=1");
    }
    else{
        header("Location: ../Profesor/l_alumno.php?flag_mod=2");
    }
}
?>