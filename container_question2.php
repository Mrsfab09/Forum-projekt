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
        <?php
            @$topic=$_POST['topic'];
            // while($wynik=($sql))
            $db=mysqli_connect("localhost","root","","forum");
            $sql=mysqli_query($db,"SELECT topic FROM question");
                for($i=0;$i<mysqli_num_rows($sql);$i++)
                {
                    $rows = mysqli_fetch_array($sql);
                    echo "<div class='list'>";
                        echo "<h3 class='t_q' name='question'><a class='row' href='answer_question.php?key=".$rows['topic']."'>{$rows['topic']}</a>"."<br></h3>";
                    echo "</div>";

                }
            mysqli_close($db);
        ?>
    </div>
</body>
</html>