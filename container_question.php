<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/container_question.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="napis"><i>Pytania i odpowiedzi</i></h2>
        <div class="list">
            <h3 name="question">Przykladowe pytanie</h3>
        </div>
        <div class="list">
            <h3 name="question">Przykladowe pytanie</h3>
        </div>
        <div class="list">
            <h3 name="question">Przykladowe pytanie</h3>
        </div>
        <div class="list">
            <h3 name="question">Przykladowe pytanie</h3>
        </div>
        <div class="list">
            <h3 name="question">Przykladowe pytanie</h3>
        </div>
        <div class="list"> 
            <h3 name="topic">Przykladowe pytanie</h3>
        </div>
    </div>
    <?php
         @$topic=$_POST['topic'];

         $db=mysqli_connect("localhost","root","","forum");
         $sql=mysqli_query($db,"SELECT topic FROM question");
    ?>
</body>
</html>