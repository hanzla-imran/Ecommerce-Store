<?php
include "config/env.php";
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";
?>
<div class="shop-body mb-90">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="mb-40">
            <ol class="breadcrumb p-0 m-0">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
        <div class="shop-wrapper">
            <div class="row">

                <div class="col-12">
                    <div class="filter-heading">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="filter-shown-item">
                                    <p class="mb-0">Showing <span>1</span>–<span>24</span> of <span
                                            class="total_count">56</span> results</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="shop-filter-tab">
                                    <ul class="nav nav-pills">
                                        <li><span>Views</span></li>
                                        <li class="nav-item">
                                            <a data-toggle="pill" href="#shop-tab-1"
                                                data-toggle="tooltip" data-placement="top" title="2 grid"><i
                                                    class="fal fa-line-columns"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="pill" href="#shop-tab-2" data-placement="top"
                                                title="3 grid"><i class="fal fa-border-none"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="pill" href="#shop-tab-3" data-placement="top"
                                                title="4 grid" class="active"><i class="fal fa-border-center-v"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="pill" href="#shop-tab-4" data-placement="top"
                                                title="list view"><i class="fal fa-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12 d-flex justify-content-end position-static">
                                <!-- <div class="sorting d-inline-block">
                                    <select name="sort" id="shop-sort">
                                        <option value="default">Default sorting</option>
                                        <option value="default">Short by popularity</option>
                                        <option value="default">Sort by average rating</option>
                                        <option value="default">Sort by latest</option>
                                        <option value="default">Sort by price: low to high</option>
                                        <option value="default">Sort by price: high to low</option>
                                    </select>
                                </div> -->
                                <div class="filter">
                                    <h6 class="d-inline-block filter-widget-toggle">Filter</h6>
                                    <div class="filter-popup">
                                        <div class="row">
                                            <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="filter-popup-item">
                                                    <div class="widget">
                                                        <h4 class="mb-30">Filter By Color</h4>
                                                        <ul class="color-list">
                                                            <li style="background-color: #000;"></li>
                                                            <li style="background-color: #1E73BE;"></li>
                                                            <li style="background-color: #FFD700;"></li>
                                                            <li style="background-color: #C9C9C9;"></li>
                                                            <li style="background-color: #008000;"></li>
                                                            <li style="background-color: #FFFF00;"></li>
                                                            <li style="background-color: #FFFFFF;"></li>
                                                            <li style="background-color: #DD3333;"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="widget">
                                                    <h4 class="mb-30">Filter By Size</h4>
                                                    <div class="size-link">
                                                        <a href="shop2.html">3xl</a>
                                                        <a href="shop2.html">l</a>
                                                        <a href="shop2.html">m</a>
                                                        <a href="shop2.html">s</a>
                                                        <a href="shop2.html">xl</a>
                                                        <a href="shop2.html">xxl</a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="widget">
                                                    <h4 class="mb-30">Filter By Price</h4>
                                                    <form id="filterForm" method="GET" action="/shop">
                                                        <div class="price-filter">
                                                            <div id="slider-range-2"></div>
                                                            <input type="hidden" id="min_price" name="min_price" value="50">
                                                            <input type="hidden" id="max_price" name="max_price" value="150">
                                                            <div class="filter-form-submit mt-35">
                                                                <a id="shopLink" href="/shop?min=50&max=150">Shop Now</a>
                                                                <button type="submit">Filter</button>
                                                                <div class="filter-price d-inline-block pl-20">
                                                                    Price: <input type="text" id="amount" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>                                                
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 position-static">
                                                <div class="widget">
                                                    <h4 class="mb-30">Popular Tags</h4>
                                                    <div class="category-list">
                                                        <ul>
                                                            <li><a href="/shop?search=men">men</a></li>
                                                            <li><a href="/shop?search=women">women</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. filter heading -->
                    <div class="filter-content">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="shop-tab-1">
                                <div class="product-wrapper mt-55">
                                    <div class="row">
                                        <?php
                                        $id = isset($_GET['search']) ? $_GET['search'] : null;
                                        $min_price = isset($_GET['min_price']) ? intval($_GET['min_price']) : 0;
                                        $max_price = isset($_GET['max_price']) ? intval($_GET['max_price']) : PHP_INT_MAX;


                                        $select = $h->table('section_2')->select();


                                        if ($id == 'men') {
                                            $select->where('catagories', '=', 'Men');
                                        } elseif ($id == 'women') {
                                            $select->where('catagories', '=', 'Women');
                                        }


                                        if ($min_price > 0 || $max_price < PHP_INT_MAX) {
                                            $select->where('price', '>=', $min_price)
                                                ->where('price', '<=', $max_price);
                                        }


                                        $select = $select->fetchAll();



                                        foreach ($select as $row) {

                                            $id = $row['id'];

                                        ?>

                                            <div class="col-6">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['product_img'] ?>" class="w-100" alt="">
                                                            <a href="/product/<?= $row['slug']; ?>" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['hover_img'] ?>" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="<?= $row['quick_view_link'] ?>"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="<?= $row['catagories_link'] ?>"
                                                                        class="product-category"><span><?= $row['catagories'] ?></span></a>
                                                                </div>
                                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                                            class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="#" class="product-title"><?= $row['product_title'] ?></a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$<?= $row['price'] ?></span>
                                                                <a href="cart.html"
                                                                    class="add-cart text-capitalize switcher-item">+add
                                                                    to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="text-center mt-20">
                                        <a href="shop.html" class="load-more">LOAD MORE...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="shop-tab-2">
                                <div class="product-wrapper mt-55">
                                    <div class="row">

                                        <?php
                                        $id = isset($_GET['search']) ? $_GET['search'] : null;
                                        $min_price = isset($_GET['min_price']) ? intval($_GET['min_price']) : 0;
                                        $max_price = isset($_GET['max_price']) ? intval($_GET['max_price']) : PHP_INT_MAX;

                                       
                                        $select = $h->table('section_2')->select();
                                       
                                        if ($id == 'men') {
                                            $select->where('catagories', '=', 'Men');
                                        } elseif ($id == 'women') {
                                            $select->where('catagories', '=', 'Women');
                                        }
                                       
                                        if ($min_price > 0 || $max_price < PHP_INT_MAX) {
                                            $select->where('price', '>=', $min_price)
                                                ->where('price', '<=', $max_price);
                                        }
                                       
                                        $select = $select->fetchAll();
                                        foreach ($select as $row) {
                                            $id = $row['id'];
                                        ?>
                                            <div class="col-xl-4 col-md-4 col-6">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">

                                                            <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['product_img'] ?>" class="w-100" alt="">
                                                            <a href="/product/<?= $row['slug']; ?>" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['hover_img'] ?>" alt="" class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="<?= $row['quick_view_link'] ?>"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="<?= $row['catagories_link'] ?>" class="product-category"><span><?= $row['catagories'] ?></span></a>
                                                                </div>
                                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                                            class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="#" class="product-title"><?= $row['product_title'] ?></a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$<?= $row['price'] ?></span>
                                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                                    cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="text-center mt-20">
                                        <a href="shop.html" class="load-more">LOAD MORE...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  show active" id="shop-tab-3">
                                <div class="product-wrapper mt-55">
                                    <div class="row">

                                        <?php
                                        $id = isset($_GET['search']) ? $_GET['search'] : null;
                                        $min_price = isset($_GET['min_price']) ? intval($_GET['min_price']) : 0;
                                        $max_price = isset($_GET['max_price']) ? intval($_GET['max_price']) : PHP_INT_MAX;

                                        
                                        $select = $h->table('section_2')->select();

                                        
                                        if ($id == 'men') {
                                            $select->where('catagories', '=', 'Men');
                                        } elseif ($id == 'women') {
                                            $select->where('catagories', '=', 'Women');
                                        }

                                        
                                        if ($min_price > 0 || $max_price < PHP_INT_MAX) {
                                            $select->where('price', '>=', $min_price)
                                                ->where('price', '<=', $max_price);
                                        }

                                       
                                        $select = $select->fetchAll();


                                        foreach ($select as $row) {

                                            $id = $row['id'];


                                        ?>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">

                                                            <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['product_img'] ?>" class="w-100" alt="">
                                                            <a href="/product/<?= $row['slug']; ?>" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['hover_img'] ?>" alt="" class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="<?= $row['quick_view_link'] ?>"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="<?= $row['catagories_link'] ?>" class="product-category"><span><?= $row['catagories'] ?></span></a>
                                                                </div>
                                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                                            class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="#" class="product-title"><?= $row['product_title'] ?></a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$<?= $row['price'] ?></span>
                                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                                    cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php
                                        }
                                        ?>



                                    </div>
                                    <div class="text-center mt-20">
                                        <a href="shop.html" class="load-more">LOAD MORE...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="shop-tab-4">
                                <div class="product-wrapper mt-55">
                                    <div class="product-box mb-40">
                                        <div class="product-box-wrapper">
                                            <div class="list-product mb-50">
                                                <div class="list-product-wrapper">
                                                    <div class="row">

                                                        <?php
                                                        $id = isset($_GET['search']) ? $_GET['search'] : null;
                                                        $min_price = isset($_GET['min_price']) ? intval($_GET['min_price']) : 0;
                                                        $max_price = isset($_GET['max_price']) ? intval($_GET['max_price']) : PHP_INT_MAX;

                                                      
                                                        $select = $h->table('section_2')->select();

                                                        if ($id == 'men') {
                                                            $select->where('catagories', '=', 'Men');
                                                        } elseif ($id == 'women') {
                                                            $select->where('catagories', '=', 'Women');
                                                        }
                                                      
                                                        if ($min_price > 0 || $max_price < PHP_INT_MAX) {
                                                            $select->where('price', '>=', $min_price)
                                                                ->where('price', '<=', $max_price);
                                                        }

                                                        $select = $select->fetchAll();

                                                        foreach ($select as $row) {

                                                            $id = $row['id'];


                                                        ?>
                                                            <div class="product-box mb-40">
                                                                <div class="product-box-wrapper">
                                                                    <div class="list-product mb-50">
                                                                        <div class="list-product-wrapper">
                                                                            <div class="row">
                                                                                <div class="col-xl-4 col-lg-4 col-md-4">
                                                                                    <div class="list-product-img">
                                                                                        <div class="product-img">
                                                                                            <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['product_img'] ?>" class="w-100"
                                                                                                alt="">
                                                                                            <a href="/product/<?= $row['slug']; ?>" class="d-block">
                                                                                                <div class="second-img">
                                                                                                    <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['hover_img'] ?>"
                                                                                                        alt="" class="w-100">
                                                                                                </div>
                                                                                            </a>
                                                                                            <a href="<?= $row['quick_view_link'] ?>"
                                                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                                                view</a>
                                                                                            <span
                                                                                                class="sale bg-red text-white">sale!</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-8 col-lg-8 col-md-8">
                                                                                    <div class="list-product-desc">
                                                                                        <h3><a href="single-product-4.html" class="title mb-15"><?= $row['product_title'] ?></a></h3>
                                                                                        <div class="rating">
                                                                                            <i class="fal fa-star active"></i>
                                                                                            <i class="fal fa-star active"></i>
                                                                                            <i class="fal fa-star active"></i>
                                                                                            <i class="fal fa-star active"></i>
                                                                                            <i class="fal fa-star"></i>
                                                                                        </div>
                                                                                        <div class="price"><span class="red-color">$<?= $row['price'] ?></span><del>$499</del></div>
                                                                                        <div class="desc">
                                                                                            <p>Typi non habent claritatem insitam, est usus
                                                                                                legentis in iis qui facit eorum claritatem.
                                                                                                Investigationes demonstraverunt lectores legere
                                                                                                me lius quod ii legunt saepius. Claritas est
                                                                                                etiam processus A Capitalize on low hanging
                                                                                                fruit to identify a ballpark value added
                                                                                                activity to beta test. Override the digital
                                                                                                divide with additional clickthroughs from DevOps
                                                                                                […]</p>
                                                                                            <ul>
                                                                                                <li>– Light green crewneck sweatshirt.</li>
                                                                                                <li>– Hand pockets.</li>
                                                                                                <li>– Relaxed fit.</li>
                                                                                            </ul>
                                                                                            <a href="cart.html"
                                                                                                class="list-add-cart-btn text-capitalize mt-40">+add
                                                                                                to cart</a>
                                                                                            <a href="wishlist.html" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="wishlist"><span><i
                                                                                                        class="fal fa-heart"></i></span></a>
                                                                                            <a href="javascript:void(0)" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="compare"><span><i
                                                                                                        class="fal fa-abacus"></i></span></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /. list product -->
                                                                </div>
                                                            </div>

                                                        <?
                                                        }
                                                        ?>

                                                        <!-- /. product box -->
                                                        <div class="text-center mt-20">
                                                            <a href="shop.html" class="load-more">LOAD MORE...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /. filter content -->
                                    </div>
                                    <!-- /. shop products -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    include "views/public/include/pages_footer.php";
                    ?>
                    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

                    <script>
                        $(document).ready(function() {

                            $("#slider-range-2").slider({
                                range: true,
                                min: 0,
                                max: 200,
                                values: [50, 150],
                                slide: function(event, ui) {

                                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);


                                    $("#min_price").val(ui.values[0]);
                                    $("#max_price").val(ui.values[1]);


                                    $("#shopLink").attr("href", `/shop?min=${ui.values[0]}&max=${ui.values[1]}`);
                                }
                            });


                            const minInitial = $("#slider-range-2").slider("values", 0);
                            const maxInitial = $("#slider-range-2").slider("values", 1);

                            $("#amount").val(`$${minInitial} - $${maxInitial}`);
                            $("#shopLink").attr("href", `/shop?min=${minInitial}&max=${maxInitial}`);
                        });
                    </script>