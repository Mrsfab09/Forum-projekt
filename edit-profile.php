<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit-profile.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <title>Edytuj Profil</title>
</head>
<body>
    <!-- Header -->
    <?php include_once("header2.php")?>
    <div class="hero">
        <div class="card">
            <img src="img/default-avatar.png" alt="avatar" id="profile-pic">
            <?php
                echo "<h1>".$_SESSION['usersName']."</h1>";
            ?>
            <label for="input-file">Zmień ikonę profilu</label>
            <input class="file" type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
        </div>
    </div>
    <script src="js/imageProfile.js"></script>
    <!-- Footer -->
    <?php include_once("footer.php")?>
</body>
</html>