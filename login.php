<?php
include 'db.php';
// Fetching values from the login form
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];

// Query to check if user exists in the database
$sql = "SELECT * FROM users WHERE name='$name' AND surname='$surname' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: home.php");
} else {
    echo "Invalid login credentials!";
}

$conn->close();
?>
