<?php
include "config/env.php";
if (!empty($_SESSION['users']['id'])) {
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";

$product_id = $id;

$product = $h->table('section_2')->select()->where('slug', $product_id)->fetchAll();
foreach ($product as $row) {
    $id = $row['id'];

}

?>


    <!-- single product start -->
    <section class="single-product mb-90">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" class="mb-40">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Product</li>
                    <li class="breadcrumb-item active" aria-current="page">single Product</li>
                </ol>
            </nav>
            <div class="shop-wrapper">
                <div class="single-product-top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="shop-img">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="tab-1">
                                                <div class="product-img">
                                                    <a class="popup-image" href="#"><img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['product_img'] ?>" class="w-100" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-2">
                                                <div class="product-img">
                                                    <a class="popup-image" href="#"><img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['hover_img'] ?>" class="w-100" alt=""></a>
                                                </div>
                                            </div>
                                             
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="nav nav-pills has-border-img mt-25" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="active" data-toggle="pill" href="#tab-1">
                                                <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['product_img'] ?>" alt="" width="80" height="80">
                                            </a>
                                            <a data-toggle="pill" href="#tab-2">
                                                <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['hover_img'] ?>" width="80" height="80" alt="">
                                            </a>
                                            
                                          </div>
                                    </div>
                                </div>
                                  
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="single-product-sidebar">
                                <div class="product-content">
                                    <div class="single-product-title">
                                        <h2><?= $row['product_title'] ?></h2>
                                    </div>
                                    <div class="single-product-price">$<span><?= $row['price'] ?></span></div>
                                    <div class="single-product-desc mb-25">
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui
                                            facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius
                                            quod ii legunt saepius. Claritas est etiam processus A Capitalize on low hanging
                                            fruit to identify a ballpark value added activity to beta test. Override the
                                            digital...ditional clickthroughs from DevOps. Nanotechnology immersion along the
                                            information highway will close the […]</p>
                                            <div class="product-list single-product-list">
                                                <ul>
                                                    <li>- Light green crewneck sweatshirt.</li>
                                                    <li>- Hand pockets.</li>
                                                    <li>- Relaxed fit.</li>
                                                </ul>
                                            </div>
                                    </div>
                                    
                                    <div class="quick-quantity mt-0">
                                        <form method="POST" id="RegisterForm" enctype="multipart/form-data" >
                                        <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
                                            <input type="number" name="quantityy" class="mb-20" value="1" style="margin-right: 20px; width: 119px;">
                                            <button type="button"  class="list-add-cart-btn red-hover-btn border-0" style="padding-left: 80px;padding-right: 80px;transition: all .5s;" onclick="insert_tool()">add to
                                                cart
                                            </button>
                                        </form>
                                    </div>
                                    <div class="single-product-action mt-35">
                                        <ul>
                                            <form id="wishlist">
                                            <!-- <li><a on href="wishlist.html"><i class="fal fa-heart"></i> add to wishlist</a></li> -->
                                            <li><a>  <button type="button"  class="list-add-cart-btn red-hover-btn border-0" style="padding-left: 80px;padding-right: 80px;transition: all .5s;" onclick="wishlist(<?= $row['id'] ?>)"><i class="fal fa-heart"></i> add to wishlist
                                            </button></a></li>
                                            <!-- <li><button onclick="wishlist(<?= $row['id'] ?>)" style="color: #222;
    font-size: 14px;
    line-height: 25px;
    text-transform: capitalize;
    font-weight: 400;border:none; background:none; "><i class="fal fa-heart"></i> add to wishlist</button></li> -->
                                            <!-- <li><a href="single-product-4.html"><i class="fal fa-abacus"></i> add to compare</a></li> -->
                                            </form>
                                        </ul>
                                    </div>
                                    <div class="single-product-category mt-20">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="title">Categories: </a></li>
                                           
                                            <!-- <li><a href="shop3.html">Chair &amp; Table</a></li> -->
                                            <!-- <li><a href="shop3.html">Chairs</a></li>
                                            <li><a href="shop3.html">Handbeg</a></li> -->
                                            <li><a href="<?= $row['catagories_link'] ?>"><?= $row['catagories'] ?></a></li> 
                                        </ul>
                                    </div>
                                    <div class="share-product mt-20">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="title">Share this product</a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="google +"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Linkdin"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-product-bottom mt-80 gray-border-top">
                    <ul class="nav nav-pills justify-content-center mt-100" role="tablist">
                        <li class="nav-item">
                          <a class="active" data-toggle="pill" href="#desc-tab-1">Description</a>
                        </li>
                      
                        <li class="nav-item">
                          <a class="" data-toggle="pill" href="#desc-tab-2">Reviews (0)</a>
                        </li>
                      </ul>
                      <div class="container container-1200">
                        <div class="tab-content mt-60">
                            <div class="tab-pane fade show active" id="desc-tab-1">
                                <div class="single-product-tab-content">
                                    <h3 class="title mb-30">Description</h3>
                                    <p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs Wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions, ideal for both long visits to the dining table and relaxed lounging. A light chair, easy to move around the dining table and about the room.</p>
                                    <p>The characteristic “Y” provides comfortable back support and stability to the steam-bent top, also inspiring the chair’s names An excellent example of Wegner’s constant striving towards organic simplicity to create sculptural beauty, comfort and outstanding stability.</p>
                                    <p>The gently rounded top together with the back and seat offers a variety of comfortable seating positions, ideal for both long visits to the dining table and relaxed lounging. A light chair, easy to move around the dining table and about the room.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="desc-tab-2">
                                <div class="single-product-tab-content">
                                    <h3 class="title mb-30">Reviews</h3>
                                    <div class="review-box-item">
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-2 col-md-2 col-3 pr-xl-0">
                                                <div class="review-box-img d-block text-right">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/small-<?= $env['APP_URL']?>assets/public/img/1.jpg" width="60" height="60" class="avatar-img" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-11 col-lg-10 col-9 pl-0">
                                                <div class="review-box-content">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <div class="author-name">
                                                                <h6>John96</h6>
                                                                <div class="content">
                                                                    <p class="mb-0">Awesome</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 pr-5-px pl-0">
                                                            <div class="rating text-right">
                                                                <i class="fal fa-star red-color"></i>
                                                                <i class="fal fa-star red-color"></i>
                                                                <i class="fal fa-star red-color"></i>
                                                                <i class="fal fa-star"></i>
                                                                <i class="fal fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>There are no reviews yet.</p>
                                    <h4>Add a review</h4>

                                    <form action="#" method="POST">
                                        <label for="rating">Your Rating</label>
                                        <input type="radio" class="d-none" id="rating">
                                    </form>
                                    <p class="star-rating">
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                    </p>

                                    <div class="form-group">
                                        <label for="review">Review</label>
                                        <textarea name="review" id="review" cols="30" rows="6" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name <span class="required">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox-input">
                                            <input type="checkbox" id="condition" name="condition">
                                        </div>
                                        <label for="condition">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="generic-btn red-hover-btn" style="font-size: 14px !important;">Submit</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single product end -->
    <!-- sugession start -->
    <section class="sugession-product mt-120">
        <div class="container-fluid">
            <div class="generic-title text-center">
                <h2 class="mb-20">You May Also Like</h2>
            </div>
            <div class="main-product-carousel owl-carousel red-nav mt-50">
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-1.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-1-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Light green crewneck
                                        sweatshir</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$58.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-2.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-2-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Light green crewneck
                                        sweatshir</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$58.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-4.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-4-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Tassels Pendant Earrings</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$85.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box mb-40">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-5.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-5-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Shoes</span></a>
                                            <a href="shop3.html" class="product-category"><span>Sneaker</span></a>
                                            <a href="shop3.html" class="product-category"><span>Women</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Leather Courriere duffle
                                        bag</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$3.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box mb-40">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-6.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-6-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                    <span class="sale bg-red text-white">sale!</span>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Shoes</span></a>
                                            <a href="shop3.html" class="product-category"><span>Sneaker</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Wood design bedroom clook</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$45-$10.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box mb-40">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-7.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-7-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                    <span class="sale bg-red text-white">sale!</span>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Capitalize on low hanging
                                        fruit to</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$250.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box mb-40">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-8.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-8-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Light green crewneck
                                        sweatshir</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$58.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-single-item">
                    <div class="col-12">
                        <div class="product-box mb-40">
                            <div class="product-box-wrapper">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-9.jpg" class="w-100" alt="">
                                    <a href="single-product-3.html" class="d-block">
                                        <div class="second-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-9-hover.jpg" alt="" class="w-100">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                </div>

                                <div class="product-desc pb-20">
                                    <div class="product-desc-top">
                                        <div class="categories">
                                            <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                        </div>
                                        <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a>
                                    </div>
                                    <a href="single-product-3.html" class="product-title">Tassels Pendant Earrings</a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$85.00</span>
                                        <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sugession end -->
            <!-- related product start -->
            <section class="related-product mt-120">
                <div class="container-fluid">
                    <div class="generic-title text-center">
                        <h2 class="mb-20">Related Product</h2>
                    </div>
                    <div class="main-product-carousel owl-carousel red-nav mt-50">
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-1.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-1-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Light green crewneck
                                                sweatshir</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$58.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-2.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-2-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Light green crewneck
                                                sweatshir</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$58.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-4.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-4-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Tassels Pendant Earrings</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$85.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box mb-40">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-5.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-5-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Shoes</span></a>
                                                    <a href="shop3.html" class="product-category"><span>Sneaker</span></a>
                                                    <a href="shop3.html" class="product-category"><span>Women</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Leather Courriere duffle
                                                bag</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$3.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box mb-40">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-6.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-6-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                            <span class="sale bg-red text-white">sale!</span>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Shoes</span></a>
                                                    <a href="shop3.html" class="product-category"><span>Sneaker</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Wood design bedroom clook</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$45-$10.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box mb-40">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-7.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-7-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                            <span class="sale bg-red text-white">sale!</span>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Capitalize on low hanging
                                                fruit to</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$250.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box mb-40">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-8.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-8-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Light green crewneck
                                                sweatshir</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$58.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-single-item">
                            <div class="col-12">
                                <div class="product-box mb-40">
                                    <div class="product-box-wrapper">
                                        <div class="product-img">
                                            <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-9.jpg" class="w-100" alt="">
                                            <a href="single-product-3.html" class="d-block">
                                                <div class="second-img">
                                                    <img src="<?= $env['APP_URL']?>assets/public/img/product/farniture-9-hover.jpg" alt="" class="w-100">
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                        </div>
        
                                        <div class="product-desc pb-20">
                                            <div class="product-desc-top">
                                                <div class="categories">
                                                    <a href="shop3.html" class="product-category"><span>Woman</span></a>
                                                </div>
                                                <a href="wishlist.html" class="wishlist float-right"><span><i
                                                            class="fal fa-heart"></i></span></a>
                                            </div>
                                            <a href="single-product-3.html" class="product-title">Tassels Pendant Earrings</a>
                                            <div class="price-switcher">
                                                <span class="price switcher-item">$85.00</span>
                                                <a href="cart.html" class="add-cart text-capitalize switcher-item">+add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- related product end -->


<?php

include "views/public/include/pages_footer.php";
} else {

    header("Location: /login");
    exit();
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


    function insert_tool() {

        var formData = new FormData(document.getElementById('RegisterForm'));
        $.ajax({
            url: '/product',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                
                if (response == '1') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Add to cart successfully',
                    });
                    document.getElementById('RegisterForm').reset();

                } else if (response == '0') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something Went Wrong!',
                    });
                } 
            },
            error: function(xhr, status, error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill the form correctly',
                });
            }
        });
    }



    function wishlist(id) {
        var csrf_token = $("input[name=csrf]").val();
        $.ajax({
            url: '/wishlist',
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
                        title: 'success!',
                        text: 'product added to wishlist',
                    });
                //    $(".cart-body-content").load(location.href + " .cart-body-content > *");
                }
                else if (data == 0){
                    Swal.fire({
                        icon: 'error',
                        title: 'error!',
                        text: 'product already exists in wishlist',
                    });

                }
            }
        });
    }






</script>