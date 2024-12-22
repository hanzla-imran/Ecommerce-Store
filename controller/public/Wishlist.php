<?php
include "config/env.php";



// if (isset($_POST['id']) && !empty($_POST['id'])) {
//     $product_id = $_POST['id'];
    
//     if (empty($_SESSION)) {
//         echo '0'; 
//     } else {
//         $user_id = $_SESSION['users']['id'];
      
//         if (!empty($product_id)) {
//             $res = $h->table('add_to_cart')->select()
//                 ->where('product_id', '=', $product_id)
//                 ->where('user_id', '=', $user_id)
//                 ->fetchAll();
//             if ($res) {
//                 echo '1'; 
//             } else {
//                 $insert_res = $h->insert('add_to_cart')->values([
//                     'product_id' => $product_id,
//                     'user_id' => $user_id
//                 ])->run();
//                 if ($insert_res) {
//                     $delete_wishlist = $h->table('wishlist')->delete()->where('product_id', $product_id)->run();
//                     if ($delete_wishlist) {
//                         echo '1'; 
//                     } else {
//                         echo 'Wishlist deletion failed';
//                     }
//                 } else {
//                     echo '0'; 
//                 }
//             }
//         } else {
//             echo '1'; 
//         }
//     }
// }



if (isset($_POST['id']) && !empty($_POST['id'])) {
    $product_id = $_POST['id'];

    if (empty($_SESSION)) {
        $error =  "You must be logged in to add to wishlist";
    } else {

        $user_id = $_SESSION['users']['id'];


        if (!empty($user_id)) {

            $res = $h->table('wishlist')->select()->where('product_id', '=', $product_id)->where('user_id', '=', $user_id)->fetchAll();

            if ($res) {
                echo '0';
                exit();
            }
            else{
                $res = $h->insert('wishlist')->values([
                    'product_id' => $product_id,
                    'user_id' => $user_id
                ])->run();
                if ($res ) {
                    echo '1';
                    exit();
                } else {
                    echo "nt fnd";
                }
            }
        } else {
           echo '2';
           exit();
        }
    }
}


// if (isset($_GET['id'])) {
//   include "config/database.php";
//   $product_id = $_GET['id'];
//   $sql = "DELETE FROM `wishlist` WHERE `product_id` ='$product_id'";
//   $result = mysqli_query($conn, $sql);
//   if ($result) {
//    echo 
//       "<script>
//         alert('Deleted data successfully');
//         window.location.href = '/wishlist';
//       </script>";

//   }
// }
