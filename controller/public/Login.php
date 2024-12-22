<?php
include "config/env.php";
//LOGIN
if (isset($_POST['email']) && isset($_POST['password'])){
  echo $response = userLogin($_POST['email'], $_POST['password'], 'users');

}

