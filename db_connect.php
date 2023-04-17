<?php
    $db=mysqli_connect('localhost','root','','forum');

    if(isset($_POST["submit"])){
        echo "Udalo sie zarejestrować";
    }
    else{
        header("location: ../form_login");
    }
    mysqli_close($db);
?>