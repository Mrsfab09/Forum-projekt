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
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <?php include_once("header2.php")?>
    <div class="hero">
        <div class="card">
            <img src="img/default-avatar.png" alt="avatar">
            <?php
                echo "<h1>".$_SESSION['usersName']."</h1>";
            ?>
            <input type="file">
        </div>
    </div>
    
    <!-- Footer -->
    <?php include_once("footer.php")?>
</body>
</html>