<!-- New Phones -->
<?php
shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['new_phone_submit'])){
        // call method add to cart
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<section id="new_phones">
                <div class="container">
                    <h4 class="font-rubik font-size-20">New Phones</h4>
                    <hr>
                    <!-- owl carousel -->
                    <div class="owl-carousel owl-theme">
                        <?php foreach($product_shuffle as $item): ?>
                        <div class="item py-2 bg-light">
                            <div class="product font-rale">
                                <a href="<?php printf('./%s?item_id=%s','product.php', $item['item_id'])?>"><img src="<?= $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6><?= $item['item_name'] ?? "unknown" ;?></h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="uis uis-star"></i></span>
                                        <span><i class="uis uis-star"></i></span>
                                        <span><i class="uis uis-star"></i></span>
                                        <span><i class="uis uis-star"></i></span>
                                        <span><i class="uil uil-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>&#8358 <?= $item["item_price"] ?? "0" ?></span>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? "1" ?>">
                                        <input type="hidden" name="user_id" value="<?= 1; ?>">
                                        <?php
                                            if(in_array($item['item_id'], $cart->getCartId($product->getData('cart')) ?? [])){
                                                echo '<button type="submit" disabled class="btn btn-success font-size-12">Already in cart</button>';
                                            }else{
                                                echo '<button type="submit" name="new_phone_submit" class="btn btn-warning font-size-12">Add to cart</button>';
                                            }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; // closing foreach ?>
                    </div>
                    <!-- owl carousel -->
                </div>
            </section>
            <!-- New Phones -->