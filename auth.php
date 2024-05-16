<?php

session_start();

function isAuthenticated(){
    return isset($_SESSION['surname']);
}

function goToLogin(){
    header('Location: index.php');
}


if(!isAuthenticated()){
    goToLogin();
    
}



?>
