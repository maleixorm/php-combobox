<?php

$host = "localhost";
$user = "php";
$pass = 123456;
$db = "select";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    die("Falha na conexão! (" . $conn->connect_errno . ") " . $conn->connect_error);
}

?>