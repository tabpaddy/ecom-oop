
<section class="py-3" id="cart">
                <div class="container-fluid w-75">
                    <h5 class="font-Montserrat font-size-20">Shopping Cart</h5>

                    <!-- shopping cart items -->
                        <div class="row">
                            <div class="col-sm-9">
                                <!-- empty Cart -->
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-12 text-center py-2">
                                        <img src="./assets/blog/empty_cart.png" alt="empty cart" class="img-fluid" style="height: 200px;">
                                        <p class="font-Montserrat font-size-16 text-black-50">Empty Cart</p>
                                    </div>
                                </div>
                                <!-- empty Cart -->
                                
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