<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if(!$firstname || !$lastname  || !$email  || !$username  || !$password  || !$confirm)
{
    $error = 'All information is required';
    include('registration.php');
    exit;
}

if($password  != $confirm)
{
    $error = 'Your password and confirmation are not the same';
    include('registration.php');
    exit;
}

$conn  = mysqli_connect("localhost","php_user","aledoy","phpclass2023") or die ("cannot connect to database server");

$query = "insert into registrations (firstname, lastname, email, address, username, password) values ('$firstname','$lastname','$email','$address','$username','$password')";


$result = mysqli_query($conn,$query);

if($result)
{
    $success = 'Registration Successful';
    include('registration.php');
    exit;
}
else{
    $error = 'User already exists';
    include('registration.php');
    exit;
}

?>