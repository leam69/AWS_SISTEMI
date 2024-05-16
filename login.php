<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include "db.php";
    
  
  $name = $_POST['name'];
 $surname = $_POST['surname'];
  $password = $_POST['password'];

  
  $sql = "SELECT id, name, surname, password FROM users WHERE name ='$name' AND surname='$surname' AND password='$password'";


  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Successful login
    session_start();  
    $_SESSION['id'] = $row['id'];
    $_SESSION['surname'] = $surname;


    header('Location: home.php');
    
  } else {

    echo "Invalid username or password, go back to ". "<a href='index.php'>login</a>... ";
  }


  
    $conn->close();

}
?>
