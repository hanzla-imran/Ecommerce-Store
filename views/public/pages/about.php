<?php
include "config/env.php";
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";
?>





    <!-- about start -->
    <section class="about-body mb-90">
        <div class="has-breadcrumb-bg mb-120" data-background="<?= $env['APP_URL']?>assets/public/img/bg/3.jpg">
            <div class="breadcrumb-content d-flex justify-content-center align-items-center"
                style="flex-direction: column;">
                <h2 class="title">About Us</h2>
                <nav aria-label="breadcrumb" class="mb-40">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container container-1430">
            <div class="store-desc">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="store-left-desc pr-130">
                            <div class="generic-title">
                                <strong class="red-color">Welcome to Mazia Store</strong>
                                <h2 class="mb-0">Our Success</h2>
                                <h2 class="mb-0">And Company History.</h2>
                            </div>
                            <div class="store-content mt-50">
                                <p class="simple-text mb-15-important">
                                    Donec vehicula cursus vestibulum lectus, sit eros integer varius cum turpis et quam
                                    congue nisl accumsan.
                                </p>
                                <p class="simple-text mb-15-important">Ac bibendum ac in erat. Donec posuere
                                    consectetuer volutpat rutrum ac, sollicitudin quam quisque, at interdum dignissim,
                                    fringilla elit risus lorem eu condimentum eros mollis. Nam liber tempor cum soluta
                                    nobis eleifend option congue nihil</p>
                                <p class="simple-text mb-15-important">doming id quod mazim placerat facer possim assum
                                    typi non habent claritatem insitam. Nam liber tempor cum soluta nobis eleifend
                                    option congue nihil. doming id quod mazim placerat facer possim assum typi non
                                    habent claritatem insitam…</p>
                                <div class="signature mt-30">
                                    <img src="<?= $env['APP_URL']?>assets/public/img/logo/singg.png" class="d-block" alt="">
                                </div>
                                <div class="founder-name mt-35">
                                    <h5 class="mb-0"><span class="red-color">JOHN DOE</span> – Founder or Maria Store
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="store-banner">
                            <img src="<?= $env['APP_URL']?>assets/public/img/banner/about1.jpg" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
    <!-- background video section start -->
    <section class="bg-video">
        <div class="popup-video">
            <img src="<?= $env['APP_URL']?>assets/public/img/banner/about2.jpg" class="w-100" alt="">
            <a href="https://www.youtube.com/watch?v=e2FKXPzsT7E&amp;ab_channel=MesutKurtis%D9%85%D8%B3%D8%B9%D9%88%D8%AF%D9%83%D9%8F%D8%B1%D8%AA%D9%90%D8%B3" class="video-popup"><i class="fal fa-play"></i></a>
        </div>
    </section>
    <!-- background video section end -->



    <!-- service section start -->
    <section class="service mt-100 mb-100">
        <div class="container container-1430">
            <div class="generic-title text-center d-none">
                <strong class="red-color">What We Do</strong>
                <h2 class="mb-0">Your New Style 2019</h2>
            </div>

            <div class="store-content mt-50 d-none">
                <p class="simple-text text-center mb-15-important" style="line-height: 26.964px;">
                    <span style="font-size: 18px;">Ac bibendum ac in erat. Donec posuere consectetuer volutpat rutrum ac, sollicitudin</span>
                    <br>
                    <span style="font-size: 18px;">quam quisque, at interdum dignissim, fringilla elit risus lorem eu condimentum eros mollis.</span>
                    <br>
                    <span style="font-size: 18px;">Nam liber tempor cum soluta nobis eleifend option congue nihil doming id</span>
                    <br>
                    <span style="font-size: 18px;">quod mazim placerat facer possim assum.</span>
                </p>
            </div>

            <div class="row service-row">
                <div class="col-md-4">
                <div class="service-box service-box-2">
                        <div class="service-logo text-center">
                            <img src="<?= $env['APP_URL']?>assets/public/img/logo/icon-1.jpg" alt="" class="service-img">
                        </div>
                        <div class="service-content text-center">
                            <h6 class="title">Creative Design</h6>
                            <p>Duis autem vel eum iriure dolor in hendrerit vulputate <br> velit esse molestie consequat.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                <div class="service-box service-box-2">
                        <div class="service-logo text-center">
                            <img src="<?= $env['APP_URL']?>assets/public/img/logo/icon-2.jpg" alt="" class="service-img">
                        </div>
                        <div class="service-content text-center">
                            <h6 class="title">Strong Branding</h6>
                            <p>Duis autem vel eum iriure dolor in hendrerit vulputate <br> velit esse molestie consequat.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box service-box-2">
                        <div class="service-logo text-center">
                            <img src="<?= $env['APP_URL']?>assets/public/img/logo/icon-3.jpg" alt="" class="service-img">
                        </div>
                        <div class="service-content text-center">
                            <h6 class="title">Project Development</h6>
                            <p>Duis autem vel eum iriure dolor in hendrerit vulputate <br> velit esse molestie consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->



    <!-- testimonial section start -->
    <section class="testimonial pt-180 pb-200" style="background-image: url('<?= $env['APP_URL']?>assets/public/img/bg/4.jpg');">
        <div class="container container-1430">
            <div class="testimonial-carousel owl-theme owl-carousel">
                <div class="testimonial-box text-center">
                    <div class="testimonial-img">
                        <img src="<?= $env['APP_URL']?>assets/public/img/testimonial/1.png" alt="">
                    </div>
                    <div class="by-author">
                        <span class="author-name">Jason K. Manato</span>
                        <span class="author-byline">Ceo & Co</span>
                    </div>
                    <div class="testimonial-desc">
                        <blockquote class="mt-25">
                            <p>
                                <span>“ Ac bibendum ac in erat. Donec posuere consectetuer</span>
                                <br>
                                <span>volutpat rutrum ac, sollicitudin quam quisque, at interdum dignissim,</span>
                                <br>
                                <span>fringilla elit risus lorem eu condimentum. ”</span>
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="testimonial-box text-center">
                    <div class="testimonial-img">
                        <img src="<?= $env['APP_URL']?>assets/public/img/testimonial/1.png" alt="">
                    </div>
                    <div class="by-author">
                        <span class="author-name">Jason K. Manato</span>
                        <span class="author-byline">Ceo & Co</span>
                    </div>
                    <div class="testimonial-desc">
                        <blockquote class="mt-25">
                            <p>
                                <span>“ Ac bibendum ac in erat. Donec posuere consectetuer</span>
                                <br>
                                <span>volutpat rutrum ac, sollicitudin quam quisque, at interdum dignissim,</span>
                                <br>
                                <span>fringilla elit risus lorem eu condimentum. ”</span>
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->





<?php
include "views/public/include/pages_footer.php";
?>