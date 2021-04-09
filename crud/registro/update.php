<?php
// Estableciendo conexión a la base de datos
require_once('../../database/databaseConfig.php');

// Comprobar que $_POST contenga 7 elementos correspondientes a las entradas del formulario.
if (count($_POST) === 7) {
    extract($_POST);
} else {
    die('Error al intentar actualizar un registro');
}

$sql = "UPDATE registro
        SET empresa = '$empresa',
            fecha_ingreso = '$fecha_ingreso',
            fecha_egreso = '$fecha_egreso',
            diagnostico_ingreso = '$diagnostico_ingreso',
            diagnostico_egreso = '$diagnostico_egreso'
        WHERE registro = $registro";
$result = $conn->query($sql);

if ($result === TRUE) {
    header("Location: ../../templates/operationMessage.html.php?action=update&result=success");
} else {
    print_r($conn->error);
    // header("Location: ../../templates/operationMessage.html.php?action=update&result=error");
}

$conn->close();