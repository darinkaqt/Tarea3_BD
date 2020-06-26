<?php include 'db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rolAlumno = $_POST["rolAlumno"];
    if($rolAlumno == '') $rolAlumno = NULL;
    $nombreAlumno = $_POST["nombreAlumno"];
    if($nombreAlumno == '') $nombreAlumno = NULL;
    $apellidoAlumno = $_POST["apellidoAlumno"];
    if($apellidoAlumno == '') $apellidoAlumno = NULL;
    $anioingreso = $_POST["anioingreso"];
    if($anioingreso == '') $anioingreso = NULL;
    $contrasenia = $_POST["contrasenia"];
    if($contrasenia == '') $contrasenia = NULL;

    //
    $sql_ver = 'SELECT rolalumno FROM Alumno WHERE rolalumno = $1';
    $result = pg_query_params($dbconn, $sql_ver, array($rolAlumno));
    $row = pg_fetch_row($result);

    if(($rolAlumno != NULL) & ($contrasenia != NULL)){
        if(!$row) {
            $opciones = array('cost'=>12);
            $contrasenia_hasheada = password_hash($contrasenia, PASSWORD_BCRYPT, $opciones);
            password_verify($contrasenia, $contrasenia_hasheada);

            $sql = 'INSERT INTO Alumno (rolalumno, nombre, apellido, anioingreso, contrasenia) VALUES ($1, $2, $3, $4, $5)';
            pg_query_params($dbconn, $sql, array($rolAlumno,$nombreAlumno,$apellidoAlumno,$anioingreso,$contrasenia));
            pg_close($dbconn);
            header("Location: p_estudiante.php?flag_alumno=1");
        }
        else{
            header("Location: p_estudiante.php?flag_alumno=2");
        }
    }
    else{
        header("Location: p_estudiante.php?flag_alumno=3");
    }
}
?>