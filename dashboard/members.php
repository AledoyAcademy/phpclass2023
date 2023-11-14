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
    <title>Backend Main Project | Members</title>
  </head>
  <body class="">
    <div class="content">
      <nav class="sidebar__nav">
        <ul class="sidebar__nav-list">
          <li class="sidebar__nav-item">
            <a href="dashboard.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-dashbord_icon"></use>
              </svg> 
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar__nav-item active">
            <a href="#" class="sidebar__nav-link">
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
          <li class="sidebar__nav-item">
            <a href="change-password.php" class="sidebar__nav-link">
              
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-lock_icon"></use>
              </svg> 
              <span>Change Password</span>
            </a>
          </li>
          <li class="sidebar__nav-item">
            <a href="#" class="sidebar__nav-link">
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
            <span>Hello Ifeanyi!</span>
          </div>
        </header>
        <div class="content__body">
          <div class="content__container">

            <!-- <table>
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                    <td><span class="span_border"><input type="checkbox" class="checkbox-icon"></span>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>123-456-7890</td>
                    <td>2023-11-11 
                      <svg class="icon icon-xsmall edit-icon">
                        <use xlink:href="img/sprite.svg#icon-edit_icon"></use>
                      </svg>
                    </td>
                </tr>
                <tr>
                    <td><span class="span_border"><input type="checkbox" class="checkbox-icon"></span>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>123-456-7890</td>
                    <td>2023-11-11 
                      <svg class="icon icon-xsmall edit-icon">
                        <use xlink:href="img/sprite.svg#icon-edit_icon"></use>
                      </svg>
                    </td>
                </tr>
                <tr>
                    <td><span class="span_border"><input type="checkbox" class="checkbox-icon"></span>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>123-456-7890</td>
                    <td>2023-11-11 
                      <svg class="icon icon-xsmall edit-icon">
                        <use xlink:href="img/sprite.svg#icon-edit_icon"></use>
                      </svg>
                    </td>
                </tr>
                <tr>
                    <td><span class="span_border"><input type="checkbox" class="checkbox-icon"></span>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>123-456-7890</td>
                    <td>2023-11-11 
                      <svg class="icon icon-xsmall edit-icon">
                        <use xlink:href="img/sprite.svg#icon-edit_icon"></use>
                      </svg>
                    </td>
                </tr>
              </tbody>
          </table> -->

            

            <div class="table">
              <div class="table__col">
                <div class="table__title">Name</div>
                <div class="table__item"><span><input type="checkbox"></span><span>Ayo Johnson</span></div>
                <div class="table__item"><span><input type="checkbox"></span><span>Ayo Johnson</span></div>
                <div class="table__item"><span><input type="checkbox"></span><span>Ayo Johnson</span></div>
                <div class="table__item"><span><input type="checkbox"></span><span>Ayo Johnson</span></div>
              </div>
              <div class="table__col">
                <div class="table__title">Email</div>
                <div class="table__item"><span>Ayojohnson@gmail.com</span></div>
                <div class="table__item"><span>Ayojohnson@gmail.com</span></div>
                <div class="table__item"><span>Ayojohnson@gmail.com</span></div>
                <div class="table__item"><span>Ayojohnson@gmail.com</span></div>
              </div>
              <div class="table__col">
                <div class="table__title">Phone</div>
                <div class="table__item"><span>Phone</span></div>
                <div class="table__item"><span>Phone</span></div>
                <div class="table__item"><span>Phone</span></div>
                <div class="table__item"><span>Phone</span></div>
              </div>
              <div class="table__col">
                <div class="table__title">Date</div>
                <div class="table__item"><span>Date</span>
                  <!-- <span><svg icon icon-xsmall><use xlink:href="img/sprite.svg#icon-edit_icon"></use></svg></span> -->
                </div>
                <div class="table__item"><span>Date</span>
                  <!-- <span><svg icon icon-xsmall><use xlink:href="img/sprite.svg#icon-edit_icon"></use></svg></span> -->
                </div>
                <div class="table__item"><span>Date</span>
                  <!-- <span><svg icon icon-xsmall><use xlink:href="img/sprite.svg#icon-edit_icon"></use></svg></span> -->
                </div>
                <div class="table__item"><span>Date</span>
                  <!-- <span><svg icon icon-xsmall><use xlink:href="img/sprite.svg#icon-edit_icon"></use></svg></span> -->
                </div>
              </div>
            </div>
            
          </div>
        </div>
      <main>
    </div>
  </body>
</html>

