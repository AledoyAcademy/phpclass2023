<?php
session_start();

if(!$_SESSION['valid_user'])
{
   $error = 'You are not logged in';
   include('index.php');
   exit;
}

include('connect.php');
require_once('fns.php');

?>
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
    <title>Backend Main Project | Change Password</title>
  </head>
  <body>
    <div class="content">
      <nav class="sidebar__nav sidebar2">
        <ul class="sidebar__nav-list">
          <li class="sidebar__nav-item">
            <a href="dashboard.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-dashbord_icon"></use>
              </svg> 
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar__nav-item">
            <a href="members.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-member_icon"></use>
              </svg> 
              <span>Members</span>
            </a>
          </li>
          <li class="sidebar__nav-item">
            <a href="#" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-admin_icon"></use>
              </svg> 
              <span>Admin</span>
            </a>
          </li>
          <li class="sidebar__nav-item active">
            <a href="change-password.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-lock_icon"></use>
              </svg> 
              <span>Change Password</span>
            </a>
          </li>
          <li class="sidebar__nav-item">
            <a href="logout.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-logout_icon"></use>
              </svg> 
              <span>Log Out</span>
            </a>
          </li>
        </ul>
      </nav>
      <main class="main__password">
        <!-- <header class="header">
          <form action="#" class="header__form">
            <button type="submit" class="header__form-search">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-search_icon"></use>
              </svg>
            </button>
            <input class="header__form-input" type="text" placeholder="Search">
          </form>

          <div class="profile">
            <div class="profile__box"><img src="img/profile.png" alt="Profile Photo"></div>
            <span>Hello Ifeanyi!</span>
          </div>
        </header> -->
        <form action="#" method="post" class="main__password-form">
          <!-- form heading -->
          <div class="heading"><h1 class="heading__header">Reset Your <?php echo $_SESSION['valid_user']; ?> Password</h1></div>
          <!-- form fields -->
          <div class="main-form__form-fields">
            <fieldset class="main-form__form-fieldset">
              <label for="userpassword" class="main-form__form-label">Password</label>
              <input type="password" class="main-form__form-input" name="password" id="userpassword" />
            </fieldset>
            <fieldset class="main-form__form-fieldset">
              <label for="conf_password" class="main-form__form-label">Confirm Password</label>
              <input
                type="password"
                class="main-form__form-input"
                name="conf_password"
                id="conf_password"
              />
            </fieldset>
          </div>
  
          <div class="main-form__form-action">
            <!-- button container -->
            <div class="btn__container">
              <button type="submit" class="btn btn--primary">Reset</button>
            </div>
          </div>
        </form>
      <main>
    </div>
  </body>
</html>
