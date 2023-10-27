<?php
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$email = $_POST['email']; 
$address = $_POST['address']; 
$username = $_POST['username']; 
$password = $_POST['password']; 
$confirm = $_POST['confirm']; 


if(!$firstname || !$lastname || !$email || !$address || !$username || !$password || !$confirm)
{
    $error = 'All information is required';
    include('registration.php');
    exit;
}

if($password != $confirm)
{
    $error = 'Registration failed! Your password and confirm password are not the same';
    include('registration.php');
    exit;
}

include('thankyou.php');


?>

