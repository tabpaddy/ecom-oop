<?php
ob_start(); // Start output buff
// require mySQL Connection
    require_once './database/config/DBController.php';

// require Product class
    require_once './database/Product.php';

// require Product class
    require_once './database/Cart.php';

    // DBController Object
$db = new DBController();

// product object
$product = new Product($db);
$product_shuffle = $product->getData();

// cart object
$cart = new Cart($db);
// print_r($cart->getCartId($product->getData('cart')));
