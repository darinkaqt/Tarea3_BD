<?php include 'db_config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rolAyudante = $_POST["rolAyudante"];
    if($rolAyudante == '') $rolAyudante = NULL;
    $nombreAyudante = $_POST["nombreAyudante"];
    if($nombreAyudante == '') $nombreAyudante = NULL;
    $apellidoAyudante = $_POST["apellidoAyudante"];
    if($apellidoAyudante == '') $apellidoAyudante = NULL;
    $cantidadSemestres = $_POST["cantidadSemestres"];
    if($cantidadSemestres == '') $cantidadSemestres = NULL;
    //
    $sql_ver = 'SELECT rolayudante FROM Ayudante WHERE rolayudante = $1';
    $result = pg_query_params($dbconn, $sql_ver, array($rolAyudante));
    $row = pg_fetch_row($result);

    if($rolAyudante != NULL){
        if(!$row) {
            $sql = 'INSERT INTO Ayudante (rolayudante, nombre, apellido, cantidadsemestres) VALUES ($1, $2, $3, $4)';
            pg_query_params($dbconn, $sql, array($rolAyudante,$nombreAyudante,$apellidoAyudante,$cantidadSemestres));
            pg_close($dbconn);
            header("Location: p_ayudante.php?flag_ayudante=1");
        } else {
            header("Location: p_ayudante.php?flag_ayudante=2");
        }
    }
    else{
        header("Location: p_ayudante.php?flag_ayudante=3");
    }
}
?>