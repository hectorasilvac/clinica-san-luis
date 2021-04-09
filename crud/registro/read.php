<?php
// Estableciendo conexión a la base de datos
require_once('../../database/databaseConfig.php');

$sql = "SELECT * FROM registro";
$result = $conn->query($sql);

$registers = array();

while($register = $result->fetch_object()) {
    $registers[] = $register;
}

$conn->close();