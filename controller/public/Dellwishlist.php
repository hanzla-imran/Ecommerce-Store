<?php
include "config/env.php";



if (isset($_POST['id']) && !empty($_POST['id'])) {
    
    $id =  $_POST['id'];
    $res = $h->table('wishlist')->delete()->where('product_id', $id)->run();
    if ($res) {
     echo '1';
    }
  }

  ?>