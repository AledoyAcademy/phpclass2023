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
$row = mysqli_fetch_array($result);

if($num_records > 0)
{
    $_SESSION['valid_user'] = $email;
    $_SESSION['privilege'] = $row['usertype'];


    //code to send email to user
    $msg = 'Hello '.get_userid($email).',<br><br>
    A login has been detected on your account @ '.date('d-m-Y h:i:s').' with the IP address '.$_SERVER['REMOTE_ADDR'].'<br>';

    $headers = "From: noreply@ecardnaija.com";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; xcharset=UTF-8\r\n";


    mail($email,'User Logged in detected', $msg, $headers);


    include('dashboard.php');
    exit;
}
else{
    $error = 'Login failed';
    include('index.php');
    exit;
}

?>