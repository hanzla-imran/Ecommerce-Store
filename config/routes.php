<?php
require_once("./config/main.php");

//PUBLIC ROUTES

get('/', 'views/public/home.php');
get('/home', 'views/public/user.php');

// pages
get('/login', 'views/auth/login.php');
post('/login', 'controller/public/Login.php');
get('/logout', 'controller/Logout.php');
post('/logout', 'controller/Logout.php');
get('/shop', 'views/public/pages/shop.php');
// get('/women_shop', 'views/public/pages/women_shop.php');
// get('/men_shop', 'views/public/pages/men_shop.php');
get('/blog', 'views/public/pages/blog.php');
get('/portfolio', 'views/public/pages/portfolio.php');
get('/contact', 'views/public/pages/contact.php');
get('/about', 'views/public/pages/about.php');
get('/question', 'views/public/pages/questions.php');
get('/cart', 'views/public/pages/cart.php');
get('/checkout', 'views/public/pages/checkout.php');
post('/checkout_submit', 'controller/public/Checkout.php');
get('/wishlist', 'views/public/pages/wishlist.php');
post('/wishlist', 'controller/public/Wishlist.php');
post('/wishlist2', 'controller/public/wishlist_addtocart.php');


// auth


get('/register', 'views/auth/register.php');
post('/register', 'controller/public/Register.php');


// product

get('/product/$id', 'views/public/pages/product.php');
post('/product/$id', 'views/public/pages/product.php');
post('/product', 'controller/public/Product.php');
post('/delete', 'controller/public/Dellcart.php');
post('/deletee', 'controller/public/Dellwishlist.php');


if(!empty(@$_SESSION['users']) && $_SESSION['users']['type']=='admin'):
// admin
get('/admin/api', 'views/backend/ApiController.php');
get('/admin', 'views/backend/admin.php');
post('/admin', 'views/backend/admin.php');

// pages

get('/users', 'views/backend/pages/users.php');
post('/users', 'controller/backend/Users.php');
// get('/usersedit', 'views/backend/pages/users.php');
post('/usersedit', 'controller/backend/Usersedit.php');
get('/active', 'views/backend/pages/active.php');
post('/active', 'controller/backend/Active.php');
get('/block', 'views/backend/pages/block.php');
post('/block', 'controller/backend/Block.php');
get('/profile', 'views/backend/pages/profile.php');
post('/profile', 'controller/backend/Profile.php');
get('/breadcrumb', 'views/backend/pages/breadcrumb.php');
post('/Breadcrumb', 'controller/backend/Breadcrumb.php');
get('/section_1', 'views/backend/pages/section_1.php');
post('/section_1', 'controller/backend/Section_1.php');
get('/section_2', 'views/backend/pages/section_2.php');
post('/section_2', 'controller/backend/Section_2.php');
get('/section_3', 'views/backend/pages/section_3.php');
post('/section_3', 'controller/backend/Section_3.php');
get('/section_4', 'views/backend/pages/section_4.php');
post('/section_4', 'controller/backend/Section_4.php');
get('/footer', 'views/backend/pages/footer.php');
post('/footerr', 'controller/backend/Footer.php');


endif;

//404 PAGE

any('/404','views/404.php');
