<?php
include '../classes/User.php';

//create an OBJ
$user = new User;

//call the method
$user->store($_POST);

?>