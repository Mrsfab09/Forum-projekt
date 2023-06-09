<?php @session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style_validation.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Script -->
    <title>Document</title>
</head>
<body>
    <!-- Home -->
    <section class="home">
        <div class="form_container">
          <i class="uil uil-times form_close"></i>
          <!-- Login From -->
          <div class="form login_form">
            <form action="login.php" method="POST">
              <h2>Zaloguj</h2>

              <div class="input_box">
                <input class="dane" type="text" placeholder="Nazwa użytkownika" name="uName" id="log-username" required />
                <i class="uil uil-envelope-alt email"></i>
              </div>
              <div class="input_box">
                <input class="dane" type="password" placeholder="Hasło" name="password" id="log-password" required />
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
              </div>

              <div class="option_field">
                <span class="checkbox">
                  <input type="checkbox" id="check" />
                  <label for="check">Zapamietaj mnie</label>
                </span>
                <a href="#" class="forgot_pw">Zapomnialeś hasła?</a>
              </div>
              
              <button type="submit" class="button">Zaloguj się</button>

              <div class="login_signup">Nie masz konta? <a href="#" id="signup">Zarejestruj się</a></div>
            </form>
          </div>
    <!-- Signup From -->
        <div class="form signup_form">
          <form action="signup.php" method="POST" class="form" id="form">
            <h2>Zarejestruj się</h2>
            <div class="form-control">
                <div class="input_box">
                  <input class="dane" type="text" name="username" id="username" placeholder="Nazwa użytkownika" required />
                  <i class="ri-user-line user"></i>
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-control">
                <div class="input_box">
                  <input class="dane" type="email" name="email" id="email" placeholder="Email" required />
                  <i class="uil uil-envelope-alt email"></i>
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-control">
                <div class="input_box">
                  <input class="dane" type="password" name="password1" id="password" placeholder="Hasło" required />
                  <i class="uil uil-lock password"></i>
                  <i class="uil uil-eye-slash pw_hide"></i>
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-control">
                <div class="input_box">
                  <input class="dane" type="password" name="password2" id="password2" placeholder="Powtórz hasło" required />
                  <i class="uil uil-lock password"></i>
                  <i class="uil uil-eye-slash pw_hide"></i>
                  <div class="error"></div>
                </div>
              </div>

            <input type="submit" class="button" value="Załóż konto">

            <div class="login_signup">Masz juz konto? <a href="#" id="login">Zaloguj się</a></div>
          </form>
        </div>
      </div>
    </section>
    <script defer src="js/validation.js"></script>
    <script src="js/form.js"></script>
</body>
</html>