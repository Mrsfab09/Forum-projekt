<!-- Po zalogowaniu -->
<?php
    session_start();

    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: index.html');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <title>Forum Informatyka</title>
  </head>
  <body>
    <!-- Header -->
    <?php include_once("header2.php")?>
    <!-- Login -->
    <?php include_once("form_login.php")?>
    <!-- Container question -->
    <?php include_once("container_question2.php")?>
    <!-- Footer -->
    <?php include_once("footer.php")?>
  </body>
</html>
