<?php

// require MySQL connection
require ('../Database/DBController.php');

// require product object
require ('../Database/Product.php');

// DBController object
$db = new DBController();

//product object
$product = new Product($db);

if (isset($_POST['itemId'])){
    $result = $product->getProduct($_POST['itemId']);
    echo json_encode($result);
}
