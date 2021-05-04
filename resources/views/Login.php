<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- JQUERY -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
  <link rel="stylesheet" href="<?= URL::to("resources/css/login.css")?>" />
  <link rel="icon" type="image/png" href="<?= URL::to("resources/img/LogoB.png")?>">
  <title>Change The World | Inicio</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form id="formInicio" action="#" class="sign-in-form">
          <h2 class="title">Log in</h2>
          <label for="tipo">Type:</label>
          <select name="tipo" id="tipo" form="sign-in-form" class="selector">
            <option value="Normal" selected>Student</option>
            <option value="Creador">Teacher</option>
          </select>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Emal or Username" id="log_username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="log_password" />
          </div>
          <input type="button" value="Log in" class="btn solid" id="btn_login" />
          <p class="social-text">Log in with a social network.</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form id="formRegistrar" action="login" method="POST" class="sign-up-form">
          <h2 class="title">Sing Up</h2>
          <label for="tipo">Type:</label>

          <select form="sign-in-form" class="selector" name="tipo" id="tipo">
            <option value="Student" selected>Student</option>
            <option value="Teacher">Teacher</option>
          </select>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username:" name="username" id="sign_username" />
          </div>

          <div class="input-field" id="border_name">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name:" name="name" id="sign_name" />
          </div>

          <div class="input-field" id="border_lastnames">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Last names:" name="name" id="sign_lastnames" />
          </div>

          <div class="input-field" id="border_mail">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email:" name="email" id="sign_email" />
          </div>

          <div class="input-field" id="border_pass">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Password:" name="password" id="sign_password"
              title="Minimum 8 characters,Mayus, Numbers and  special digit " />
          </div>

          <button type="submit" class="btn" id="btn_signin">Sing in</button />

          <p class="social-text">Sing in with a social network.</p>

          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>

        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>You are new?</h3>
          <p>
            Create an account and start enjoying the best courses in the subjects you like the most.
            <br>! Made by Students wanting to change the world¡
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sing In
          </button>
        </div>
        <img src="<?= URL::to("resources/img/Login/logiin.svg")?>" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>You are one of us?</h3>
          <p>
            What's new? Don't you know? Check it out for yourself Login
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Log in
          </button>
        </div>
        <img src="<?= URL::to("resources/img/Login/verificar.svg")?>" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="<?= URL::to("resources/js/login.js")?>"></script>

  <!-- ALERTAS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- <script src="sweetalert2.min.js"></script> -->
  <script src="<?= URL::to("assets/js/global/helperform.js")?>"></script>
  <script src="<?= URL::to("assets/js/global/rutas.api.js")?>"></script>
  <script src="<?= URL::to("assets/js/global/app.global.js")?>"></script>
  <script src="<?= URL::to("assets/js/modulos/registrar.usuarios.js")?>"></script>

</body>

</html>