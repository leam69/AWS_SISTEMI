<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include "db.php";
    
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
 $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  
  $sql = "SELECT id, name, surname, password FROM users WHERE name ='$name' AND surname='$surname' AND password='$password'";


  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Successful login
    session_start();  
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $surname;


    header('Location: home.php');
    exit;
  } else {

    echo "Invalid username or password, go back to". "<a href='index.php'>login</a>... ";
  }


  if (isset($result)) {
    $result->close();
  }
}
?>
