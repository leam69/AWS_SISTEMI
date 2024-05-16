<?php
include 'db.php';
session_start();
// Fetching values from the login form
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];

// Query to check if user exists in the database
$sql = "SELECT * FROM users WHERE name='$name' AND surname='$surname' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $_SESSION['username'] = $surname;
    $_SESSION['id'] = $row['id'];
    header("Location: home.php");
} else {
    echo "Invalid login credentials!";
}

$conn->close();
?>
