<?php

$conn = mysqli_connect("localhost","php_user","aledoy","phpclass2023") or die("Cannot connect to DB server");

$query = "select * from registrations";
$result = mysqli_query($conn,$query); //runs the query

//get total num of records
$num_record = mysqli_num_rows($result);
echo '<h3>Total records in database '.$num_record.'</h3>';

for($i=0; $i<$num_record; $i++)
{
    $row = mysqli_fetch_array($result);
    echo 'Firstname: '.$row['firstname'].'<br>';
    echo 'Lastname: '.$row['lastname'].'<br>';
    echo 'Email: '.$row['email'].'<br>';
    echo 'Address: '.$row['address'].'<br>';
    echo 'Username: '.$row['username'].'<br>';
    echo 'Password: '.$row['password'].'<br>';
    echo 'Status: '.$row['status'].'<br>';
    echo 'Dated Added: '.$row['date_created'].'<br>';
    echo '<hr>';

}
?>