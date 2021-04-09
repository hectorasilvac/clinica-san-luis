<?php
// Estableciendo conexión a la base de datos
require_once('../../database/databaseConfig.php');

$sql = "SELECT * FROM paciente";
$result = $conn->query($sql);

$patients = array();

while($patient = $result->fetch_object()) {
    $patients[] = $patient;
}

$conn->close();