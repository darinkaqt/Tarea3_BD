<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idMision = $_POST["idMision"];

    $sql_2 = 'SELECT * FROM Mision WHERE idmision = $1';
    $result2 = pg_query_params($dbconn, $sql_2, array($idMision));
    $row2 = pg_fetch_all($result2);

    if($idMision){
        if($row2[0]!==NULL){
            if($row2[0]["idprofesor"] == $_SESSION["idProfesor"]){
                if ($row2[0]['estado'] == 0){
                    $valor=1;
                    $string='completa';
                }
                else if ($row2[0]['estado'] == 1){
                    $valor=0;
                    $string='incompleta';
                }
                $sql = 'UPDATE Mision SET estado = $2 WHERE idmision = $1';
                pg_query_params($dbconn, $sql, array($idMision, $valor));
                pg_close($dbconn);
                header("Location: ../Profesor/p_estadomision.php?flag_mod=1&est=$string");
            }
            else{
                pg_close($dbconn); 
                header("Location: ../Profesor/p_estadomision.php?flag_mod=4");
            }
        }
        else{
            pg_close($dbconn); 
            header("Location: ../Profesor/p_estadomision.php?flag_mod=2");
        }
    }
    else{
        pg_close($dbconn); 
        header("Location: ../Profesor/p_estadomision.php?flag_mod=3");
    }
}
?>