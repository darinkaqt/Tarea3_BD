<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProfesor = $_POST["idProfesor"];
    if($idProfesor == '') $idProfesor = NULL;
    $nombreProfesor = $_POST["nombreProfesor"];
    if($nombreProfesor == '') $nombreProfesor = NULL;
    $apellidoProfesor = $_POST["apellidoProfesor"];
    if($apellidoProfesor == '') $apellidoProfesor = NULL;
    $especialidad = $_POST["especialidad"];
    if($especialidad == '') $especialidad = NULL;
    //
    
    if($idProfesor != NULL){
        $sql_ver = 'SELECT idprofesor FROM Profesor WHERE idprofesor = $1';
        $result = pg_query_params($dbconn, $sql_ver, array($idProfesor));
        $row = pg_fetch_row($result);

        if(!$row) {
            $sql = 'INSERT INTO Profesor (idprofesor, nombre, apellido, especialidad) VALUES ($1, $2, $3, $4)';
            pg_query_params($dbconn, $sql, array($idProfesor,$nombreProfesor,$apellidoProfesor,$especialidad));
            pg_close($dbconn);
            header("Location: p_profesor.php?flag_profesor=1");
        } else {
            header("Location: p_profesor.php?flag_profesor=2");
        } 
    }
    else{
        header("Location: p_profesor.php?flag_profesor=3");
    }
}
?>