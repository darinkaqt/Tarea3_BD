<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProfesor = $_POST["idProfesor"];
    if($idProfesor == '') $idProfesor = NULL;
    $idAlumno = $_POST["idAlumno"];
    if($idAlumno == '') $idAlumno = NULL;
    $descripcion = $_POST["descripcion"];
    if($descripcion == '') $descripcion = NULL;
    $recompensa = $_POST["recompensa"];
    if($recompensa == '') $recompensa = NULL;
    
    if($idProfesor !== NULL && $idAlumno !== NULL){
        $sql_1 = 'SELECT idprofesor FROM Profesor WHERE idprofesor = $1';
        $result1 = pg_query_params($dbconn, $sql_1, array($idProfesor));
        $row1 = pg_fetch_row($result1);

        $sql_2 = 'SELECT rolalumno FROM Alumno WHERE rolalumno = $1';
        $result2 = pg_query_params($dbconn, $sql_2, array($idAlumno));
        $row2 = pg_fetch_row($result2);

        if($row1 && $row2){
            $sql = 'INSERT INTO Mision (idprofesor,idalumno,descripcion,recompensa,estado) VALUES ($1, $2, $3, $4, $5)';
            pg_query_params($dbconn, $sql, array($idProfesor,$idAlumno,$descripcion,$recompensa,0));

            $sql_id= 'SELECT * FROM Mision';
            $result_id = pg_query($dbconn, $sql_id);
            if(pg_num_rows($result_id) > 0 ){
                while($row_id = pg_fetch_assoc($result_id)){
                    $id_mis=$row_id["idmision"];
                }
            }
            pg_close($dbconn);
            header("Location: p_anadirmision.php?flag_anadirmision=1&id_mision=$id_mis");
        }
        else{
            pg_close($dbconn);
            header("Location: p_anadirmision.php?flag_anadirmision=2");
        }
    }
    else{
        header("Location: p_anadirmision.php?flag_anadirmision=3");
    }
}
?>