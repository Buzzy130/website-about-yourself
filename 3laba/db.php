<?php
require "libs/rb.php";
R::setup('mysql:host=localhost;dbname=comment', 'root', '');
$con = mysqli_connect('localhost', 'root', '', 'comment');
session_start();
?>

