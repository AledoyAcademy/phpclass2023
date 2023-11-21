<?php
session_start();

include('connect.php');
require_once('fns.php');

$id = $_GET['id'];
$privilege = $_GET['privilege'];

if($privilege == 'admin')
{
    $error = 'Cannot delete admin';
    include('members.php');
    exit;
}

$query = "delete from registration where id = '$id'";
$result = mysqli_query($conn, $query);

header("Location: members.php");

?>