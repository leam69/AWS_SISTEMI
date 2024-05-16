<?php
$name = "db";
$username = "gabriele";
$password = "fanti";
$dbname = "sitodb";

$conn = new mysqli($name, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


?>
