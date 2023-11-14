<?php

include('connect.php');
require_once('fns.php');

$email = $_POST['email'];

if(!$email)
{
    $error = 'Username is required to continue';
    include('reset-password.php');
    exit;
}

$query = "select * from registration where email = '$email'";
$result = mysqli_query($conn,$query);
$num_records = mysqli_num_rows($result);

if($num_records > 0)
{
    //generate new password and send to the email
    $new_password = rand(100000,500000);

    //update the database table
    $query_up = "update registration set password = '$new_password' where email = '$email'";
    $result_up = mysqli_query($conn,$query_up);

    $subject = 'Password Reset Successful';
    $message = 'Hello '.$email.',<br><br>Your new password is : <b>'.$new_password.'</b><br><br>
    Thank you,<br>
    Site Admin';



    $headers = "From: noreply@ecardnaija.com";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($email,$subject,$message,$headers);

    $success = 'Check your email for your new password. <a href="index.php">Click here </a> to login';
    include('reset-password.php');
    exit;


}
else{
    $error = 'This email is not in our database';
    include('reset-password.php');
    exit;
}




?>