<?php
include "config/env.php";
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";
?>
<!-- contact-area start -->
<section class="contact-area pb-30" data-background="assets/<?= $env['APP_URL']?>assets/public/img/bg/bg-map.html">
        <div class="has-breadcrumb-bg mb-120" style="background-image: url('<?= $env['APP_URL']?>assets/public/img/bg/3.jpg');">
            <div class="breadcrumb-content d-flex justify-content-center align-items-center" style="flex-direction: column;">
             <h2 class="title">Contact</h2>
             <nav aria-label="breadcrumb" class="mb-40">
                 <ol class="breadcrumb p-0 m-0">
                     <li class="breadcrumb-item"><a href="/home">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact</li>
                 </ol>
             </nav>
            </div>
         </div>
        <div class="container container-1430">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="contact text-center mb-30">
                        <i class="fas fa-envelope"></i>
                        <h3>Mail Here</h3>
                        <p><a href="https://wphix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="edac89808483adaf8c9e848eb985888088c38e8280">[email&#160;protected]</a></p>
                        <p><a href="https://wphix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7eec9c1c8e7f3cfc2cac2d7d2d589c4c8ca">[email&#160;protected]</a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="contact text-center mb-30">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Visit Here</h3>
                        <p>27 Division St, New York, NY 10002,
                            Jaklina, United Kingpung</p>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-4 ">
                    <div class="contact text-center mb-30">
                        <i class="fas fa-phone"></i>
                        <h3>Call Here</h3>
                        <p>+8 (123) 985 789</p>
                        <p>+787 878897 87</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area end -->

    <!-- contact-form-area start -->
    <section class="contact-form-area grey-bg pt-100 pb-100">
        <div class="container container-1430">
            <div class="form-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title mb-55">
                            <p><span></span> Anything On your Mind</p>
                            <h1>Estimate Your Idea</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 d-none d-xl-block ">
                        <div class="section-link mb-80 text-right">
                            <a class="btn theme-btn" href="tel:+8123985789"><i class="fas fa-phone"></i> make call</a>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contact-form" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box user-icon mb-30">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box email-icon mb-30">
                                    <input type="text" name="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box phone-icon mb-30">
                                    <input type="text" name="phone" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box subject-icon mb-30">
                                    <input type="text" name="subject" placeholder="Your Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box message-icon mb-30">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </div>
                                <div class="contact-btn text-center">
                                    <button class="btn theme-btn" type="submit">get action</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response text-center"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-area pt-100 pb-100">
        <div class="container container-1430">
            <div class="row  service-row">
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
    <!-- contact-form-area end -->











<?php
include "views/public/include/pages_footer.php";
?>