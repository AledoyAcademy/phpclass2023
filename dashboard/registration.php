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
    <title>Backend Main Project | Registration</title>
  </head>
  <body class="body__center">
    <main class="main-form">
      <!-- form -->
      <form action="proc-register.php" method="post" class="main-form__form">
        <!-- form heading -->
        <?php if($error) { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <?php if($success) { ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
        <?php } ?>
        <div class="heading"><h1 class="heading__header">Register</h1></div>
        <!-- form fields -->
        <div class="main-form__form-fields">
          <fieldset class="main-form__form-fieldset">
            <label for="firstname" class="main-form__form-label"
              >First Name</label
            >
            <input
              type="text"
              class="main-form__form-input"
              name="firstname"
              id="firstname"
              value="<?php echo $firstname; ?>"
            />
          </fieldset>
          <fieldset class="main-form__form-fieldset">
            <label for="lastname" class="main-form__form-label"
              >Last Name</label
            >
            <input
              type="text"
              class="main-form__form-input"
              name="lastname"
              id="lastname"
              value="<?php echo $lastname; ?>"
            />
          </fieldset>
          <fieldset class="main-form__form-fieldset">
            <label for="email" class="main-form__form-label">Email</label>
            <input
              type="email"
              class="main-form__form-input"
              name="email"
              id="email"
              value="<?php echo $email; ?>"
            />
          </fieldset>
          <fieldset class="main-form__form-fieldset">
            <label for="password" class="main-form__form-label">Password</label>
            <input
              type="password"
              class="main-form__form-input"
              name="password"
              id="password"
              value="<?php echo $password; ?>"
            />
          </fieldset>
          <fieldset class="main-form__form-fieldset">
            <label for="password" class="main-form__form-label">Confirm Password</label>
            <input
              type="password"
              class="main-form__form-input"
              name="password2"
              id="password2"
            />
          </fieldset>
          <div class="form__radio">
            <fieldset class="main-form__form-fieldset m-r-small">
              <input
                type="radio"
                class="main-form__form-radio"
                name="gender"
                id="male"
                value="Male"
              />
              <label for="male" class="main-form__form-label label-inline"
                >Male</label
              >
            </fieldset>
            <fieldset class="main-form__form-fieldset">
              <input
                type="radio"
                class="main-form__form-radio"
                name="gender"
                id="female"
                value="Female"
              />
              <label for="female" class="main-form__form-label label-inline"
                >Female</label
              >
            </fieldset>
          </div>
          <div class="main-form__form-terms">
            <fieldset class="main-form__form-fieldset">
              <input
                type="checkbox"
                name="terms"
                value="accepted"
                id="terms_checkbox"
              />
              <label
                for="terms_checkbox"
                class="main-form__form-label label-inline"
                >Terms & Conditions</label
              >
            </fieldset>
            <p class="text-xsmall">
              By accepting these terms and conditions, you acknowledge and agree
              to comply with the rules and guidelines governing our services.
              Please review them carefully as they outline important information
              regarding your use of our platform.
            </p>
          </div>
        </div>

        <div class="main-form__form-action">
          <!-- button container -->
          <div class="btn__container">
            <button type="submit" class="btn btn--primary">Register</button>
          </div>
        </div>
      </form>

      <!-- form image -->
      <div class="main-form__img">
        <img
          class="main-form__img-image"
          src="img/register_img.png"
          alt="Registration image"
        />
      </div>
    </main>
  </body>
</html>
