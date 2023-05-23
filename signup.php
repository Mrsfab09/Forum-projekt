<?php
session_start();

$db = mysqli_connect('localhost','root','','forum');
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    
    $pass = password_hash($password1,PASSWORD_DEFAULT);
    $zapytanie = mysqli_query($db,"INSERT INTO users (usersId,usersName,usersemail,usersPwd) VALUES(NULL,'$username','$email','$password1')");
    
    header('Location: index.php');
    
    mysqli_close($db);
?>