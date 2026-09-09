<?php include ("header.php"); ?>

        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="page-header__shape"></div>
            <!-- /.page-header__shape -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-right">Shop Cart</h2>
                <ul class="careold-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Products</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <!-- Cart Start -->
        <section class="cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table cart-page__table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-page__table__meta">
                                                <div class="cart-page__table__meta__img">
                                                    <img src="assets/images/products/cart-1-1.jpg" alt="careold">
                                                    <a href="cart.php" class="cart-page__table__meta__remove">x</a>
                                                </div>
                                                <h3 class="cart-page__table__meta__title"><a href="product-details.php">Bp Machine</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-details__quantity">
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i class="icon-arrow-down"></i></button>
                                                    <input type="text" id="1" value="1">
                                                    <button type="button" class="add"><i class="icon-arrow-up"></i></button>
                                                </div>
                                            </div><!-- /.quantity -->
                                        </td>
                                        <td>$80.00</td>
                                        <td>$80.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="cart-page__coupone-form-title">Coupon code:</h3>
                            <form action="#" class="cart-page__coupone-form">
                                <input type="text" placeholder="Type Your Coupon Code" class="cart-cupon__input">
                                <button type="submit" class="careold-btn"><i>Add Code</i><span>Add Code</span></button>
                            </form>
                            <a class="cart-page__link" href="checkout.php">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page__cart-total">
                            <ul class="cart-page__cart-total__list list-unstyled">
                                <li><span>Cart Total</span><span class="cart-page__cart-total__amount">$80.00</span></li>
                                <li><span>SubTotal</span><span class="cart-page__cart-total__amount">$80.00</span></li>
                                <li>
                                    <span>Shipping</span>
                                    <span class="cart-page__cart-total__shipping">
                                        <span class="cart-page__cart-total__shipping__rate">Flat rate: $20.00</span>
                                        Shipping to UAS
                                        <a class="cart-page__cart-total__shipping__link" href="cart.php">Change address</a>
                                    </span>
                                </li>
                                <li><span>Total</span><span class="cart-page__cart-total__amount">$100.00</span></li>
                            </ul>
                            <div class="cart-page__buttons">
                                <a href="checkout.php" class="careold-btn"><i>Proceed to checkout</i><span>Proceed to checkout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart End -->

       <?php include ("footer.php"); ?>