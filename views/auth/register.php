<?php
include "config/env.php";
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
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
                            </ol>
                        </nav>
                        <h2 class="login-title mt-40">Register</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->


    <!-- login Area Strat-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Register From Here</h3>
                        <form method="POST" id="RegisterForm" enctype="multipart/form-data">
                            <label for="first_name">First Name <span>**</span></label>
                            <input id="first_name" name="first-name" type="text" placeholder="Enter your first name" />
                            <label for="last_name">Last Name <span>**</span></label>
                            <input id="last_name" name="last-name" type="text" placeholder="Enter your last name" />
                            <label for="phone_number">Phone Number <span>**</span></label>
                            <input id="phone_number" name="phone" type="text" placeholder="Enter your phone number" />
                            <label for="name">Email Address <span>**</span></label>
                            <input id="name" name="email" type="text" placeholder="Enter Username or Email address..." />
                            <label for="pass">Password <span>**</span></label>
                            <input id="pass" name="password" type="password" placeholder="Enter password..." />
                            <label for="passs"> Confirm Password <span>**</span></label>
                            <input id="passs" name="confirm-password" type="password" placeholder="Enter password..." />
                            <!-- <div class="login-action mb-20 fix">
                            <span class="log-rem f-left">
                                <input id="remember" type="checkbox" />
                                <label for="remember">Remember me!</label>
                            </span>
                            <span class="forgot-login f-right">
                                <a href="javascript:void(0)">Lost your password?</a>
                            </span>
                        </div> -->
                            <button type="button" class="btn theme-btn-2 w-100" onclick="insert_tool()">Register Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="/login" class="btn theme-btn w-100">Login Now</a href="/login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->



</main>
<?php
include "views/public/include/pages_footer.php";
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function insert_tool() {
        var formData = new FormData(document.getElementById('RegisterForm'));
        $.ajax({
            url: '/register',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response == '1') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Form submitted successfully!',
                    });
                    document.getElementById('RegisterForm').reset();

                } else if (response == '0') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something Went Wrong!',
                    });
                } else if (response == '2') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill the form correctly',
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
</script>