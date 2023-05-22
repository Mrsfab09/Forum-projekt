<?php
    @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icon_profile.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo"><img class="logo" src="img/logo2.png" alt=""></a>

        <ul class="nav_items">
          <li class="nav_item">
            <a href="index2.php" class="nav_link"><i class="ri-home-2-fill"></i> Strona główna</a>
            <a href="form_question2.php" class="nav_link"><i class="ri-questionnaire-fill"></i> Zadaj pytanie</a>
            <a href="about2.php" class="nav_link"><i class="ri-file-list-3-fill"></i> O forum</a>
            <a href="contact2.php" class="nav_link"><i class="ri-phone-fill"></i> Kontakt</a>
          </li>
        </ul>
        <img class="icon_profile" src="img/default-avatar.png" alt="user_profile" onclick="toggleMenu()">
              <?php
                // echo "<h3>".$_SESSION['usersName']."</h3>";
              ?>
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img class="icon_profile" src="img/default-avatar.png" alt="user_profile">
              <!--
                //TODO:
                //*Odczytywanie nazwy
                //*Mozliwosc zmienienia ikony profilu
                //*Pytania uzytkownika
              -->
              <?php
                echo "<h3>".$_SESSION['usersName']."</h3>";
              ?>
            </div>
            <hr>
            <a class="sub-menu-link" href="edit-profile.php">
              <i class="ri-user-fill"></i>
              <p>Edytuj Profil</p>
              <span> > </span>
            </a>
            <a class="sub-menu-link" href="myquestion.php">
              <i class="ri-question-mark"></i>
              <p>Moje pytania</p>
              <span> > </span>
            </a>
            <a class="sub-menu-link" href="includes/logout.php">
            <i class="ri-logout-box-r-line"></i>
              <p>Wyloguj się</p>
              <span> > </span>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <script>
      let subMenu=document.getElementById("subMenu");

      function toggleMenu(){
          subMenu.classList.toggle("open-menu");
      }
    </script>
    <!-- <script src="js/imageProfile.js"></script> -->
</body>
</html>