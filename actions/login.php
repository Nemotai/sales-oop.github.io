<?php
include '../classes/User.php';

//create an OBJ
$user = new User;

//call the method
$user->login($_POST);

?>