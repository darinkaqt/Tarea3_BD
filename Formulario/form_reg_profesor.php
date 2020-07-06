<?php include '../db_config.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    if($nombre == '') $nombre = NULL;
    $apellido = $_POST["apellido"];
    if($apellido == '') $apellido = NULL;
    $especialidad = $_POST["especialidad"];
    if($especialidad == '') $especialidad = NULL;
    $contrasenia = $_POST["contrasenia"];
    if($contrasenia == '') $contrasenia = NULL;


    if(($nombre != NULL) && ($contrasenia != NULL)){
        $opciones = array('cost'=>12);
        $contrasenia_hasheada = password_hash($contrasenia, PASSWORD_BCRYPT, $opciones);

        $sql = 'INSERT INTO Profesor (nombre, apellido, especialidad, contrasenia) VALUES ($1, $2, $3, $4)';
        pg_query_params($dbconn, $sql, array($nombre,$apellido,$especialidad,$contrasenia_hasheada));

        $sql_id= 'SELECT * FROM Profesor';
        $result_id = pg_query($dbconn, $sql_id);
        if(pg_num_rows($result_id) > 0 ){
            while($row_id = pg_fetch_assoc($result_id)){
                $id_pro=$row_id["idprofesor"];
            }
        }
        pg_close($dbconn);
        header("Location: ../Profesor/r_profesor.php?flag_mod=1&id_p=$id_pro");
    }
    else{
        header("Location: ../Profesor/r_profesor.php?flag_mod=3");
    }
}
?>