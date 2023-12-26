<?php
require "db.php";
//if (isset($_POST['send'])) {

    $komment = R::dispense('komment');
    $komment->name = $_POST['name'];
    $komment->email = $_POST['email'];
    $komment->message = $_POST['message'];

    R::store($komment);
    //header('location: /');
//}

?>
