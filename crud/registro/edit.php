<?php
// Comprobar que $_POST['id] este declara y contenga 1 elemento correspondiente al ID.
if ( isset($_POST['id']) && count($_POST) === 1) {

    // Estableciendo conexión a la base de datos
    require_once('../../database/databaseConfig.php');

    extract($_POST);

    $sql = "SELECT * FROM registro WHERE cod_paciente = '$id'";
    $result = $conn->query($sql);
    $registro = $result->fetch_object();

    $conn->close();
}