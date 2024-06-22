<?php
// require mySQL Connection
require_once '../database/config/DBController.php';

// require Product class
require_once '../database/Product.php';

    // DBController Object
    $db = new DBController();


// product object
$product = new Product($db);

if(isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}