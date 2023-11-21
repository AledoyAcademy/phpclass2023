<?php
include("connect.php");
require_once("fns.php");


$cat_name = $_POST['cat_name'];

 $query = "insert into categories (cat_name) values ('$cat_name')";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = 'Category added';
    include('category.php');
    exit;
}
else{
    
    $error = 'Category already exists';
    include('category.php');
    exit;
}


?>