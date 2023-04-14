<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>
<body>
    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="#" method="POST">
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