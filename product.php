<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    // require headers.php file
    require_once './partials/header.php';
?>
            
            

            <?php
                // require product
                require_once './template/__products.php';
                // require top sale
                require_once './template/__top-sale.php';
            ?>

            <?php
    // require headers.php file
    require_once './partials/footer.php';
?>