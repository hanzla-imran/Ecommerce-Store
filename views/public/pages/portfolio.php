<?php
include "config/env.php";
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";
?>



<!-- shop body start -->
<section class="shop-body mb-70">
        <div class="has-breadcrumb-bg mb-120" data-background="<?= $env['APP_URL']?>assets/public/img/bg/3.jpg">
            <div class="breadcrumb-content d-flex justify-content-center align-items-center" style="flex-direction: column;">
             <h2 class="title">Portfolio</h2>
             <nav aria-label="breadcrumb" class="mb-40">
                 <ol class="breadcrumb p-0 m-0">
                     <li class="breadcrumb-item"><a href="/home">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                 </ol>
             </nav>
            </div>
         </div>
        <div class="container-fluid">
            <div class="portfolio-grid">
                <div class="grid-action-control text-center d-none">
                    <button type="button" data-filter="all">All</button>
                    <button type="button" data-filter=".fashion">Fashion</button>
                    <button type="button" data-filter=".man">Man</button>
                    <button type="button" data-filter=".design">Design</button>
                    <button type="button" data-filter=".development">Development</button>
                </div>
                <div class="grid-product-box mt-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix design">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/related-project/2.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">MONKEY LAMP BLACK  – LED resin wall lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix development">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/related-project/3.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">LAMINA  – LED indirect light aluminium wall lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix fashion">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/related-project/4.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">CONCRETE  – LED direct-indirect light Outdoor wall Lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix design">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/portfolio/1-big.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">MONKEY LAMP BLACK  – LED resin wall lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix development">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/portfolio/2-big.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">LAMINA  – LED indirect light aluminium wall lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix fashion man design">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/portfolio/3-big.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">CONCRETE  – LED direct-indirect light Outdoor wall Lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix design development">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/portfolio/4-big.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">MONKEY LAMP BLACK  – LED resin wall lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix development fashion man">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/portfolio/6.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">LAMINA  – LED indirect light aluminium wall lamp</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mix fashion design development">
                            <div class="product-box-2">
                                <div class="product-img">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/portfolio/5.jpg" class="w-100" alt="">
                                    <a href="#" class="product-2-link" data-toggle="tooltip" data-placement="top" title="view more"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="product-2-desc">
                                    <span class="date">15 Feb 2019</span>
                                    <h5><a href="#">CONCRETE  – LED direct-indirect light Outdoor wall Lamp</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. portfolio grid -->
        </div>
    </section>
    <!-- shop body end -->



<?php
include "views/public/include/pages_footer.php";
?>