<?php

function validatePassword($password) {
    // Minimum length of the password
    $min_length = 8; // You can adjust this value

    // Regular expressions to check for alphanumeric and symbol
    $contains_alphanumeric = preg_match('/[a-zA-Z]/', $password);
    $contains_symbol = preg_match('/[^a-zA-Z0-9]/', $password);

    // Check if the password meets the criteria
    if (strlen($password) < $min_length) {
        return "Password should be at least $min_length characters long.";
    } elseif (!$contains_alphanumeric || !$contains_symbol) {
        return "Password should contain at least one alphanumeric character and one symbol.";
    } else {
        return "Password is valid.";
    }
}


function get_userid($email)
{
    global $conn;

    $query = "select * from registration where email = '$email'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    return $row['username'];

    
}
?>