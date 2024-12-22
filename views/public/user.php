<?php
include "config/env.php";
if (!empty($_SESSION['users']['id'])) {
include "include/header.php";
include "include/navbar.php";
?>


<!-- slider section start -->
<section class="slider">
    <div class="container pl-0 pr-0">
        <div class="slider-active center-dots number-dots">
            <?php
            $select = $h->table('breadcrum')->select()->fetchAll();

            foreach ($select as $row) {

                $id = $row['id'];


            ?>
                <div class="single-slider large-content h-790 d-flex align-items-center"
                    data-background="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['backgroud_img'] ?>">
                    <div class="container-fluid">
                        <div class="single-slider-inner">
                            <div class="single-slider-content text-left light-content pl-10"
                                style="text-align: left !important;">
                                <div class="slider-heading small-heading-text" data-animation="flipInX"
                                    data-delay=".4s">
                                    <h2 class="mb-0"><?= $row['slider_heading_1'] ?></h2>
                                    <h2 class="mb-0"><?= $row['slider_heading_2'] ?></h2>
                                </div>
                                <div class="slider-desc" data-animation="flipInX" data-delay=".6s">
                                    <p class="mt-35 mb-0"><?= $row['slider_desc'] ?></p>
                                </div>
                                <div class="slider-link slider-link-2" data-animation="flipInX" data-delay=".8s">
                                    <a href="<?= $row['slider_link'] ?>" class="generic-btn mt-70 red-hover-btn text-uppercase"
                                        tabindex="0">Discover now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- slider section end -->


<section class="service pt-57 mt-65">
    <div class="container container-1200">
        <div class="row justify-content-center">
            <?php
            $select = $h->table('section_1')->select()->fetchAll();

            foreach ($select as $row) {

                $id = $row['id'];


            ?>

                <div class="col-xl-4 col-md-6 service-item">
                    <div class="service-box service-box-3">
                        <div class="service-box-content text-center">
                            <i class="<?= $row['icon']; ?>"></i>
                            <h4 class="title pt-2"><?= $row['heading']; ?></h4>
                            <p class="service-desc"><?= $row['description']; ?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
    </div>
    <div class="container   gray-border-bottom pb-85"></div>
</section>



<!-- new arrival section start -->
<section class="new-arrival mt-120">
    <div class="container container-1430">
        <div class="generic-title text-center">
            <h2 class="mb-20">#New Arrivals</h2>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil</p>
            <p>doming id quod mazim placerat facer possim assum typi non habent claritatem insitam.</p>
        </div>

        <div class="new-arrival-wrapper mt-55">
            <div class="row">

                <?php
                $select = $h->table('section_2')->select()->fetchAll();

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

                                        <form id="wishlist">
                                            <li><a>  <a type="button"  class="wishlist float-right" onclick="wishlist(<?= $row['id'] ?>)"><i class="fal fa-heart"></i> 
                                            </a></a></li>
                                            <!-- <li><a href="single-product-4.html"><i class="fal fa-abacus"></i> add to compare</a></li> -->
                                            </form>
                                        <!-- <a href="wishlist.html" class="wishlist float-right"><span><i
                                                    class="fal fa-heart"></i></span></a> -->
                                    </div>
                                    <a href="#" class="product-title"><?= $row['product_title'] ?></a>
                                    <div class="price-switcher">
                                        <span class="price switcher-item">$<?= $row['price'] ?></span>
                                        <form method="POST" id="RegisterForm" enctype="multipart/form-data" >
                                        <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
                                            <input type="hidden" name="quantityy" class="mb-20" value="1" style="margin-right: 20px; width: 119px;">
                                            <a type="button"  class="add-cart text-capitalize switcher-item"  onclick="insert_tool()">+add to
                                                cart
                                            </a>
                                        </form>
                                        <!-- <a  class="add-cart text-capitalize switcher-item">+add to
                                            cart</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php
                }
                ?>



            </div>
            <div class="text-center load-btn mt-20">
                <a href="/shop" class="load-more">LOAD MORE...</a>
            </div>
        </div>
    </div>
    <div class="container   gray-border-bottom pb-110"></div>
</section>
<!-- new arrival section end -->



<!-- blog section start -->
<section class="blog mt-120">
    <div class="container container-1430">
        <div class="generic-title text-center">
            <h2 class="mb-20">#From Our Blog</h2>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil</p>
            <p>doming id quod mazim placerat facer possim assum typi non habent claritatem insitam.</p>
        </div>

        <div class="blog-carousel owl-carousel pt-50">

        <?php
          $select = $h->table('section_3')->select()->fetchAll();

          foreach ($select as $row) {

            $id = $row['id'];


          ?>


            <div class="blog-carousel-item">
                <div class="col-12">
                    <div class="blog-wrapper">
                        <div class="blog-box-img">
                            <a href="<?= $row['blog_link'] ?>"><img src="<?= $env['APP_URL'] ?>uploads/profile/<?= $row['blog_img'] ?>" class="w-100"
                                    alt=""></a>
                            <div class="blog-box-tags">
                                <a href="<?= @$row['blog_tag_1_link	'] ?>"><?= @$row['blog_tag_1'] ?></a>
                                <a href="<?= $row['blog_tag_2_link'] ?>"><?= $row['blog_tag_2'] ?></a>
                            </div>
                        </div>
                        <div class="blog-box-desc text-center">
                            <div class="blog-box-link">
                                <a href="<?= $row['blog_box_link'] ?>"><?= $row['blog_box_desc'] ?></a>
                            </div>
                            <ul class="post-entry-data">
                                <li class="post-date"><?= $row['date_of_upload'] ?></li>
                                <li class="post-by">Posted by <a href="<?= $row['posted_by_link'] ?>"><?= $row['posted_by'] ?></a></li>
                                <li class="post-comments"><i class="<?= $row['icon'] ?>"></i> <?= $row['icon_data'] ?></li>
                            </ul>
                            <div class="blog-short-content">
                                <p><?= $row['blog_content'] ?></p>
                            </div>
                            <a href="<?= $row['read_more_link'] ?>" class="blog-box-action"><?= $row['read_more'] ?></a>
                        </div>
                    </div>
                </div>
            </div>


            <?php
          }
          ?>
            <div class="blog-carousel-item">
                <div class="col-12">
                    <div class="blog-wrapper">
                        <div class="blog-box-img">
                            <a href="single-blog.html"><img src="assets/public/img/blog/2.jpg" class="w-100" alt=""></a>
                            <div class="blog-box-tags">
                                <a href="blog.html">Image</a>
                                <a href="blog2.html">Travel</a>
                            </div>
                        </div>
                        <div class="blog-box-desc text-center">
                            <div class="blog-box-link">
                                <a href="single-blog.html">Celebrating Female Leade ationa</a>
                            </div>
                            <ul class="post-entry-data">
                                <li class="post-date">5 Apr, 2020</li>
                                <li class="post-by">Posted by <a href="javascript:void(0)">admin</a></li>
                                <li class="post-comments"><i class="fal fa-envelope"></i> 1 Comment(s)</li>
                            </ul>
                            <div class="blog-short-content">
                                <p>A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                    beta test. Override the digital divide …</p>
                            </div>
                            <a href="single-blog-1.html" class="blog-box-action ">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-carousel-item">
                <div class="col-12">
                    <div class="blog-wrapper">
                        <div class="blog-box-img">
                            <a href="single-blog.html"><img src="assets/public/img/blog/3.jpg" class="w-100" alt=""></a>
                            <div class="blog-box-tags">
                                <a href="blog.html">Image</a>
                                <a href="blog2.html">Travel</a>
                            </div>
                        </div>
                        <div class="blog-box-desc text-center pt-20">
                            <div class="blog-box-link">
                                <a href="single-blog.html">Diam arcu, fringilla a sem condi cras</a>
                            </div>
                            <ul class="post-entry-data">
                                <li class="post-date">5 Apr, 2020</li>
                                <li class="post-by">Posted by <a href="javascript:void(0)">admin</a></li>
                                <li class="post-comments"><i class="fal fa-envelope"></i> 1 Comment(s)</li>
                            </ul>
                            <div class="blog-short-content">
                                <p>A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                    beta test. Override the digital divide …</p>
                            </div>
                            <a href="#" class="blog-box-action">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->

<?php
include "include/footer.php";
} else {

    header("Location: /login");
    exit();
}
?>

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