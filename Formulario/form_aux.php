<?php include '../db_config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rol = $_POST["alumn"];
    $_SESSION["rolcito"] = $rol;

    if(isset($_POST["modificar"])){
        header("Location: ../Profesor/mod_profesor_alumno.php?flag_mod=0");
    }
    else if(isset($_POST["eliminar"])){
        $sql10 = 'DELETE FROM ayudantia WHERE rolayudante = $1';
        $result10 = pg_query_params($dbconn, $sql10, array($_SESSION["rolcito"]));

        header("Location: ../Profesor/l_ayudante.php?flag_mod=3");
    }
}
?>