<?php
include "../classes/User.php";

$product = new Product;

$id = $_GET['product_id'];

$product->updateProduct($id, $_POST);

?>