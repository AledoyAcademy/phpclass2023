<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$status = $_POST['status'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if(!$name || !$email || !$phone || !$username || !$password || !$confirm )
{
    $error_msg1 = 'All information is required';
    include('Careers.php');
    exit;
}

if($password != $confirm)
{
    $error_msg2 = 'Password and confirmation are not the same ';
    include('Careers.php');
    exit;
}

$body = 'Career information'."\n"
        .'---------------------'."\n"
        .'Fullname: '.$name."\n"
        .'Email: '.$email."\n"
        .'Phone: '.$phone."\n"
        .'Message: '.$message."\n"
        .'Status: '.$status."\n"
        .'Username: '.$username."\n"
        .'Password: '.$password."\n";


        $to = 'luabikoye@yahoo.com';
        $subject = 'Career form from Compass';
        // $from = "From: norepy@aledoy.com";
        
        mail($to,$subject,$body,$from);

        $correct = 'Thank you '.$name.' for submitting your details';
        include('Careers.php');
        exit;
    

?>