<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forum Informatyka</title>
    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Script -->
    <script src="js/validation.js"></script>
  </head>
  <body>
  <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">Forum Informatyka</a>

        <ul class="nav_items">
          <li class="nav_item">
            <a href="index.php" class="nav_link"><i class="ri-home-2-fill"></i> Strona główna</a>
            <a href="question.html" class="nav_link"><i class="ri-questionnaire-fill"></i> Zadaj pytanie</a>
            <a href="about.html" class="nav_link"><i class="ri-file-list-3-fill"></i> O forum</a>
            <a href="contact.html" class="nav_link"><i class="ri-phone-fill"></i> Kontakt</a>
          </li>
        </ul>

        <button class="button" id="form-open">Zaloguj</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="#">
            <h2>Zaloguj</h2>

            <div class="input_box">
              <input type="email" placeholder="Email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Hasło" required />
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
          <form action="#" class="form" id="form">
            <h2>Zarejestruj się</h2>
          <div class="form-control">
              <div class="input_box">
                <input type="text" id="username" placeholder="Nazwa użytkownika" required />
                <i class="ri-user-line user"></i>
                <i class="ri-checkbox-circle-fill"></i>
                <i class="ri-error-warning-fill"></i>
                <small>Error message</small>
              </div>
            </div>
            <div class="form-control">
              <div class="input_box">
                <input type="email" id="email" placeholder="Email" required />
                <i class="uil uil-envelope-alt email"></i>
                <i class="ri-checkbox-circle-fill"></i>
                <i class="ri-error-warning-fill"></i>
                <small>Error message</small>
              </div>
            </div>
            <div class="form-control">
              <div class="input_box">
                <input type="password" id="password" placeholder="Hasło" required />
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
                <i class="ri-checkbox-circle-fill"></i>
                <i class="ri-error-warning-fill"></i>
                <small>Error message</small>
              </div>
            </div>
            <div class="form-control">
              <div class="input_box">
                <input type="password" id="password2" placeholder="Powtórz hasło" required />
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
                <i class="ri-checkbox-circle-fill"></i>
                <i class="ri-error-warning-fill"></i>
                <small>Error message</small>
              </div>
            </div>

            <button type="submit" class="button">Załóż konto</button>

            <div class="login_signup">Masz juz konto? <a href="#" id="login">Zaloguj się</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="js/form.js"></script>
  </body>
</html>