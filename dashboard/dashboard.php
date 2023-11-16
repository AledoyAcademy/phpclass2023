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
    <title>Backend Main Project | Dashboard</title>
  </head>
  <body class="body__color">
    <div class="content">
      <nav class="sidebar__nav">
        <ul class="sidebar__nav-list">
          <li class="sidebar__nav-item active">
            <a href="#" class="sidebar__nav-link">
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
            <a href="admin.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-admin_icon"></use>
              </svg> 
              <span>Admin</span>
            </a>
          </li>
          <li class="sidebar__nav-item">
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
      <main class="content__main">
        <header class="header">
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
            <span>Hello <?php echo get_userid($_SESSION['valid_user']); ?>!</span>
          </div>
        </header>
        <div class="content__body">
          <div class="content__container">
            <div class="content__quick-links">
              <a href="#" class="content__quick-item">Categories</a>
              <a href="#" class="content__quick-item">Categories</a>
              <a href="#" class="content__quick-item">Categories</a>
            </div>
            <div class="content__showbox">
              <div class="content__showbox-item">
                <svg class="icon icon-small">
                  <use xlink:href="img/sprite.svg#icon-classes_icon"></use>
                </svg>
                Classes
              </div>
              <div class="content__showbox-item">
                <svg class="icon icon-small">
                  <use xlink:href="img/sprite.svg#icon-document_icon"></use>
                </svg>
                Documents
              </div>
              <div class="content__showbox-item">
                <svg class="icon icon-small">
                  <use xlink:href="img/sprite.svg#icon-community_icon"></use>
                </svg>
                Community
              </div>
              <div class="content__showbox-item">
                <svg class="icon icon-small">
                  <use xlink:href="img/sprite.svg#icon-note_icon"></use>
                </svg>
                Notes
              </div>
            </div>
            <div class="content__activity">
              <div class="content__activity-title">
                <h2 class="content__activity-heading">Activity</h2>
                <p class="content__activity-paragraph">Last week Data</p>
              </div>
              <div class="content__activity-table">
                <div class="content__activity-scheme">
                  <div class="content__activity-info">
                    <h3 class="content__activity-info-heading">Introduction to UI/UX Design</h3>
                    <p class="content__activity-paragraph">mary love going to church and dancing at the club</p>
                    <span class="circle"></span>
                  </div>
                  <div class="content__activity-info">
                    <h3 class="content__activity-info-heading">Introduction to UI/UX Design</h3>
                    <p class="content__activity-paragraph">mary love going to church and dancing at the club</p>
                    <span class="circle"></span>
                  </div>
                  <div class="content__activity-info">
                    <h3 class="content__activity-info-heading">Introduction to UI/UX Design</h3>
                    <p class="content__activity-paragraph">mary love going to church and dancing at the club</p>
                    <span class="circle"></span>
                  </div>
                </div>
                <div class="content__activity-profile">
                  <h2 class="content__activity-heading m-b-none">Profile</h2>

                  <div class="content__activity-progress">
                    <div class="content__activity-rating">
                      <span class="content__activity-score">Very Good</span><span class="content__activity-tab">
                        <span class="percent percent-1"></span>
                      </span>
                    </div>
                    <div class="content__activity-rating">
                      <span class="content__activity-score">Average</span><span class="content__activity-tab"><span class="percent percent-2"></span></span>
                    </div>
                    <div class="content__activity-rating">
                      <span class="content__activity-score">Poor</span><span class="content__activity-tab"><span class="percent percent-3"></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <main>
    </div>
  </body>
</html>
