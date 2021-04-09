<?php
// Estableciendo conexión a la base de datos
require_once('../../database/databaseConfig.php');

// Comprobar que $_POST contenga 5 elementos correspondientes a las entradas del formulario.
if (count($_POST) === 5) {
    extract($_POST);
} else {
    die('Error al intentar registrar un paciente');
}

$sql = "INSERT INTO paciente (cedula, nombre, apellidos, direccion, telefono) 
        VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$telefono')";
$result = $conn->query($sql);

if ($result === TRUE) {
    header("Location: ../../templates/operationMessage.html.php?action=create&result=success");
} else {
    header("Location: ../../templates/operationMessage.html.php?action=create&result=error");
}

$conn->close();