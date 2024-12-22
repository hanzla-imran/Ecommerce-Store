  
  <?php
include "config/env.php";
  ?>
  
  <!-- footer section start -->
   <section class="footer">
               <div class="container">
                <div class="footer-top footer-top-2 mt-110 pb-120 pt-115 gray-border-top">
                    <div class="footer-top-wrapper">
                        <div class="newsletter text-center row-content">
                            <div class="row">
                            <?php
            $select = $h->table('section_4')->select()->fetchAll();

            foreach ($select as $row) {

                $id = $row['id'];


            ?>
                                <div class="col-12">
                                    <h2 class="title mb-20"><?= $row['title']; ?></h2>
                                    <p class=""><?= $row['description']; ?></p>
                                </div>

                                <?php
            }
            ?>
                                <div class="col-12">
                                    <div class="newsletter-form">
                                        <form action="#" method="POST">
                                            <input type="text" placeholder="Search for our newsletter..." class="pl-0 w-100 text-center gray-border-bottom pb-15 mb-40">
                                            <button type="button" class="generic-btn text-center red-hover-btn text-uppercase">Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.newsletter -->
                        <!-- /. footer bottom -->
                    </div>

                </div>
                <!-- footer top -->
               </div>

               <?php
            $select = $h->table('footer')->select()->fetchAll();

            foreach ($select as $row) {

                $id = $row['id'];


            ?>
               <div class="footer-bottom pt-77" style="background-color: #292929;">
                <div class="container-1180">
                    <div class="footer-bottom-wrapper">
                        <div class="footer-bottom-primary pb-60">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-9">
                                    <div class="footer-item has-desc">
                                        <div class="footer-logo mb-25">
                                            <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['footer_logo'] ?>" width="120" height="31" alt="">
                                        </div>
                                        <div class="footer-desc">
                                            <p class="mb-10"><?= $row['footer_desc'] ?></p>
                                        </div>
                                        <div class="footer-img mt-65">
                                            <img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['footer_img'] ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-12">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                            <div class="footer-menu">
                                                <ul>
                                                <li><a href="javascript:void(0)" class="title"><?= $row['title'] ?></a></li>
                                                    <li><a href="<?= $row['title_li_1_link'] ?>"><?= $row['title_li_1'] ?></a></li>
                                                    <li><a href="<?= $row['title_li_2_link'] ?>"><?= $row['title_li_2'] ?></a></li>
                                                    <li><a href="<?= $row['title_li_3_link'] ?>"><?= $row['title_li_3'] ?></a></li>
                                                    <li><a href="<?= $row['title_li_4_link'] ?>"><?= $row['title_li_4'] ?></a></li>
                                                    <li><a href="<?= $row['title_li_5_link'] ?>"><?= $row['title_li_5'] ?></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                            <div class="footer-menu">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="title"><?= $row['title_2'] ?></a></li>
                                                    <li><a href="<?= $row['title_2_li_1_link'] ?>"><?= $row['title_2_li_1'] ?></a></li>
                                                    <li><a href="<?= $row['title_2_li_2_link'] ?>"><?= $row['title_2_li_2'] ?></a></li>
                                                    <li><a href="<?= $row['title_2_li_3_link'] ?>"><?= $row['title_2_li_3'] ?></a></li>
                                                    <li><a href="<?= $row['title_2_li_4_link'] ?>"><?= $row['title_2_li_4'] ?></a></li>
                                                    <li><a href="<?= $row['title_2_li_5_link'] ?>"><?= $row['title_2_li_5'] ?></a></li>
                                                    <li><a href="<?= $row['title_2_li_6_link'] ?>"><?= $row['title_2_li_6'] ?></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 hidden-sm">
                                            <div class="footer-menu">
                                                <ul>
                                                <li><a href="javascript:void(0)" class="title"><?= $row['title_3'] ?></a></li>
                                                    <li><a href="<?= @$row['title_3_li_1_link'] ?>"><?= $row['title_3_li_1'] ?></a></li>
                                                    <li><a href="<?= @$row['title_3_li_2_link'] ?>"><?= $row['title_3_li_2'] ?></a></li>
                                                    <li><a href="<?= @$row['title_3_li_3_link'] ?>"><?= $row['title_3_li_3'] ?></a></li>
                                                    <li><a href="<?= @$row['title_3_li_4_link'] ?>"><?= $row['title_3_li_4'] ?></a></li>
                                                    <li><a href="<?= @$row['title_3_li_5_link'] ?>"><?= @$row['title_3_li_5	'] ?></a></li>
                                                    <li><a href="<?= @$row['title_3_li_6_link'] ?>"><?= $row['title_3_li_6'] ?></a></li>
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
            <?php
            }
            ?>

            </section>
            <!-- footer section end -->







            <!-- product popup start -->
            <section id="product-popup">
                <div class="product-popup-overlay"></div>
                <div class="product-popup-container">
                    <div class="product-inner w-100">
                        <div class="product-inner-content">
                            <div class="quick-close-action"><i class="fal fa-times"></i></div>
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="product-popup-1">
                                            <div class="product-popup-img">
                                                <img src="<?= $env['APP_URL']?>assets/public/img/product/10.jpg" class="w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-popup-2">
                                            <div class="product-popup-img">
                                                <img src="<?= $env['APP_URL']?>assets/public/img/product/11.jpg" class="w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-popup-3">
                                            <div class="product-popup-img">
                                                <img src="<?= $env['APP_URL']?>assets/public/img/product/12.jpg" class="w-100" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills justify-content-center mt-10" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="active" data-toggle="pill" href="#product-popup-1">
                                                <img src="<?= $env['APP_URL']?>assets/public/img/product/10.jpg" class="w-100" alt="">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" data-toggle="pill" href="#product-popup-2">
                                                <img src="<?= $env['APP_URL']?>assets/public/img/product/11.jpg" class="w-100" alt="">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" data-toggle="pill" href="#product-popup-3">
                                                <img src="<?= $env['APP_URL']?>assets/public/img/product/12.jpg" class="w-100" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h2>Nari Narwhal Usb...</h2>
                                        </div>
                                        <div class="price">$<span>44.00</span>–<span>$250.00</span></div>
                                        <a href="shop.html" class="all-feature">See all feature</a>
                                        <div class="quick-quantity mt-30">
                                            <form action="#" method="POST">
                                                <input type="number" value="1">
                                                <button type="submit" class="generic-btn red-hover-btn text-capitalize">add to cart</button>
                                            </form>
                                        </div>

                                        <div class="product-desc pb-20 mt-25 gray-border-top">
                                            <p class="mb-0">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus A Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital...ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the […]</p>
                                        </div>
                                        <div class="product-list mt-25">
                                            <ul>
                                                <li>– Light green crewnec...t.</li>
                                                <li>– Hand pockets.</li>
                                                <li>– Relaxed fit.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product popup end -->

            <!-- startup popup start -->
            <section id="startup-popup">
                <div class="product-popup-overlay has-startup" style="opacity: 1;visibility: visible"></div>
                <div class="startup-popup-body">
                    <div class="startup-body-content h-100">
                        <div class="row justify-content-end h-100">
                            <div class="col-6 h-100">
                                <div class="startup-popup-inner h-100">
                                    <div class="close-search-popup">
                                        <i class="fal fa-times"></i>
                                    </div>
                                    <div class="startup-popup-main-content">
                                        <h2>Get Our Email Letter</h2>
                                        <p class="mb-0">Subscribe to the Mazia store mailing list to receive updates on new arrivals, special offers
                                            and other discount information.</p>
                                        <div class="startup-subscribe-form">
                                            <form action="#" method="POST">
                                                <input type="text" placeholder="Subscribe to our newsletter" class="mb-30">
                                                <button class="generic-btn red-hover-btn text-uppercase">Subscribe now</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="startup-popup-sub-content">
                                        <div class="popup-warning">
                                            <input type="checkbox" id="startup-popup-hidden">
                                            <label for="startup-popup-hidden">Do not show the popup again</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- startup popup end -->









            <?php
if (!empty($error)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '" . $error . "',
        });
    };
    </script>";
} elseif (!empty($success)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '" .$success . "',
        });
    };
    </script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



		<!-- JS here -->
        <script src="<?= $env['APP_URL']?>assets/public/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/popper.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/bootstrap.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/owl.carousel.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/isotope.pkgd.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/one-page-nav-min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/slick.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/jquery.meanmenu.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/ajax-form.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/fontawesome.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/wow.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/jquery.scrollUp.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/plugins.js"></script>
        <script src="<?= $env['APP_URL']?>assets/public/js/main.js"></script>
    </body>

<!-- Mirrored from wphix.com/template/mazia/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Oct 2024 21:12:41 GMT -->
</html>
