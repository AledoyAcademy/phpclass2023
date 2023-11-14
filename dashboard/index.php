<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link to Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- link to style css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Backend Main Project | Login</title>
  </head>
  <body class="body__center">
    <main class="main-form">
      <!-- form image -->
      <div class="main-form__img">
        <img
          class="main-form__img-image"
          src="img/login_img.png"
          alt="Login image"
        />
      </div>
      <!-- form -->
      <form action="#" method="post" class="main-form__form">
        <!-- form heading -->
        <div class="heading"><h1 class="heading__header">Login</h1></div>
        <!-- form fields -->
        <div class="main-form__form-fields">
       
          <fieldset class="main-form__form-fieldset">
            <label for="email" class="main-form__form-label"
              >Email Address</label
            >
            <input
              type="email"
              class="main-form__form-input"
              name="email"
              id="email"
            />
          </fieldset>
          <fieldset class="main-form__form-fieldset">
            <label for="password" class="main-form__form-label">Password</label>
            <input
              type="password"
              class="main-form__form-input"
              name="password"
              id="password"
            />
          </fieldset>
          <!-- action section -->
          <div class="action__call">
            Forgot Password?
            <a href="reset-password.php" class="action__link"
              >Reset</a
            >
          </div>
        </div>

        <div class="main-form__form-action">
          <!-- button container -->
          <div class="btn__container">
            <button type="submit" class="btn btn--dark">Login</button>
          </div>
          <!-- action section -->
          <div class="action__call flex-start">
            Don’t have an Account?
            <a href="registration.php" class="action__link"
              >Register</a
            >
          </div>
        </div>
      </form>
    </main>
  </body>
</html>
