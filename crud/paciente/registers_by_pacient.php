<?php
// Comprobar que $_POST['id] este declara y contenga 1 elemento correspondiente al ID.
if ( isset($_POST['id']) && count($_POST) === 1) {

    // Estableciendo conexión a la base de datos
    require_once('../../database/databaseConfig.php');

    extract($_POST);

    $sql = "SELECT * FROM registro WHERE cod_paciente = '$id'";
    $result = $conn->query($sql);

    $registers = array();

    while($register = $result->fetch_object()) {
    $registers[] = $register;
}

    $conn->close();
}