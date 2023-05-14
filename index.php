<!-- Start sesji -->
<?php
session_start();
  // if (!isset($_SESSION['zalogowany']))
  // {
  //   header('Location: index.php');
  //   exit();
  // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <title>Forum Informatyka</title>
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>
    <?php
      // echo "Witaj: ".$_SESSION['usersEmail'];
    ?>
    <!-- Header -->
    <?php include_once("header.php")?>
    <!-- Login -->
    <?php include_once("form_login.php")?>
    <!-- Container question -->
    <?php include_once("container_question.php")?>
    <!-- Footer -->
    <?php include_once("footer.php")?>
    <?php
      if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
    ?>
  </body>
</html>
