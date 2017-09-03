<?php

session_start();
$_SESSION['user_id'] = 1
$db = new PDO ('mysql:todotable;host=localhost','root','root');

if(!isset($_SESSION['user_id'])){
    die('Something went wrong on the server');
}
 ?>
