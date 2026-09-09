<?php include ("header.php"); ?>

        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="page-header__shape"></div>
            <!-- /.page-header__shape -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-right">Checkout</h2>
                <ul class="careold-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Products</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <!-- Checkout Start -->
        <section class="checkout-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="checkout-page__billing-address">
                            <h2 class="checkout-page__billing-address__title">Billing details</h2>
                            <form class="checkout-page__form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">First name *</label>
                                            <input type="text" name="first_name" value="" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">Last name *</label>
                                            <input type="text" name="last_name" value="" placeholder="Last name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">Country / Region *</label>
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected="">London</option>
                                                <option value="1">Canada</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">Street address *</label>
                                            <input type="text" name="Street_address" value="" placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">Town / City *</label>
                                            <input type="text" name="Town/City" value="" placeholder="Town / City" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">State *</label>
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected="">Abbey Road</option>
                                                <option value="1">Dhaka</option>
                                                <option value="2">Rangpur</option>
                                                <option value="3">Rajshahi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">ZIP Code *</label>
                                            <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">Phone *</label>
                                            <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">Email address *</label>
                                            <input name="email" type="email" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-page__check-wrapper">
                                            <div class="checkout-page__check-box">
                                                <input type="checkbox" name="skipper4" id="skipper4" checked="">
                                                <label for="skipper4">Ship to a different address?<span></span></label>
                                            </div>
                                            <div class="checkout-page__check-box">
                                                <input type="checkbox" name="skipper5" id="skipper5">
                                                <label for="skipper5">Create an account?<span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-page__input-box">
                                            <label class="checkout-page__label-text">Order notes (optional)</label>
                                            <textarea placeholder="Note about your order" name="form_order_notes"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="checkout-page__cost-process">
                            <div class="cart-process-wrap">
                                <h2 class="checkout-page__cost-process-title">Order summary</h2>
                                <div class="cart-page__carttotals-cost cart-page__common d-flex align-items-center justify-content-between">
                                    <div class="cart-page__quantity cart-page__title-name product--name d-flex align-items-center">
                                        <div class="cart-page__table__meta-img">
                                            <img src="assets/images/products/cart-1-1.jpg" alt="careold">
                                        </div>
                                        <h3 class="cart-page__table__meta__title"><a href="product-details.php">Bp Machine</a></h3>
                                    </div>
                                    <strong class="cart-page__cartprice">$300.00</strong>
                                </div>
                                <div class="cart-page__carttotals-cost cart-page__common d-flex align-items-center justify-content-between">
                                    <strong class="cart-page__cartname">Cart Total</strong>
                                    <strong class="cart-page__cartprice">$300.00</strong>
                                </div>
                                <div class="cart-page__subtotals-cost cart-page__common d-flex align-items-center justify-content-between">
                                    <strong class="cart-page__cartname">SubTotal</strong>
                                    <strong class="cart-page__cartprice">$300.00</strong>
                                </div>
                                <div class="cart-page__shipping-area cart-page__common d-flex align-items-center justify-content-between">
                                    <strong class="cart-page__cartname">Shipping</strong>
                                    <div class="cart-page__flat-rate">
                                        <span>Flat rate: $20.00</span>
                                        <small>Shipping to UAS</small>
                                        <a href="#" class="change-address">Change address</a>
                                    </div>
                                </div>
                                <div class="cart-page__intotals cart-page__common d-flex align-items-center justify-content-between">
                                    <strong class="cart-page__cartname">Total</strong>
                                    <strong class="cart-page__cartprice">$320.00</strong>
                                </div>
                            </div>
                            <div class="cart-process-wrap checkout-page__payment">
                                <h2 class="checkout-page__cost-process-title">Payment information</h2>
                                <div class="checkout-page__payment__select-wrap">
                                    <div class="checkout-page__payment__select">
                                        <input type="checkbox" name="skipper1" id="skipper1">
                                        <label for="skipper1"><span></span>Direct bank transfer</label>
                                    </div>
                                    <div class="checkout-page__payment__select">
                                        <input type="checkbox" name="skipper2" id="skipper2" checked="">
                                        <label for="skipper2"><span></span>Online Payment</label>
                                    </div>
                                    <div class="checkout-page__payment__select">
                                        <input type="checkbox" name="skipper3" id="skipper3">
                                        <label for="skipper3"><span></span>Paypal</label>
                                    </div>
                                </div>
                                <div class="row payment_condition-check">
                                    <div class="col-xl-12">
                                        <div class="checkout-page__check-box">
                                            <input type="checkbox" name="payment4" id="payment4">
                                            <label for="payment4">I have read and agree to the website terms and conditions *<span></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-oder-btn-wrap">
                                    <a href="checkout.php" class="careold-btn"><i>Place order</i><span>Place order</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkout End -->

        <?php include ("footer.php"); ?>