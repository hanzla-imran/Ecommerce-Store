<?php
include "config/env.php";
if (!empty($_SESSION['users']['id'])) {
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";
?>






<!-- shop body section start -->
<main>

<!-- breadcrumb-area-start -->
<section class="breadcrumb-area" data-background="<?= $env['APP_URL']?>assets/public/img/bg/page-title.html">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-content" style="flex-direction: column;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                 <h2 class="cart-title mt-40">Checkout</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- coupon-area start -->
<section class="coupon-area pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                sit amet ipsum luctus.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row-last">
                                    <label>Password <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row">
                                    <button class="btn theme-btn" type="submit">Login</button>
                                    <label>
                                        <input type="checkbox" />
                                        Remember me
                                    </label>
                                </p>
                                <p class="lost-password">
                                    <a href="javascript:void(0)">Lost your password?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input type="text" placeholder="Coupon Code" />
                                    <button class="btn theme-btn" type="submit">Apply Coupon</button>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- coupon-area end -->
<!-- checkout-area start -->
<section class="checkout-area pb-70">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="country-select">
                                    <label>Country <span class="required">*</span></label>
                                    <select>
                                        <option value="volvo">bangladesh</option>
                                        <option value="saab">Algeria</option>
                                        <option value="mercedes">Afghanistan</option>
                                        <option value="audi">Ghana</option>
                                        <option value="audi2">Albania</option>
                                        <option value="audi3">Bahrain</option>
                                        <option value="audi4">Colombia</option>
                                        <option value="audi5">Dominican Republic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" placeholder="Town / City" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox" />
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox_info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning
                                        customer please login at the top of the page.</p>
                                    <label>Account password <span class="required">*</span></label>
                                    <input type="password" placeholder="password" />
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id="ship-box" type="checkbox" />
                                </h3>
                            </div>
                            <div id="ship-box-info">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select>
                                                <option value="volvo">bangladesh</option>
                                                <option value="saab">Algeria</option>
                                                <option value="mercedes">Afghanistan</option>
                                                <option value="audi">Ghana</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php

$join = $h->query("
SELECT checkout.id AS id,
section_2.price AS price,
section_2.product_img AS product_img,
section_2.product_title AS product_title,
checkout.product_id AS product_id,
checkout.quantity AS quantity

FROM checkout
INNER JOIN section_2 ON section_2.id = checkout.product_id
ORDER BY checkout.id ;
")->fetchAll();

foreach ($join as $row) {
    
    // $user = $row['user_id'];
    // if ($_SESSION['users']['id'] == $user) {
    $product_id = $row['product_id'];
    $price = $row['price'];
    $product_img = $row['product_img'];
    $product_title = $row['product_title'];
    $quantity = $row['quantity'];
    $sum = $quantity * $price;
    @$total_sum += $sum;
    // }
}
?>
                <div class="col-lg-6">
                    <div class="your-order mb-30 ">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr class="cart_item"> -->
                                        <!-- <td class="product-name">
                                            Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                        </td> -->
                                        <!-- <td class="product-total">
                                            <span class="amount">$165.00</span>
                                        </td> -->
                                    <!-- </tr> -->
                                    <!-- <tr class="cart_item">
                                        <td class="product-name">
                                            Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$50.00</span>
                                        </td>
                                    </tr> -->
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">$<?=@$total_sum?></span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" />
                                                    <label>
                                                        Flat Rate: <span class="amount">$7.00</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" />
                                                    <label>Free Shipping:</label>
                                                </li>
                                                <li></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">$<?=@$total_sum?></span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="payment-method">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Direct Bank Transfer
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Make your payment directly into our bank account. Please use your Order ID
                                            as the payment
                                            reference. Your order won’t be
                                            shipped until the funds have cleared in our account.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Cheque Payment
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Please send your cheque to Store Name, Store Street, Store Town, Store
                                            State / County, Store
                                            Postcode.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                PayPal
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Pay via PayPal; you can pay with your credit card if you don’t have a
                                            PayPal account.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment mt-20">
                                <button type="submit" class="btn theme-btn">Place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- checkout-area end -->

</main>






<?php
include "views/public/include/pages_footer.php";
} else {

    header("Location: /login");
    exit();
}
?>