<!-- product -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?= $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                            <div class="row pt-4 font-size-16 font-Montserrat">
                                <div class="col">
                                    <button class="btn btn-danger form-control" type="submit">Proceed to Buy</button>
                                </div>
                                <div class="col">
                                <form method="post">
                                        <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? "1" ?>">
                                        <input type="hidden" name="user_id" value="<?= 1; ?>">
                                        <?php
                                            if(in_array($item['item_id'], $cart->getCartId($product->getData('cart')) ?? [])){
                                                echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Already in cart</button>';
                                            }else{
                                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to cart</button>';
                                            }
                                        ?>
                                        <!-- <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to cart</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-Montserrat font-size-20"><?= $item['item_name'] ?? "unknown" ?></h5>
                            <small>by <?= $item['item_brand'] ?? "Brand"; ?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="uis uis-star"></i></span>
                                    <span><i class="uis uis-star"></i></span>
                                    <span><i class="uis uis-star"></i></span>
                                    <span><i class="uis uis-star"></i></span>
                                    <span><i class="uil uil-star"></i></span>
                                </div>
                                <a href="" class="px-2 font-rale font-size-14">20,534 ratings|1000+ answered questions</a>
                            </div>
                            <hr class="m-0">

                            <!-- product price -->
                            <table class="my-3">
                                <tr class="font-rale font-size-14">
                                    <td>M.R.P:</td>
                                    <td><strike>&#8358 150.00</strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price:</td>
                                    <td class="font-size-20 text-danger"><span><?= $item['item_price'] ?? "0"; ?></span><small class="text-dark font-size-12">&nbsp;inclusive of all taxes</small></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>You Save:</td>
                                    <td class="font-size-16 text-danger"><span><?= $item['item_price'] ?? "0"; ?></span></td>
                                </tr>
                            </table>
                            <!-- !product price -->

                            <!-- policy -->
                            <div id="policy">
                                <div class="d-flex">
                                    <div class="return text-center mx-2">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="uil uil-repeat border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">10 Days<br>Replacement</a>
                                    </div>
                                    <div class="return text-center mx-2">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="uil uil-truck border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">Daily Tuition<br>Delivered</a>
                                    </div>
                                    <div class="return text-center mx-2">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="uil uil-check-circle border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">1 Year warranty</a>
                                    </div>
                                </div>
                            </div>
                            <!-- policy -->
                            <hr>

                            <!-- order details -->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Delivering by: Mar 29 - Apr 1</small>
                                <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="uil uil-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 42420</small>
                            </div>
                            <!-- order details -->

                            <div class="row">
                                <div class="col-6">
                                    <!-- color -->
                                    <div class="color my-3">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="font-Montserrat">Color</h3>
                                            <div class="p-2 color-yellow-bg rounded-circle"><button type="submit" class="btn font-size-14"></button></div>
                                            <div class="p-2 color-primary-bg rounded-circle"><button type="submit" class="btn font-size-14"></button></div>
                                            <div class="p-2 color-second-bg rounded-circle"><button type="submit" class="btn font-size-14"></button></div>
                                        </div>
                                    </div>
                                    <!-- color -->
                                </div>
                                <div class="col-6">
                                    <!-- product qty section -->
                                    <div class="qty d-flex">
                                        <h6 class="font-Montserrat">Qty</h6>
                                        <div class="px-4 d-flex font-rale">
                                            <button class="qty-up border bg-light" data-id="pro1"><i class="uil uil-angle-up"></i></button>
                                            <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                            <button class="qty-down border bg-light" data-id="pro1"><i class="uil uil-angle-down"></i></button>
                                        </div>
                                    </div>
                                    <!-- product qty section -->
                                </div>
                            </div>
                            <!-- size -->
                            <div class="size my-3">
                                <h6 class="font-Montserrat">Size:</h6>
                                <div class="d-flex justify-content-between w-75">
                                    <div class="font-rubik border p-2">
                                        <button type="submit" class="btn p-0 font-size-14">4GB RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button type="submit" class="btn p-0 font-size-14">6GB RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button type="submit" class="btn p-0 font-size-14">8GB RAM</button>
                                    </div>
                                </div>
                            </div>
                            <!-- size -->
                        </div>

                        <div class="col-12">
                            <h6 class="font-rubik">Product Description</h6>
                            <hr>
                            <p class="font-rale font-size-14">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus dicta voluptatem placeat quaerat quasi quis dolore neque ipsum, dolorem facere optio autem accusantium omnis impedit eius quod veniam tempore. Quas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, repellat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat, deserunt distinctio illo ipsam sunt.
                            </p>
                            <p class="font-rale font-size-14">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus dicta voluptatem placeat quaerat quasi quis dolore neque ipsum, dolorem facere optio autem accusantium omnis impedit eius quod veniam tempore. Quas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, repellat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat, deserunt distinctio illo ipsam sunt.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php endforeach; ?>
            <!-- !product -->