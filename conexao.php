<?php

$host = "localhost";
$db = "select";
$user = "php";
$pass = 123456;

$conn = new mysqli($host, $$user, $pass, $db);

if ($conn->connect_errno) {
    die("Falha na conexão! (" . $conn->connect_errno . ") " . $conn->connect_error);
}

?>