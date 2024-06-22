<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start(); // Start output buffering
    // require headers.php file
    require_once './partials/header.php';
?>
            
            

            <?php
                // require shopping cart area
                count($product->getData('cart')) ? require_once './template/__shopping-cart.php' : require_once './template/notFound/__cart_notFound.php';

                // require wishlist template
                count($product->getData('wishlist')) ? require_once './template/__wishlist_template.php' : require_once './template/notFound/__wishlist_notFound.php';

                // require new phones
                require_once './template/__new-phones.php';
            ?>

            <?php
    // require headers.php file
    require_once './partials/footer.php';
    // End the buffer and flush the output
ob_end_flush();
?>