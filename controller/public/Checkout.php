<?php
include "config/env.php";

if (isset($_SESSION['users']['id']) && !empty($_SESSION['users']['id'])) {
    $user_id = $_SESSION['users']['id'];


    $cartItems = $h->query("
    SELECT add_to_cart.id AS id,
           section_2.price AS price,
           section_2.product_img AS product_img,
           section_2.product_title AS product_title,
           add_to_cart.product_id AS product_id,
           add_to_cart.quantity AS quantity
    FROM add_to_cart
    INNER JOIN section_2 ON section_2.id = add_to_cart.product_id
    WHERE add_to_cart.user_id = ?
    ORDER BY add_to_cart.id;", [$user_id])->fetchAll();

    foreach ($cartItems as $item) {
        $product_id = $item['product_id'];
        $price = $item['price'];
        $quantity = $item['quantity'];


        $existingCheckout = $h->table('checkout')
            ->select('quantity')
            ->where('product_id', '=', $product_id)
            ->where('user_id', '=', $user_id)
            ->fetchAll();

        if ($existingCheckout) {

            $new_quantity = $existingCheckout['quantity'] + $quantity;

            $update = $h->update('checkout')
                ->set('quantity', $new_quantity)
                ->where('product_id', '=', $product_id)
                ->where('user_id', '=', $user_id)
                ->run();
        } else {

            $insert = $h->insert('checkout')->values([
                'product_id' => $product_id,
                'user_id' => $user_id,
                'quantity' => $quantity,
                'price' => $price
            ])->run();
        }


        $h->delete('add_to_cart')
            ->where('user_id', '=', $user_id)
            ->where('product_id', '=', $product_id)
            ->run();
    }

    echo '1';
    exit();
} else {
    echo '0';
    exit();
}
