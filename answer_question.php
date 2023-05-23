<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/answer.css">
    <title>Odpowiedzi</title>
</head>
<body>
    <!-- Header -->
    <?php include_once("header2.php")?>
    <a href="index2.php"><i class="ri-arrow-left-line"></i></a>
    <?php
        @$topic=$_POST['topic'];
        @$question=$_POST['question'];
        @$question=$_POST['question2'];
        $code=$_GET['key'];
        $db=mysqli_connect("localhost","root","","forum");
        $sql=mysqli_query($db,"SELECT * FROM question");
        while($rows = mysqli_fetch_array($sql)){

        if($rows['topic']==$code){
            echo "<div class='topic'>";
                echo "<h2 name='question'><a class='row' href='answer_question.php?key=".$rows['topic']."'>{$code}</a>"."<br></h2>";
            echo "</div>";

            echo "<div class='rows'>";
                echo "<p>{$rows['question']}</p>";
            echo "</div>";
        }
    }
        mysqli_close($db);
    ?>
    <div class="container">
        <div class="icon">
            <i class='ri-question-answer-line'></i>
            <button class="odp" id="editButton" onclick="toggleEdit()">Odpowiedz</button>
            <div id="editableContent" class="hidden">
                <textarea class="textarea" name="textarea" id="textarea"></textarea>
                <p id="letterCount">0/800</p>
                <div class="send-btn">
                    <button type="submit" class="send">Wyślij</button>
                </div>
            </div>  
        </div>
    </div>
    <?php
        $code=$_GET['key'];
        $db=mysqli_connect("localhost","root","","forum");
        @$text=$_POST['textarea'];
        @$id=$_SESSION['userId'];
        if(isset($_POST['textarea'])){
            if(!empty($_POST['textarea'])){
                $sql=mysqli_query($db,"INSERT INTO answers VALUES(NULL,'pytanie','$text','$id')");
            }
        
        }
        // if($result = mysqli_query($db,"SELECT * FROM answers GROUP BY answersId DESC")){
        //     for($i=0;$i<mysqli_num_rows($result);$i++){ 
        //     $dane = mysqli_fetch_array($result);
        //     if($dane['answersId']==$code)
        //         {
        //             echo "<div class='odpowiedz'>";
        //                 echo "<h3>$dane[topic]</h3>";
        //                 echo "<br>";
        //                 echo "<h5>$dane[question]</h5>";
        //             echo "</div>";
        //             }
        //         }
        //     }

        mysqli_close($db);
    ?>
    <!-- Footer -->
    <?php include_once("footer.php")?>
    <script src="js/fieldEdit.js"></script>
    <script src="js/letter_count.js"></script>
</body>
</html>