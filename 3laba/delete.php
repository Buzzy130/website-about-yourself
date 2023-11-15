<?php

require "db.php";

$id = $_GET['id'];

mysqli_query($con, "DELETE FROM `komment` WHERE `komment`.`id`='$id'");

header('Location: http://3laba/#slide07');
?>