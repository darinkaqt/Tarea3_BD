<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idAlumno = $_POST["idAlumno"];
    if($idAlumno == '') $idAlumno = NULL;
    $descripcion = $_POST["descripcion"];
    if($descripcion == '') $descripcion = NULL;
    $recompensa = $_POST["recompensa"];
    if($recompensa == '') $recompensa = NULL;
    
    if($idAlumno !== NULL){
        $sql_2 = 'SELECT rolalumno FROM Alumno WHERE rolalumno = $1';
        $result2 = pg_query_params($dbconn, $sql_2, array($idAlumno));
        $alum_row = pg_fetch_row($result2);

        if($alum_row){
            $sql = 'INSERT INTO Mision (idprofesor,idalumno,descripcion,recompensa,estado) VALUES ($1, $2, $3, $4, $5)';
            pg_query_params($dbconn, $sql, array($_SESSION["idProfesor"],$idAlumno,$descripcion,$recompensa,0));

            $sql_id= 'SELECT * FROM Mision';
            $result_id = pg_query($dbconn, $sql_id);
            if(pg_num_rows($result_id) > 0 ){
                while($row_id = pg_fetch_assoc($result_id)){
                    $id_mis=$row_id["idmision"];
                }
            }
            pg_close($dbconn);
            header("Location: ../Profesor/p_anadirmision.php?flag_mod=1&id_mision=$id_mis");
        }
        else{
            pg_close($dbconn);
            header("Location: ../Profesor/p_anadirmision.php?flag_mod=2");
        }
    }
    else{
        header("Location: ../Profesor/p_anadirmision.php?flag_mod=3");
    }
}
?>