<?php
session_start();

if($_SESSION['privilege'] != 'admin')
{
   include('dashboard.php');
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
                <use xlink:href="img/sprite.svg#icon-member_icon"></use>
              </svg> 
              <span>Admin</span>
            </a>
          </li>
          <li class="sidebar__nav-item active">
            <a href="category.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-admin_icon"></use>
              </svg> 
              <span>Blog Category</span>
            </a>
          </li>

<li class="sidebar__nav-item">
            <a href="post.php" class="sidebar__nav-link">
              <svg class="icon icon-xsmall">
                <use xlink:href="img/sprite.svg#icon-admin_icon"></use>
              </svg> 
              <span>Blog Posts</span>
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

            
          ADD CATEGORY <br>
          <?php if($error) { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <?php if($correct) { ?>
        <div class="alert alert-success"><?php echo $correct; ?></div>
        <?php } ?>

         <form action="proc-cat.php" method = "post">
      Category Name:<br>
      <input type = "text" name="cat_name">
      
      <input type="submit" value="Add category">

</form>

         <br><br>

         <table style="border-width:1px; border-style:solid;">
              <thead>
                  <tr>
                      <th>Name</th>
                      <?php if($_SESSION['privilege'] == 'admin')
                      {
                        ?>
                      <th>Action</th>
                      <?php } ?>
                  </tr>
              </thead>
              <tbody>
<?php
$query = "select * from categories";
$result = mysqli_query($conn,$query);
$num_record = mysqli_num_rows($result);
for($i=0; $i<$num_record; $i++)
{
$row = mysqli_fetch_array($result);

?>
                <tr>
                  
                    <td><?php echo $row['cat_name']; ?>
                      </td>

                      <?php if($_SESSION['privilege'] == 'admin')
                      {
                        ?>
                      <td>
                      <a href="delete-category.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete <?php echo $row['category_name']; ?>?');"><button>Delete</button></a>
 </td>
                      <?php } ?>
                    
                </tr>
               <?php } ?>
              </tbody>
          </table>


        </div>
      <main>
    </div>
  </body>
</html>

