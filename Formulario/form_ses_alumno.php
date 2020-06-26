<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rolAlumno = $_POST["rolAlumno"];
    if($rolAlumno == '') $rolAlumno = NULL;
    $contrasenia = $_POST["contrasenia"];
    if($contrasenia == '') $contrasenia = NULL;
    //
    $sql_ver = 'SELECT rolalumno FROM Alumno WHERE rolalumno = $1';
    $result = pg_query_params($dbconn, $sql_ver, array($rolAlumno));
    $row = pg_fetch_row($result);

    if(($rolAlumno != NULL) && ($contrasenia != NULL)){
        if($row) {
            $pass_ver = 'SELECT contrasenia FROM Alumno WHERE rolalumno = $1';
            $pass_result = pg_query_params($dbconn, $pass_ver, array($rolAlumno));
            $pass_hasheada = pg_fetch_row($pass_result);
            
            if(password_verify($contrasenia, $pass_hasheada[0])){
                $acc_ver = 'SELECT rolayudante FROM Ayudantia WHERE rolayudante = $1';
                $acc_result = pg_query_params($dbconn, $acc_ver, array($rolAlumno));
                $_SESSION["acceso"] = pg_fetch_row($acc_result);
                pg_close($dbconn);

                $_SESSION["rolAlumno"] = $rolAlumno;

                header("Location: ../Estudiante/inicio_estudiante.php?flag_alumno=1");
            }
            else{
                pg_close($dbconn);
                header("Location: ../Estudiante/s_estudiante.php?flag_alumno=4");
            }

        }
        else{
            header("Location: ../Estudiante/s_estudiante.php?flag_alumno=2");
        }
    }
    else{
        header("Location: ../Estudiante/s_estudiante.php?flag_alumno=3");
    }
}
?>