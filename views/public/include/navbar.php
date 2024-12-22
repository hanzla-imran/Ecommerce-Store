 <!-- header section start -->
  <?php
include "config/env.php";
  ?>
 <header class="header header-2 pt-30 pb-20  header-sticky header-static">
     <div class="container-fluid">
         <div class="header-nav header-nav-2 position-relative">
             <div class="row align-items-center">


                 <div class="col-xl-5 col-lg-6 hidden-md position-static">
                     <div class="header-nav">
                         <nav>
                             <ul>
                                 <li><a href="/home" class="active"><span>Home</span></a>


                                 </li>
                                 <li class="position-static"><a href="/shop"><span>Shop</span></a>

                                 </li>
                                 <li><a href="/blog"><span>Blog </span> </a>

                                 </li>
                                 <li><a href="/portfolio"><span>Portfolio</span> </a>

                                 </li>
                                 <li><a href="javascript:void(0)"><span>Page</span> <i class="fal fa-angle-down"></i></a>
                                     <ul class="submenu">
                                         <li><a href="/about">About</a></li>
                                         <li><a href="/question">Frequently Questions</a></li>

                                     </ul>
                                 </li>
                                 <li><a href="/contact"><span>Contact</span></a></li>
                             </ul>
                         </nav>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-3">
                     <div class="logo">
                         <a href="/home"><img src="<?= $env['APP_URL'] ?>assets/public/img/logo/logo1.png" alt=""></a>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-3 col-6 col-md-6 col-sm-6 col-9">
                     <div class="header-right">
                         <ul class="text-right">


                             <?php
                                @$user = $_SESSION['users']['id'];

                                if (!empty($user)) {

                                ?>

                                 <!-- <div class="acc-title">
                                            <a href="/sign_out"><span class="user-icon"><i class="fa-solid fa-right-from-bracket"></i></span></a>
                                        </div> -->
                             <?php
                                } else {
                                ?>


                                 <li><a href="/login" class="account"><i class="fal fa-user-friends"></i>
                                         <article class="account-registar d-inline-block">Login/Sign up</article>
                                     </a></li>
                             <?php
                                }
                                ?>


                             <!-- <li><a href="/login" class="account"><i class="fal fa-user-friends"></i>
                                     <article class="account-registar d-inline-block">Login/Sign up</article>
                                 </a></li> -->
                             <li><a href="javascript:void(0)"><i class="fal fa-search"></i></a>

                                 <!-- search popup -->
                                 <div id="search-popup">
                                     <div class="close-search-popup">
                                         <i class="fal fa-times"></i>
                                     </div>
                                     <div class="search-popup-inner mt-135">
                                         <div class="search-title text-center">
                                             <h2>Search</h2>
                                         </div>

                                         <div class="search-content pt-55">
                                             <ul class="text-center">
                                                 <li><a href="javascript:void(0)" class="active">All categories</a></li>
                                                 <li><a href="javascript:void(0)">Clothing</a></li>
                                                 <li><a href="javascript:void(0)">Gift Cards</a></li>
                                                 <li><a href="javascript:void(0)">Handbag</a></li>
                                                 <li><a href="javascript:void(0)">Kids</a></li>
                                                 <li><a href="javascript:void(0)">Shoes</a></li>
                                                 <li><a href="javascript:void(0)">Sneaker</a></li>
                                                 <li><a href="javascript:void(0)">Women</a></li>
                                             </ul>

                                             <div class="search-form mt-35">
                                                 <form action="#" method="post">
                                                     <input type="text" placeholder="Search Products...">
                                                     <button type="submit"><i class="fal fa-search"></i></button>
                                                 </form>
                                             </div>

                                             <div class="search-result-list">
                                                 <ul class="text-left">
                                                     <li class="d-block d-flex align-items-center">
                                                         <div class="search-result-img">
                                                             <img src="<?= $env['APP_URL'] ?>assets/public/img/product/1.jpg" class="w-100" alt="">
                                                         </div>
                                                         <div class="search-result-desc pl-10">
                                                             <a href="single-product-4.html" class="title px-0">ELLE - Recliner syntheti chair</a>
                                                             <div class="price">$<span>399</span></div>
                                                         </div>
                                                     </li>
                                                     <li class="d-block d-flex align-items-center">
                                                         <div class="search-result-img">
                                                             <img src="<?= $env['APP_URL'] ?>assets/public/img/product/2.jpg" class="w-100" alt="">
                                                         </div>
                                                         <div class="search-result-desc pl-10">
                                                             <a href="single-product-4.html" class="title px-0">RIMINI - Folding leather deck chair</a>
                                                             <div class="price">$<span>399</span></div>
                                                         </div>
                                                     </li>
                                                     <li class="d-block d-flex align-items-center">
                                                         <div class="search-result-img">
                                                             <img src="<?= $env['APP_URL'] ?>assets/public/img/product/3.jpg" class="w-100" alt="">
                                                         </div>
                                                         <div class="search-result-desc pl-10">
                                                             <a href="single-product-4.html" class="title px-0">LANDSCAPE - Folding fabric deck chair</a>
                                                             <div class="price">$<span>399</span></div>
                                                         </div>
                                                     </li>
                                                     <li class="d-block d-flex align-items-center">
                                                         <div class="search-result-img">
                                                             <img src="<?= $env['APP_URL'] ?>assets/public/img/product/1.jpg" class="w-100" alt="">
                                                         </div>
                                                         <div class="search-result-desc pl-10">
                                                             <a href="single-product-4.html" class="title px-0">ELLE - Recliner syntheti chair</a>
                                                             <div class="price">$<span>399</span></div>
                                                         </div>
                                                     </li>
                                                     <li class="d-block d-flex align-items-center">
                                                         <div class="search-result-img">
                                                             <img src="<?= $env['APP_URL'] ?>assets/public/product/2.jpg" class="w-100" alt="">
                                                         </div>
                                                         <div class="search-result-desc pl-10">
                                                             <a href="single-product-4.html" class="title px-0">RIMINI - Folding leather deck chair</a>
                                                             <div class="price">$<span>399</span></div>
                                                         </div>
                                                     </li>
                                                     <li class="d-block d-flex align-items-center">
                                                         <div class="search-result-img">
                                                             <img src="<?= $env['APP_URL'] ?>assets/public/img/product/3.jpg" class="w-100" alt="">
                                                         </div>
                                                         <div class="search-result-desc pl-10">
                                                             <a href="single-product-4.html" class="title px-0">LANDSCAPE - Folding fabric deck chair</a>
                                                             <div class="price">$<span>399</span></div>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>


                                     </div>
                                 </div>
                             </li>
                             <?php


                                @$userId = $_SESSION['users'];
                                $wishlist = $h->table('wishlist')->select()->where('user_id', $userId)->count();

                                ?>
                             <li><a href="/wishlist" data-toggle="tooltip" data-placement="bottom" title="view wishlist"><i class="fal fa-heart"><span><?= $wishlist ?></span></i></a></li>
                             <?php
                                @$userId = $_SESSION['users'];
                                $select = $h->table('add_to_cart')->select()->where('user_id', $userId)->count();

                                // $select = $h->table('add_to_cart')->select()->count();

                                ?>
                             <li><a href="/cart"><i class="fal fa-shopping-bag"><span><?= $select ?></span></i></a>
                                 <!-- <div class="minicart">
                                                    <div class="minicart-body">
                                                        <div class="minicart-content">
                                                            <ul class="text-left">
                                                                <li>
                                                                    <div class="minicart-img">
                                                                        <a href="single-product-4.html" class="p-0"><img src="<?= $env['APP_URL'] ?>assets/public/img/product/1.jpg" class="w-100" alt=""></a>
                                                                    </div>
                                                                    <div class="minicart-desc">
                                                                        <a href="single-product-4.html" class="p-0">Capitalize on low hanging fruit t</a>
                                                                        <strong>1 × $250.00</strong>
                                                                    </div>
                                                                    <div class="remove">
                                                                        <i class="fal fa-times"></i>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="minicart-img">
                                                                        <a href="single-product-4.html" class="p-0"><img src="img/product/2.jpg" class="w-100" alt=""></a>
                                                                    </div>
                                                                    <div class="minicart-desc">
                                                                        <a href="single-product-4.html" class="p-0">Leather Courriere duffle ba</a>
                                                                        <strong>1 × $150.00</strong>
                                                                    </div>
                                                                    <div class="remove">
                                                                        <i class="fal fa-times"></i>
                                                                    </div>
                                                                </li>


                                                                <li>
                                                                    <div class="minicart-img">
                                                                        <a href="single-product-4.html" class="p-0"><img src="img/product/3.jpg" class="w-100" alt=""></a>
                                                                    </div>
                                                                    <div class="minicart-desc">
                                                                        <a href="single-product-4.html" class="p-0">Party Supplies Around Cupcake</a>
                                                                        <strong>1 × $150.00</strong>
                                                                    </div>
                                                                    <div class="remove">
                                                                        <i class="fal fa-times"></i>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="minicart-checkout">
                                                        <div class="minicart-checkout-heading mt-8 mb-25 overflow-hidden">
                                                            <strong class="float-left">Subtotal:</strong>
                                                            <span class="price float-right">503.00</span>
                                                        </div>
                                                        <div class="minicart-checkout-links">
                                                            <a href="cart.html" class="generic-btn black-hover-btn text-uppercase w-100 mb-20">View cart</a>
                                                            <a href="checkout.html" class="generic-btn black-hover-btn text-uppercase w-100 mb-20">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                             </li>
                             <li><a href="javascript:void(0)"><i class="fal fa-align-right"></i></a>
                                 <ul class="submenu bold-content text-right">
                                     <li><a href="/login">My Account</a></li>
                                     <li><a href="/checkout">Checkout</a></li>
                                     <li><a href="/shop">Shop</a></li>
                                     <li><a href="/wishlist">Wishlist</a></li>
                                     <li><a href="/question">Frequently</a></li>
                                     <li><a href="/logout">Logout</a></li>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <div class="mobile-menu visible-sm">
             <div id="mobile-menu">
                 <ul>
                     <li><a class="pl-3" href="/home">Home</a>

                     </li>
                     <li><a class="pl-3" href="/shop">Shop</a>

                     </li>
                     <li><a href="/blog">Blog</a>

                     </li>
                     <li><a href="/portfolio">Portfolio</a>
                     </li>
                     <li><a href="/contact">Contact</a></li>
                 </ul>
             </div>
         </div>
         <!-- /. mobile nav -->
     </div>
 </header>
 <!-- header section end -->