<?php

session_start();

function isAuthenticated(){
    return isset($_SESSION['id']);
}

function goToLogin(){
    header('Location: index.php');
}


if(!isAuthenticated()){
    goToLogin();
    
}

$id = $_SESSION['id'];
$name = $_SESSION['username'];



?>