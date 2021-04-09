<?php
// Estableciendo conexión a la base de datos
require_once('../../database/databaseConfig.php');

// Comprobar que $_POST['id] este declara y contenga 1 elemento correspondiente al ID.
if ( isset($_POST['id']) && count($_POST) === 1) {
    extract($_POST);
} else {
    die('Error al intentar eliminar el registro.');
}

$sql = "DELETE FROM registro WHERE registro = $id";
$result = $conn->query($sql);

$message = new stdClass();

if ($result === TRUE) {
    header("Location: ../../templates/operationMessage.html.php?action=delete&result=success");
} else {
    header("Location: ../../templates/operationMessage.html.php?action=delete&result=error");
}

$conn->close();