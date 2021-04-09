<?php
// Estableciendo conexión a la base de datos
require_once('../../database/databaseConfig.php');

// Comprobar que $_POST contenga 6 elementos correspondientes a las entradas del formulario.
if (count($_POST) === 6) {
    extract($_POST);
} else {
    die('Error al intentar registrar un paciente');
}

$sql = "UPDATE paciente
        SET cedula = $cedula,
            nombre = '$nombre',
            apellidos = '$apellidos',
            direccion = '$direccion',
            telefono = '$telefono'
        WHERE cod_paciente = $cod_paciente";
$result = $conn->query($sql);

if ($result === TRUE) {
    header("Location: ../../templates/operationMessage.html.php?action=update&result=success");
} else {
    header("Location: ../../templates/operationMessage.html.php?action=update&result=error");
}

$conn->close();