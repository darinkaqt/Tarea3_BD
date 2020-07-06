<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProfesor = $_POST["idProfesor"];
    if($idProfesor == '') $idProfesor = NULL;
    $contrasenia = $_POST["contrasenia"];
    if($contrasenia == '') $contrasenia = NULL;
    //
    $sql_ver = 'SELECT idprofesor FROM Profesor WHERE idprofesor = $1';
    $result = pg_query_params($dbconn, $sql_ver, array($idProfesor));
    $row = pg_fetch_row($result);

    if(($idProfesor != NULL) && ($contrasenia != NULL)){
        if($row) {
            $pass_ver = 'SELECT contrasenia FROM Profesor WHERE idprofesor = $1';
            $pass_result = pg_query_params($dbconn, $pass_ver, array($idProfesor));
            $pass_hasheada = pg_fetch_row($pass_result);
            
            if(password_verify($contrasenia, $pass_hasheada[0])){
                pg_close($dbconn);

                $_SESSION["idProfesor"] = $idProfesor;

                header("Location: ../Profesor/inicio_profesor.php?flag_alumno=1");
            }
            else{
                pg_close($dbconn);
                header("Location: ../Profesor/s_profesor.php?flag_alumno=4");
            }

        }
        else{
            header("Location: ../Profesor/s_profesor.php?flag_alumno=2");
        }
    }
    else{
        header("Location: ../Profesor/s_profesor.php?flag_alumno=3");
    }
}
?>