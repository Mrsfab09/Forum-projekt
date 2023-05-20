<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/answer.css">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <?php include_once("header2.php")?>
    <!-- //TODO:
    //*<h2>Pytanie</h2>
    //*Pole edycyjne do komentowania  -->
    <a href="index2.php"><i class="ri-arrow-left-line"></i></a>
    <?php
        @$topic=$_POST['topic'];
        $code=$_GET['key'];
        // while($wynik=($sql))
        $db=mysqli_connect("localhost","root","","forum");
        $sql=mysqli_query($db,"SELECT topic FROM question");
            $rows = mysqli_fetch_array($sql);
            echo "<div class='topic'>";
                echo "<h2 class='t_q' name='question'><a class='row' href='answer_question.php?key=".$rows['topic']."'>{$code}</a>"."<br></h2>";
            echo "</div>";

        mysqli_close($db);
    ?>
    <div class="container">
        <div class="icon">
            <i class='ri-question-answer-line'></i>
            <button class="odp" id="editButton" onclick="toggleEdit()">Odpowiedz</button>
            <div id="editableContent" class="hidden">
                <textarea class="textarea" id="textarea"></textarea>
                <p id="letterCount">0/800</p>
                <div class="send-btn">
                    <button class="send">Wyślij</button>
                </div>
            </div>  
        </div>
    </div>
    <!-- Footer -->
    <?php include_once("footer.php")?>
    <script src="js/fieldEdit.js"></script>
    <script src="js/letter_count.js"></script>
</body>
</html>