<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS -->
    <link rel="stylesheet" href="css/form_question.css">
    <link rel="stylesheet" href="css/icon_profile.css">
    <link rel="stylesheet" href="css/popup.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <title>Zadaj pytanie</title>
</head>
<body>
      <!-- Header -->
    <?php include_once("header2.php")?>
    <!-- Footer -->
    <?php include_once("footer.php")?>
    <br><br><br><br><br><br><br><br>
      <!-- Form question -->
    <section class="form_question">
        <form action="form_question2.php" method="POST">
          <input class="topic" type="text" placeholder="Temat" name="topic">
          <textarea class="textarea" id="textarea" name="question" placeholder="Napisz treść pytania"></textarea>
          <p id="letterCount">0/800</p>
          <button type="submit" class="submit-quest">Zadaj pytanie</button>
        </form>
    </section>
    <!-- Popup -->
    <?php include_once("popup-good.php")?>
    <!-- Script -->
    <script src="js/popup.js"></script>
    <script src="js/letter_count.js"></script>
    <?php
      @$topic=$_POST['topic'];
      @$question=$_POST['question'];
      if(isset($_POST['topic']) && isset($_POST['question'])){
        if(!empty($_POST['topic']) && !empty($_POST['question'])){
          @$db=mysqli_connect("localhost","root","","forum");
          @$sql=mysqli_query($db,"INSERT INTO question VALUES(NULL,'$topic','$question')");
          
          mysqli_close($db);
        }
      }
    ?>
</body>
</html>