<?php
$db = mysqli_connect('localhost','root','','forum');

if($db->connect_errno!=0)
{
    echo "Error: ".$db->connect_errno;
}
else
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    $pass = password_hash($password,PASSWORD_DEFAULT);
    $zapytanie = mysqli_query($db,"INSERT INTO users VALUES (NULL,'$username','$email','$pass')");
    header('Location: index.php');
    mysqli_close($db);
}
?>