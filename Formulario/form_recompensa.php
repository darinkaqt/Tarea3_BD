<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idMision = $_POST["idMision"];
    if($idMision == '') $idMision = NULL;
    $recompensa = $_POST["recompensa"];
    if($recompensa == '') $recompensa = NULL;
    
    if($idMision !== NULL && $recompensa !== NULL){
        $sql_1 = 'SELECT idprofesor FROM Mision WHERE idmision = $1';
        $result1 = pg_query_params($dbconn, $sql_1, array($idMision));
        $idmision_row = pg_fetch_row($result1);

        if($idmision_row){
            if($idmision_row[0] == $_SESSION["idProfesor"]){
                $sql = 'UPDATE Mision SET recompensa = $2 WHERE idmision = $1';
                pg_query_params($dbconn, $sql, array($idMision, $recompensa));
                pg_close($dbconn);
                header("Location: ../Profesor/p_recompensa.php?flag_mod=1");
            }
            else{
                pg_close($dbconn);
                header("Location: ../Profesor/p_recompensa.php?flag_mod=4");
            }
        }
        else{
            pg_close($dbconn);
            header("Location: ../Profesor/p_recompensa.php?flag_mod=2");
        }
    }
    else{
        header("Location: ../Profesor/p_recompensa.php?flag_mod=3");
    }
}
?>