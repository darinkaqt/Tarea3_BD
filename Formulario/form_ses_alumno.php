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
                $aux = pg_fetch_row($acc_result);
                pg_close($dbconn);
                
                if($aux) $_SESSION["acceso"] = 1; //ayudante
                else $_SESSION["acceso"] = 0; //alumno

                $_SESSION["rolAlumno"] = $rolAlumno;

                header("Location: ../Estudiante/inicio_estudiante.php?flag_mod=1");
            }
            else{
                pg_close($dbconn);
                header("Location: ../Estudiante/s_estudiante.php?flag_mod=4");
            }
        }
        else{
            header("Location: ../Estudiante/s_estudiante.php?flag_mod=2");
        }
    }
    else{
        header("Location: ../Estudiante/s_estudiante.php?flag_mod=3");
    }
}
?>