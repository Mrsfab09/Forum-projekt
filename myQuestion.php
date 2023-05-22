<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/myQuestion.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <title>Moje pytania</title>
</head>
<body>
    <!-- Header -->
    <?php include_once("header2.php")?>
    <div class="container">
        <div class="question-user">
            <h3>Moje pytania</h3>
            <?php
                $db=mysqli_connect("localhost","root","","forum");
                $id=$_SESSION['usersId'];
                $sql=mysqli_query($db,"SELECT topic FROM question WHERE userId='$id'");
                    for($i=0;$i<mysqli_num_rows($sql);$i++){
                        $rows = mysqli_fetch_array($sql);
                        echo "<span class='t_q' name='question'><a class='row' href='answer_question.php?key=".$rows['topic']."'>{$rows['topic']}</a>"."<br></>";
                    }
                mysqli_close($db);
            ?>
        </div>
    </div>
    <!-- Footer -->
    <?php include_once("footer.php")?>
</body>
</html>