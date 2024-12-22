<?php
include "config/env.php";
if (!empty($_SESSION['users']['id'])) {
    include "views/public/include/pages_header.php";
    include "views/public/include/navbar.php";
?>
    <!-- shop body section start -->
    <section class="cart-body mb-90 gray-border-top pt-35">
        <div class="has-breadcrumb-content">
            <div class="container container-1430">
                <div class="breadcrumb-content" style="flex-direction: column;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                    <h2 class="cart-title mt-40">Cart</h2>
                </div>

                <div class="cart-body-content">
                    <div class="row">
                        <div class="col-xl-8">

                            <div class="product-content">
                                <!-- <form id="UpdateForm"> -->

                                <div class="table-responsive">
                                    <table class="table table-2">
                                        <thead>
                                            <tr>
                                                <th class="remove-porduct">#</th>
                                                <th class="product-image">Image</th>
                                                <th class="product-title">Product</th>
                                                <th>Price</th>
                                                <th class="quantity">Quantity</th>
                                                <th class="total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $join = $h->query("
SELECT add_to_cart.id AS id,
       section_2.price AS price,
       section_2.product_img AS product_img,
       section_2.product_title AS product_title,
       add_to_cart.product_id AS product_id,
       add_to_cart.quantity AS quantity,
       add_to_cart.user_id AS user_id
     
FROM add_to_cart
INNER JOIN section_2 ON section_2.id = add_to_cart.product_id
ORDER BY add_to_cart.id ;
")->fetchAll();

                                            foreach ($join as $row) {

                                                $user = $row['user_id'];
                                                if ($_SESSION['users']['id'] == $user) {
                                                    $product_id = $row['product_id'];
                                                    $price = $row['price'];
                                                    $product_img = $row['product_img'];
                                                    $product_title = $row['product_title'];
                                                    $quantity = $row['quantity'];
                                                    $sum = $quantity * $price;
                                                    @$total_sum += $sum;


                                            ?>

                                                    <tr>
                                                        <td>
                                                            <div class="table-data">
                                                                <button type="button" onclick="delete_tool(<?= $row['product_id'] ?>)" class="close-btn"><i class="fal fa-times"></i></button>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="table-data">
                                                                <img src="<?= @$env['APP_URL'] ?>uploads/profile/<?= @$row['product_img'] ?>" width="80" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data">
                                                                <h6><a href="single-product-3.html" class="title"><?= $product_title ?></a></h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table-data">
                                                                <span class="price">$<?= $price ?></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <form>
                                                                <div class="table-data">
                                                                    <!-- <input type="number" id="quantity-<?= $row['product_id']; ?>" onclick="update_tool(<?= $row['product_id']; ?>)" value="<?= $quantity ?>" name="quantity" style="margin-right: 20px; width: 119px;"> -->
                                                                    <input type="number"
                                                                        id="quantity-<?= $row['product_id']; ?>"
                                                                        onclick="update_tool(<?= $row['product_id']; ?>)"
                                                                        value="<?= $quantity ?>"
                                                                        name="quantity"
                                                                        style="margin-right: 20px; width: 119px;"

                                                                        onkeydown="return false;">
                                                                </div>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <div class="table-data">

                                                                <span class="total">$<?= $sum ?></span>
                                                            </div>
                                                        </td>
                                                    </tr>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cupon">
                                    <form action="#" method="POST">
                                        <input type="text" placeholder="Cupon code" class="text-left pl-3" style="margin-right: 20px; width: 119px;">
                                        <button class="generic-btn border-0 red-hover-btn text-uppercase">Apply Cupon</button>
                                        <!-- <button class="generic-btn border-0 red-hover-btn text-uppercase float-right">Update Cart</button> -->
                                    </form>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="cart-widget">
                                <h4 class="title">Cart Totals</h4>
                                <table class="table table-2 no-border">
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>$<?= @$total_sum ?></td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>
                                                <h6>Flat rate</h6>
                                                <p>Shipping options will be updated during checkout.</p>
                                                <a href="javascript:void(0)" class="price-calculate">Calculate shipping</a>
                                                <div class="calculate-shipping-box">
                                                    <form action="#" method="POST">
                                                        <div class="form-group">
                                                            <div class="cart-select">
                                                                <select name="country" id="country">
                                                                    <option value="uk">United Kingdom</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Country">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Town / City">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" placeholder="Post Code">
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="generic-btn border-0 red-hover-btn text-uppercase ">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td><strong>$<?= @$total_sum ?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form id="RegisterForm" enctype="multipart/form-data">
                                    <!-- <button class="generic-btn border-0 red-hover-btn text-uppercase float-right">Update Cart</button> -->
                                    <a onclick="checkout_tool()" class="mt-40 generic-btn red-hover-btn w-100 d-block" style="height: 50px;">Proceed to checkout</a>
                                </form>
                            </div>
                            <!-- /. cart widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop body section end -->



<?php
    include "views/public/include/pages_footer.php";
} else {

    header("Location: /login");
    exit();
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function delete_tool(deleteid) {
        var csrf_token = $("input[name=csrf]").val();
        $.ajax({
            url: '/delete',
            type: 'POST',
            data: {
                id: deleteid,
                csrf: csrf_token
            },
            success: function(data) {
                console.log(data);

                if (data == 1) {

                    $(".cart-body-content").load(location.href + " .cart-body-content > *");
                }
            }
        });
    }



    function update_tool(id) {
        var csrf_token = $("input[name=csrf]").val();
        var quantity = $("#quantity-" + id).val();

        $.ajax({
            url: '/product',
            type: 'POST',
            data: {
                id: id,
                quantity: quantity,
                csrf: csrf_token
            },
            success: function(data) {
                console.log(data);
                if (data == 1) {

                    $(".cart-body-content").load(location.href + " .cart-body-content > *");
                } else {
                    alert.error('Something went wrong.');
                }
            },
            error: function(xhr, status, error) {
                alert.error('An error occurred: ' + xhr.responseText);
            }
        });
    }




    function checkout_tool() {

        var formData = new FormData(document.getElementById('RegisterForm'));
        $.ajax({
            url: '/checkout_submit',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                if (response == 1) {
                    window.location.href = '/checkout';

                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Success!',
                    //     text: 'Checkout successfully',
                    // });

                    // window.location.href = '/checkout';

                } else if (response == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something Went Wrong!',
                    });
                }
            }
        });
    }
</script>