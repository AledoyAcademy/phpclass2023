<?php
function get_userid($email)
{
    $split_email = explode('@',$email);
    return $split_email[1];
}

echo get_userid('bayO@gamail.com');
echo '<br>';

echo get_userid('bisi@gamail.com');

?>