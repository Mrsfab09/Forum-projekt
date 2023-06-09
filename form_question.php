<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS -->
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/form_question.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <title>Zadaj pytanie</title>
</head>
<body>
      <!-- Header -->
    <?php include_once("header.php")?>
    <!-- Login -->
    <?php include_once("form_login.php")?>
    <!-- Footer -->
    <?php include_once("footer.php")?>
    <br><br><br><br><br><br><br><br>
      <!-- Form question -->
    <section class="form_question">
        <form action="form_question.php" method="POST">
          <input class="topic" type="text" placeholder="Temat" name="topic">
          <textarea class="textarea" id="textarea" name="question" placeholder="Napisz treść pytania"></textarea>
          <p id="letterCount">0/800</p>
          <button type="button" class="submit-quest" onclick="openPopup()">Zadaj pytanie</button>
        </form>
    </section>
    <!-- Popup -->
    <?php include_once("popup-wrong.php")?>
    <script src="js/letter_count.js"></script>
    <script src="js/popup.js"></script>
</body>
</html>