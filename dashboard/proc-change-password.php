<?php
session_start();
include('connect.php');
require_once('fns.php');

$password = $_POST['password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

if(!$password || !$new_password)
{
    $error = 'All information required';
    include('change-password.php');
    exit;
}

if($new_password == $password)
{
    $error = 'Old password and new password should not be the same';
    include('change-password.php');
    exit;
}

if($new_password != $confirm_password)
{
    $error = 'Your new password and confirmation is not the same';
    include('change-password.php');
    exit;
}

 $query = "select * from registration where email = '".$_SESSION['valid_user']."' and password = '".$password."'";

$result = mysqli_query($conn,$query);
$num_records = mysqli_num_rows($result);

if($num_records > 0)
{

//update the database table
$query_up = "update registration set password = '$new_password' where email = '".$_SESSION['valid_user']."'";
$result_up = mysqli_query($conn,$query_up);



    $subject = 'Password Changed Successful';
    $message = 'Hello '.get_userid($_SESSION['valid_user']).',<br><br>This mail is to inform you that your password change was successful</b><br><br>
    Thank you,<br>
    Site Admin';



    $headers = "From: noreply@ecardnaija.com";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($email,$subject,$message,$headers);

    $success = 'Your password has been changed';
    include('change-password.php');
    exit;


}
else{
    $error = 'This email is not in our database';
    include('change-password.php');
    exit;
}




?>