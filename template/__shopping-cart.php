<!-- shopping cart section -->
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['deleted-cart-submit'])){
            $deleteRecord = $cart->deleteCart($_POST['item_id']);
            
        }

        // save-for-later-submit
        if(isset($_POST['save-for-later-submit'])){
            $cart->saveForLater($_POST['item_id']);
            
        }
    }
    
?>
<section class="py-3" id="cart">
                <div class="container-fluid w-75">
                    <h5 class="font-Montserrat font-size-20">Shopping Cart</h5>

                    <!-- shopping cart items -->
                        <div class="row">
                            <div class="col-sm-9">

                                <?php
                                foreach($product->getData('cart') as $item):
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
                                            <div class="d-flex font-rale w-25">
                                            <button class="qty-up border bg-light" data-id="<?= $item['item_id'] ?? 0; ?>"><i class="uil uil-angle-up"></i></button>
                                            <input type="text" data-id="<?= $item['item_id'] ?? 0; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                            <button class="qty-down border bg-light" data-id="<?= $item['item_id'] ?? 0; ?>"><i class="uil uil-angle-down"></i></button>
                                            </div>
                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 0 ?>">
                                            <button type="submit" name="deleted-cart-submit" class="btn font-Montserrat text-danger px-3 border-right">Delete</button>
                                            </form>

                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 0 ?>">
                                                <button type="submit" name="save-for-later-submit" class="btn font-Montserrat text-danger">Save for later</button>
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
                            <!-- sub total section -->
                            <div class="col-sm-3">
                                <div class="sub-total border text-center mt-2 w-100">
                                    <h6 class="font-rale font-size-12 text-success py-3"><i class="uil uil-check"></i> Your order is eligible for Free Delivery</h6>
                                    <div class="border-top py-4">
                                        <h5 class="font-Montserrat font-size-14">Subtotal(<?= isset($subTotal) ? count($subTotal) : 0 ?> item):&nbsp;<span class="text-danger">&#8358 <span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $cart->getSum($subTotal) : 0 ?></span></span></h5>
                                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                                    </div>
                                </div>
                            </div>
                            <!-- sub total section -->
                        </div>
                    <!-- shopping cart items -->
                </div>
            </section>
            <!-- shopping cart section -->