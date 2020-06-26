<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idMision = $_POST["idMision"];
    if($idMision == '') $idMision = NULL;
    $rolAyudante = $_POST["rolAyudante"];
    if($rolAyudante == '') $rolAyudante = NULL;
    
    if($idMision !== NULL && $rolAyudante !== NULL){
        $sql_1 = 'SELECT idmision FROM Mision WHERE idmision = $1';
        $result1 = pg_query_params($dbconn, $sql_1, array($idMision));
        $row1 = pg_fetch_row($result1);

        $sql_2 = 'SELECT rolayudante FROM Ayudante WHERE rolayudante = $1';
        $result2 = pg_query_params($dbconn, $sql_2, array($rolAyudante));
        $row2 = pg_fetch_row($result2);

        if($row1 && $row2){
            $sql = 'INSERT INTO Asignacion(rolayudante,idmision) VALUES ($1, $2)';
            pg_query_params($dbconn, $sql, array($rolAyudante, $idMision));
            pg_close($dbconn);
            header("Location: p_asignarmision.php?flag_asignarmision=1");
        }
        else{
            pg_close($dbconn);
            header("Location: p_asignarmision.php?flag_asignarmision=2");
        }
    }
    else{
        header("Location: p_asignarmision.php?flag_asignarmision=3");
    }
}
?>