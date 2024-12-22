<?php
include "config/env.php";

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $product_id = $_POST['id'];
    
    if (empty($_SESSION)) {
        echo '0'; 
    } else {
        $user_id = $_SESSION['users']['id'];

        if (!empty($product_id)) {
            
            $res = $h->table('add_to_cart')->select()
                ->where('product_id', '=', $product_id)
                ->where('user_id', '=', $user_id)
                ->fetchAll();

            if ($res) {
                echo '3'; 
            } else {
                
                $insert_res = $h->insert('add_to_cart')->values([
                    'product_id' => $product_id,
                    'user_id' => $user_id
                ])->run();

                if ($insert_res) {
                 
                    $delete_wishlist = $h->table('wishlist')->delete()
                        ->where('product_id', '=', $product_id)
                        ->where('user_id', '=', $user_id)
                        ->run();

                    if ($delete_wishlist) {
                        echo '1'; 
                    } else {
                        echo '3';
                    }
                } else {
                    echo '0'; 
                }
            }
        } else {
            echo '0';
        }
    }
}


?>
