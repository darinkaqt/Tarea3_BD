<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idAyudantia = $_POST["idAyudantia"];
    if($idAyudantia == '') $idAyudantia = NULL;
    $siglaramo = $_POST["siglaramo"];
    if($siglaramo == '') $siglaramo = NULL;
    $rolAlumno = $_POST["rolAlumno"];
    if($rolAlumno == '') $rolAlumno = NULL;
    $carga = $_POST["carga"];
    if($carga == '') $carga = NULL;

    $flagg = 0;

    $sql_ver = 'SELECT rolalumno FROM Alumno WHERE rolalumno = $1';
    $result = pg_query_params($dbconn, $sql_ver, array($rolAlumno));
    $ayud = pg_fetch_row($result);

    $sql_ver1 = 'SELECT siglaRamo FROM Ramo WHERE siglaRamo = $1';
    $result1 = pg_query_params($dbconn, $sql_ver1, array($siglaramo));
    $ramo = pg_fetch_row($result1);

    $sql_ver2 = 'SELECT * FROM Imparticion WHERE (idprofesor = $1 and siglaramo = $2)';
    $result2 = pg_query_params($dbconn, $sql_ver2, array($_SESSION["idProfesor"], $siglaramo));
    $inter = pg_fetch_row($result2);

    $sql_ver3 = 'SELECT * FROM Ayudantia WHERE (rolayudante = $1 and siglaramo = $2)';
    $result3 = pg_query_params($dbconn, $sql_ver3, array($rolAlumno, $siglaramo));
    $existe = pg_fetch_row($result3);

    if($idAyudantia && $siglaramo && $rolAlumno && $carga){
        if(!$existe){
            if($ayud){
                if($ramo){
                    if($inter){
                        $sql = 'INSERT INTO Ayudantia (idayudantia, rolayudante, siglaramo, carga) VALUES ($1,$2,$3,$4)';
                        pg_query_params($dbconn, $sql, array($idAyudantia,$rolAlumno,$siglaramo,$carga));
                        pg_close($dbconn);
                        header("Location: ../Profesor/r_ayudante.php?flag_mod=1");
                    }
                    else{
                        pg_close($dbconn);
                        header("Location: ../Profesor/r_ayudante.php?flag_mod=2");
                    }
                }
                else{
                    pg_close($dbconn);
                    header("Location: ../Profesor/r_ayudante.php?flag_mod=3");
                }
            }
            else{
                pg_close($dbconn);
                header("Location: ../Profesor/r_ayudante.php?flag_mod=4");
            }
        }
        else{
            pg_close($dbconn);
            header("Location: ../Profesor/r_ayudante.php?flag_mod=5");
        }
    }
    else{
        pg_close($dbconn);
        header("Location: ../Profesor/r_ayudante.php?flag_mod=6");        
    }
}
?>