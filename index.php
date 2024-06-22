<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    ob_start();
    // require headers.php file
    require_once './partials/header.php';
?>
            <?php
            // require banner area
                require_once './template/__banner-area.php';
            ?>

            <?php
                // require top sale
                require_once './template/__top-sale.php';

                // require special price
                require_once './template/__special-price.php';

                // require banner ads
                require_once './template/__banner-ads.php';

                // require new phones
                require_once './template/__new-phones.php';

                // require new phones
                require_once './template/__blogs.php';
            ?>

            

            

            

           

            <?php
    // require headers.php file
    require_once './partials/footer.php';
?>
