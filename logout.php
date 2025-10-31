<?php

session_start();
require_once "./utilFunctions.php";
if( $_SESSION['Username'] == null){
    echo "You must be logged in to access this page. Please click  <a href ='./login.php'> this link </a> to login.";
    exit;
}
session_destroy();
header("Location: index.php");
exit;
?>