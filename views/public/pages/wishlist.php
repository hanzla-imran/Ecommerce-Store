<?php
include "config/env.php";
if (!empty($_SESSION['users']['id'])) {
    include "views/public/include/pages_header.php";
    include "views/public/include/navbar.php";
?>




    <!-- shop body section start -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area" data-background="<?= $env['APP_URL'] ?>assets/public/img/bg/page-title.html">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content" style="flex-direction: column;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                                </ol>
                            </nav>
                            <h2 class="cart-title mt-40">Wishlist</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- Cart Area Strat-->
        <section class="cart-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table" id="delete">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="product-price">Unit Price</th>
                                            <th class="product-quantity">Add to card</th>


                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $join = $h->query("
SELECT wishlist.id AS id,
section_2.price AS price,
section_2.product_img AS product_img,
section_2.product_title AS product_title,
wishlist.product_id AS product_id,
wishlist.user_id AS user_id


FROM wishlist
INNER JOIN section_2 ON section_2.id = wishlist.product_id
ORDER BY wishlist.id ;
")->fetchAll();

                                        foreach ($join as $row) {
                                            $user = $row['user_id'];
                                            if ($_SESSION['users']['id'] == $user) {
                                            $product_id = $row['product_id'];
                                            $price = $row['price'];
                                            $product_img = $row['product_img'];
                                            $product_title = $row['product_title'];
                                        ?>

                                            <tr>
                                                <td class="product-thumbnail"><a href="single-product-4.html"><img src="<?= @$env['APP_URL'] ?>uploads/profile/<?= @$row['product_img'] ?>"
                                                            alt=""></a></td>
                                                <td class="product-name"><a href="single-product-4.html"><?= @$row['product_title'] ?></a></td>
                                                <td class="product-price"><span class="amount"><?= @$row['price'] ?></span></td>
                                                <td class="product-quantity">
                                                    <form method="POST" id="RegisterForm" enctype="multipart/form-data">
                                                        <button type="button" class="btn theme-btn-2" onclick="insert_tool(<?= $row['product_id'] ?>)">Add TO Cart</button>
                                                    </form>
                                                </td>
                                                <td><button type="button" onclick="delete_tool(<?= $row['product_id'] ?>)" class="close-btn"><i class="fal fa-times"></i></button></td>
                                            </tr>


                                        <?php
                                        }
                                    }
                                        ?>
                                    </tbody>

                                </table>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Area End-->
    </main>

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
            url: '/deletee',
            type: 'POST',
            data: {
                id: deleteid,
                csrf: csrf_token
            },
            success: function(data) {
                console.log(data);

                if (data == 1) {
                    $("#delete").load(location.href + " #delete > *");
                }
            }
        });
    }



    function insert_tool(id) {
        var csrf_token = $("input[name=csrf]").val();
        $.ajax({
            url: '/wishlist2',
            type: 'POST',
            data: {
                id: id,
                csrf: csrf_token
            },
            success: function(data) {
                console.log(data);

                if (data == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Add to cart Successfully',
                    });
                    $("#delete").load(location.href + " #delete > *");

                } else if (data == 3) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Opss...',
                        text: 'Product is already in your cart',
                    });
                    $("#data").load(location.href + " #data > *");

                }
            }
        });
    }
</script>