<?php
session_start();

include('connect.php');
require_once('fns.php');

$email = $_POST['email'];
$password = $_POST['password'];

if(!$email || !$password)
{
    $error = 'Username and password required to continue';
    include('index.php');
    exit;
}

$query = "select * from registration where email = '$email' and password = '$password'";




$result = mysqli_query($conn,$query);
$num_records = mysqli_num_rows($result);
if($num_records > 0)
{
    $_SESSION['valid_user'] = $email;
    include('dashboard.php');
    exit;
}
else{
    $error = 'Login failed';
    include('index.php');
    exit;
}

?>