<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form_question.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
        <input class="topic" type="text" placeholder="Temat">
        <textarea class="textarea" name="question" id="" placeholder="Napisz treść pytania"></textarea>
        <button type="submit" class="submit-quest">Zadaj pytanie</button>
      </section>
      <script src="js/form.js"></script>
</body>
</html>