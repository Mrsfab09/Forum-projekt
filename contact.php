<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/icon_profile.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Kontakt</title>
</head>
<body>
    <!-- Header -->
    <?php include_once("header.php")?>
    <!-- Login -->
    <?php include_once("form_login.php")?>
    <!-- Footer -->
    <?php include_once("footer.php")?>

    <section class="form_question">
        <h2><i>Kontakt</i></h2>
        <form action="form_question.php" method="POST">
          <input class="topic" type="text" placeholder="Email" name="email">
          <textarea class="textarea" id="textarea" name="problem" placeholder="Opisz swój problem"></textarea>
          <p id="letterCount">0/800</p>
          <button type="button" class="submit-quest" onclick="openPopup()">Wyślij</button>
        </form>
    </section>
    
    <?php include_once("popup-wrong.php")?>
    <script src="js/popup.js"></script>
</body>
</html>