<?php

session_start();

if(!isset($_POST['email']) || !isset($_POST['password']))
{
    header('Location: index2.php');
    exit();
}

$db = mysqli_connect('localhost','root','','forum');

if($db->connect_errno!=0)
{
    echo "Error: ".$db->connect_errno;
}
else
{
    $username = $_POST['email'];
    $password = $_POST['password'];

    $username = htmlentities($username,ENT_QUOTES, "UTF-8");

    if($result = mysqli_query($db, sprintf("SELECT * FROM users WHERE usersEmail='%s'",mysqli_real_escape_string($db,$username))))
    {
        $ilu_userow = mysqli_num_rows($result);
        if($ilu_userow > 0)
        {
            $_SESSION['zalogowany'] = true;

            $wiersz = mysqli_fetch_assoc($result);
            $_SESSION['usersId'] = $wiersz['usersId']; 
            $_SESSION['usersEmail'] = $wiersz['usersEmail'];

            unset($_SESSION['blad']);
            mysqli_free_result($result);
            header('Location: index2.php');
        }
        else
        {
            $_SESSION['blad'] = '<span style="color:red; font-weight:bold;">Nieprawidłowy login lub hasło!</span>';
            header('Location: index.php');
        }
    }

    mysqli_close($db);
}
?>