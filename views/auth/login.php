<?php
include "config/env.php";
include "views/public/include/pages_header.php";
include "views/public/include/navbar.php";
?>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/notie/dist/notie.min.css">
<!-- shop body section start -->
<main>

    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area" data-background="<?= $env['APP_URL']?>assets/public/img/bg/page-title.html">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-content" style="flex-direction: column;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                        <h2 class="login-title mt-40">Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- login Area Start-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Login From Here</h3>
                        <form method="post" onsubmit="return do_login();">
                          <?php set_csrf() ?>
                            <label for="email">Email Address <span>**</span></label>
                            <input id="email" name="email" type="text" placeholder="Enter Username or Email address..." />
                            <label for="pass">Password <span>**</span></label>
                            <input id="pass" name="password" type="password" placeholder="Enter password..." />
                            <div class="login-action mb-20 fix">
<!--                               
                                <span class="forgot-login f-right">
                                    <a href="javascript:void(0)">Lost your password?</a>
                                </span> -->
                            </div>
                            <button type="button" onclick="do_login()" id="btn" class="btn theme-btn-2 w-100">Login Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="/register" class="btn theme-btn w-100">Register Now</a>
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
<script src="https://unpkg.com/notie"></script>
<script>
    // Get the input fields
    var emailInput = document.getElementById("email");
    var passwordInput = document.getElementById("pass");

    // Execute a function when the user presses a key on the keyboard
    passwordInput.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("btn").click();
        }
    });

    // LOGIN AND SIGNUP JS
    function do_login() {
        var email = $("#email").val(); // Updated selector
        var pass = $("#pass").val(); // Updated selector
        var csrf_token = $("input[name=csrf]").val();

        if (email !== "" && pass !== "") {
            $.ajax({
                type: 'POST',
                url: '/login',
                data: {
                    do_login: "do_login",
                    email: email,
                    password: pass,
                    csrf: csrf_token,
                },
                success: function(response) {
                    response=$.parseJSON(response);
                    console.log(response);
                //     if (response['statusCode'] == 200) {
				// 	Swal.fire({
				// 		icon: "success",
				// 		title: "Success!",
				// 		text: response['message'],
				// 	}).then(function() {
				// 		window.location = "/home";
				// 	});
				// } else if (response['statusCode'] == 202) {
				// 	Swal.fire({
				// 		icon: "error",
				// 		title: "Error!",
				// 		text: response['message'],
				// 	});
				// } else {
				// 	Swal.fire({
				// 		icon: "error",
				// 		title: "Oops...",
				// 		text: "Something went wrong! Please try again.",
				// 	});
				// }
			
                    document.getElementById("btn").removeAttribute("disabled");
                    if(response['statusCode']=="200")
                    {
                        window.location.href=response.path;
                    }
                    else
                    {

                        $('#result').html('<div class="alert alert-danger">'+response.message+'</div>');
                        document.getElementById("btn").removeAttribute("disabled");
                    }
                },
                error: function(xhr, status, error) {
                    $("#loader").css({"display": "none"});
                    notie.alert({type: 'error', text: 'AJAX request failed: ' + error, time: 5});
                }
            });
        } else {
            $(".email").addClass("input-focus-danger");
            $(".password").addClass("input-focus-danger");
            notie.alert({type: 'error', text: 'Missing Required Input', time: 5});
        }
        return false;
    }
</script>