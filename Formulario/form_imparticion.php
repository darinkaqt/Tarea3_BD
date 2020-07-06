<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $siglaramo = $_POST["siglaramo"];
    if($siglaramo == '') $siglaramo = NULL;

    $flagg = 0;

    $sql_ver = 'SELECT siglaramo FROM Ramo WHERE siglaramo = $1';
    $result = pg_query_params($dbconn, $sql_ver, array($siglaramo));
    $ramo = pg_fetch_row($result);

    $sql_ver2 = 'SELECT * FROM Imparticion WHERE (idprofesor = $1 and siglaramo = $2)';
    $result2 = pg_query_params($dbconn, $sql_ver2, array($_SESSION["idProfesor"], $siglaramo));
    $inter = pg_fetch_row($result2);

    if($siglaramo!=NULL){
        if($ramo){
            if(!$inter){
                $sql = 'INSERT INTO Imparticion (idProfesor, siglaramo) VALUES ($1, $2)';
                pg_query_params($dbconn, $sql, array($_SESSION["idProfesor"], $siglaramo));
                pg_close($dbconn);
                header("Location: ../Profesor/imparticion.php?flag_mod=4");
            }
            else{
                pg_close($dbconn);
                header("Location: ../Profesor/imparticion.php?flag_mod=3");
            }
        }
        else{
            pg_close($dbconn);
            header("Location: ../Profesor/imparticion.php?flag_mod=1");
        }
    }
    else{
        pg_close($dbconn);
        header("Location: ../Profesor/imparticion.php?flag_mod=2");
    }    

}
?>