<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cookies.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <img src="img/cookie.png" alt="cookie">
    <div class="content">
      <header>Pliki Cookie</header>
      <p>Ta strona korzysta z plików cookie, aby zapewnić najlepszą jakość korzystania z naszej witryny.</p>
      <div class="buttons">
        <button class="item">Akceptuj</button>
        <a href="#" class="item">Więcej</a>
      </div>
    </div>
  </div>
  <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=CodingNepal; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>
</body>
</html>