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
    echo 'All information on this page is required - <a href="careers.php">Go back</a>';
    exit;
}

if($password != $confirm)
{
    echo 'Password and confirmation are not the same - <a href="careers.php">Go back</a>';
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

        include('index.php');
        exit;
    

?>