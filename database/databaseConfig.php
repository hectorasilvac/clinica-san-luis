<?php

$servername = '45.13.252.1';
$username = 'u645311621_hasc';
$password = '#Ector9611171';
$dbname = 'u645311621_merkarco';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Conexión fallida: {$conn->connect_error}");
}
