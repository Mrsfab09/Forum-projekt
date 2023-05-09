<?php
    $db=mysqli_connect('localhost','root','','forum');

    if(isset($_POST["submit"])){
        echo "Udalo sie zarejestrować";
    }
    else{
        header("location: index.php");
    }

    $username=$_POST['username'];
    $username1=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

    $dane = mysqli_query($db,"INSERT INTO users VALUES(NULL,$username,$email,$username1,$password");
    mysqli_close($db);
?>