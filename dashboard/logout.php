<?php
session_start();
unset($_SESSION['valid_user']);
unset($_SESSION['privilege']); 
session_destroy();
include('index.php');

?>