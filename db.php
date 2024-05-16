<?php
$name = "localhost:3306";
$username = "root";
$password = "";
$dbname = "progetto";


$conn = new mysqli($name, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


?>
