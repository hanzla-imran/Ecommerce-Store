<?php
//////////////////////////////////
/// 1-Login using AJAX Request
//////////////////////////////////
require "config/enviroment.php";
//LOGIN

echo $response=userLogin($_POST['email'], $_POST['password'], 'users');