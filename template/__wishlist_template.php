<!-- shopping cart section -->
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['deleted-cart-submit'])){
            $deleteRecord = $cart->deleteCart($_POST['item_id']);    
        }

        // add-to-cart-submit
        if(isset($_POST['add-to-cart-submit'])){
            $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
        }
    }
    
?>
<section class="py-3" id="cart">
                <div class="container-fluid w-75">
                    <h5 class="font-Montserrat font-size-20">Wishlist</h5>

                    <!-- shopping cart items -->
                        <div class="row">
                            <div class="col-sm-9">

                                <?php
                                foreach($product->getData('wishlist') as $item):
                                    $productCart = $product->getProduct($item['item_id']);
                                    $subTotal[] = array_map(function($item){
                                ?>
                                <!-- cart item -->
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="cart" class="img-fluid" style="height: 120px;">
                                    </div>
                                    <div class="col-sm-8">
                                        <h5 class="font-Montserrat font-size-20"><?= $item['item_name'] ?? "unknown" ?></h5>
                                        <small>by <?= $item['item_brand'] ?? "BRAND" ?></small>
                                        <!-- product rating -->
                                        <div class="d-flex">
                                            <div class="rating text-warning font-size-12">
                                                <span><i class="uis uis-star"></i></span>
                                                <span><i class="uis uis-star"></i></span>
                                                <span><i class="uis uis-star"></i></span>
                                                <span><i class="uis uis-star"></i></span>
                                                <span><i class="uil uil-star"></i></span>
                                            </div>
                                            <a href="#" class="px-2 font-rale font-size-14">20.534 ratings</a>
                                        </div>
                                        <!-- product rating -->

                                        <!-- product qty -->
                                        <div class="qty d-flex pt-2">

                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 0 ?>">
                                            <button type="submit" name="deleted-cart-submit" class="btn font-Montserrat text-danger pl-0 pr-5 border-right">Delete</button>
                                            </form>

                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 0 ?>">
                                                <button type="submit" name="add-to-cart-submit" class="btn font-Montserrat text-danger">Add to Cart</button>
                                            </form>
                                           
                                            
                                        </div>
                                        <!-- product qty -->
                                    </div>

                                    <div class="col-sm-2 text-end">
                                        <div class="font-size-20 font-Montserrat text-danger">
                                            <span class="product_price" data-id="<?= $item['item_id'] ?? 0; ?>">&#8358 <?= $item['item_price'] ?? "0" ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                return $item['item_price'];
                                }, $productCart); //closing array map function
                                endforeach;
                                // print_r($subTotal); 
                               
                                ?>
                                <!-- cart item -->
                            </div>
                            
                        </div>
                    <!-- shopping cart items -->
                </div>
            </section>
            <!-- shopping cart section -->