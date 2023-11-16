<?php
include("connect.php");
require_once("fns.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$gender = $_POST['gender'];
$terms = $_POST['terms'];

if(!$firstname || !$lastname || !$lastname || !$email || !$username || !$password || !$password2 || !$gender )
{
    $error = 'All information required';
    include('registration.php');
    exit;
}

$pass_response = validatePassword($password);

if($pass_response != 'Password is valid.')
{
    $error = $pass_response;
    include('registration.php');
    exit;
}

if(!$terms)
{
    $error = 'You must agree to Terms & conditions';
    include('registration.php');
    exit;
}


$query = "insert into registration (firstname,lastname,email,username,password,gender) values ('$firstname','$lastname','$email','$username','$password','$gender')";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = 'Thank you for registering with us. <a href="index.php">Click here</a> to login';
    include('registration.php');
    exit;
}
else{
    
    $error = 'Username already exists';
    include('registration.php');
    exit;
}


?>