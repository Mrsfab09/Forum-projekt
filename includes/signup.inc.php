<?php
    if(isset($POST["submit"])){
        echo "Udalo sie !!";
    }
    else{
        header("location: ../form_login.php");
    }
?>