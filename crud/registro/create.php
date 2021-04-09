<?php
// Estableciendo conexión a la base de datos
require_once('../../database/databaseConfig.php');

// Comprobar que $_POST contenga 6 elementos correspondientes a las entradas del formulario.
if (count($_POST) === 6) {
    extract($_POST);
} else {
    die('Error al intentar crear un registro');
}

$sql = "INSERT INTO registro (empresa, fecha_ingreso, fecha_egreso, diagnostico_ingreso, diagnostico_egreso, cod_paciente) 
        VALUES ('$empresa', '$fecha_ingreso', '$fecha_egreso', '$diagnostico_ingreso', '$diagnostico_egreso', $cod_paciente)";
$result = $conn->query($sql);

if ($result === TRUE) {
    header("Location: ../../templates/operationMessage.html.php?action=create&result=success");
} else {
    header("Location: ../../templates/operationMessage.html.php?action=create&result=error");
}

$conn->close();