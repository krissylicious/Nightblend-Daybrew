<?php
include "conn.php";
session_start();

//for login

if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $password=$_POST['pass'];
    
}
?>