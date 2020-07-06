<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idMision = $_POST["idMision"];
    if($idMision == '') $idMision = NULL;
    $idAyudantia = $_POST["idAyudantia"];
    if($idAyudantia == '') $idAyudantia = NULL;
    
    if($idMision !== NULL && $idAyudantia !== NULL){
        $sql_1 = 'SELECT idmision FROM Mision WHERE idmision = $1';
        $result1 = pg_query_params($dbconn, $sql_1, array($idMision));
        $row1 = pg_fetch_row($result1);

        $sql_2 = 'SELECT idayudantia FROM Ayudantia WHERE (rolayudante = $1 and idayudantia = $2)';
        $result2 = pg_query_params($dbconn, $sql_2, array($_SESSION["rolAlumno"], $idAyudantia));
        $row2 = pg_fetch_row($result2);

        $sql_3 = 'SELECT * FROM Asignacion WHERE (idayudantia = $1 and idmision = $2)';
        $result3 = pg_query_params($dbconn, $sql_3, array($idAyudantia, $idMision));
        $row3 = pg_fetch_row($result3);

        if(!$row3){
            if($row2){
                if($row1){
                    $sql = 'INSERT INTO Asignacion(idayudantia,idmision) VALUES ($1, $2)';
                    pg_query_params($dbconn, $sql, array($idAyudantia, $idMision));
                    pg_close($dbconn);
                    header("Location: ../Estudiante/p_asignarmision.php?flag_asignarmision=1");
                }
                else{
                    pg_close($dbconn);
                    header("Location: ../Estudiante/p_asignarmision.php?flag_asignarmision=2");
                }
            }
            else{
                pg_close($dbconn);
                header("Location: ../Estudiante/p_asignarmision.php?flag_asignarmision=3");
            }
        }
        else{
            pg_close($dbconn);
            header("Location: ../Estudiante/p_asignarmision.php?flag_asignarmision=4");
        }
    }
    else{
        header("Location: ../Estudiante/p_asignarmision.php?flag_asignarmision=5");
    }
}
?>