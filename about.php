<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>O forum</title>
</head>
<body>
    <!-- Header -->
   <?php include_once("header.php")?>
   <!-- Login -->
   <?php include_once("form_login.php")?>
   <br><br><br><br><br><br><br><br><br>
   
   <!-- O forum -->
    <div class="container">
        <div class="tab_box">
            <button class="tab_btn active">O forum</button>
            <button class="tab_btn">Regulamin</button>
            <button class="tab_btn">Dokumentacja</button>
            <div class="line"></div>
        </div>
        <div class="content_box">
            <div class="content active">
                <h3>O forum</h3>
                <p>O forum</p>
            </div>
            <div class="content">
                <h3>Regulamin</h3>
                    <ol start="1">
                        <li>Zasady ogólne</li>
                    </ol>
                    <ul>
                        <li>Forum jest miejscem wymiany informacji i dyskusji na temat informatyki</li>
                        <li>Wszelkie treści muszą być zgodne z prawem i dobra kultura(bez przeklenstw itd.)</li>
                    </ul>
                    <ol start="2">
                        <li>Rejestracja</li>
                    </ol>
                    <ul>
                        <li>Aby korzystać z forum, należy się zarejestrować.</li>
                        <li>Rejestracja jest darmowa i wymaga podania adresu e-mail.</li>
                        <li>Nick musi być zgodny z zasadami dobrego smaku.</li>
                        <li>Jedna osoba może posiadać tylko jedno konto.</li>
                    </ul>
                    <ol start="3">
                        <li>Moderacja</li>
                    </ol>
                    <ul>
                        <li>Moderatorzy mają prawo usuwać lub edytować treści, które naruszają regulamin</li>
                        <li>Moderatorzy mają prawo do banowania użytkowników, którzy łamią regulamin</li>
                        <li>Moderatorzy nie ponoszą odpowiedzialności za treści zamieszczone przez użytkowników</li>
                    </ul>
                    <ol start="4">
                        <li>Posty</li>
                    </ol>
                    <ul>
                        <li>Posty muszą być zgodne z tematem danego wątku</li>
                        <li>Posty nie mogą zawierać obraźliwych, wulgarnych ani dyskryminujących treści</li>
                        <li>Wprowadzanie w błąd lub spamowanie jest zabronione.</li>
                    </ul>
                    <ol start="5">
                        <li>Prywatność</li>
                    </ol>
                    <ul>
                        <li>Dane osobowe użytkowników są chronione przez administratora.</li>
                        <li>Wszelkie prywatne informacje podawane na forum są dobrowolne i nie mogą być wykorzystywane w celach reklamowych.</li>
                    </ul>
                    <ol start="6">
                        <li>Moderacja</li>
                    </ol>
                    <ul>
                        <li>Regulamin może być zmieniany przez administratora.</li>
                        <li>Zmiany wchodzą w życie od momentu ich opublikowania na forum.</li>
                    </ul>
                    <p class="thanks">Dziękuję i życzę miłego korzystania z forum!</p>
            </div>
            <div class="content">
                <h3>Dokumentacja</h3>
                <p>Dokumentacja</p>
            </div>
        </div>
    </div>
    <script>
        const tabs=document.querySelectorAll('.tab_btn');
        const all_content=document.querySelectorAll('.content');

            tabs.forEach((tab, index) =>{
            tab.addEventListener('click',(e) => {
            tabs.forEach(tab=>{tab.classList.remove('active')});
            tab.classList.add('active');

                var line = document.querySelector('.line');
                line.style.width = e.target.offsetWidth + "px";
                line.style.left = e.target.offsetLeft + "px";

                all_content.forEach(content =>{content.classList.remove('active')});
                all_content[index].classList.add('active');
            })
            
        })
    </script>
</body>
</html>