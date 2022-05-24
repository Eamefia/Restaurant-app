<?php

//require MyQSL connection
require ('Database/DBController.php');

require ('Database/Upload.php');

//require Product class
require ('Database/Product.php');

//require cart class
require('Database/Cart.php');

//DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//cart object
$Cart = new Cart($db);

//Upload object
$Upload = new Upload($db);
