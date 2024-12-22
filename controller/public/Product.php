<?php
include "config/env.php";

if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
  $product_id = $_POST['product_id'];
  $quantitty = $_POST['quantityy'];

  if (empty($_SESSION)) {
    echo '0';
  } else {
    $user_id = $_SESSION['users']['id'];

    if (!empty($user_id) && !empty($quantitty)) {

      $res = $h->table('add_to_cart')->select()->where('product_id', '=', $product_id)->where('user_id', '=', $user_id)->fetchAll();

      if (count($res) > 0) {
        foreach ($res as $row) {
          $id = $row['id'];
        }
        $quan = $row['quantity'];
        $quantitty  += $quan;
        $result = $h->update('add_to_cart')->values([
          'quantity' => $quantitty,
        ])->where('product_id', '=', $product_id)->where('user_id', '=', $user_id)->run();

        if ($result) {
          echo 1;
        } else {
          echo 0;
        }
      } else {

        $insert_res = $h->insert('add_to_cart')->values([
          'product_id' => $product_id,
          'quantity' => $quantitty,
          'user_id' => $user_id
        ])->run();

        if ($insert_res) {
          echo '1';
        } else {
          echo '0';
        }
      }
    }
  }
}

if (isset($_POST['id']) && !empty($_POST['id'])) {
  $product_id = $_POST['id'];
  $quantity = $_POST['quantity'];
  $result = $h->update('add_to_cart')->values([
    'quantity' => $quantity,
  ])->where('product_id', '=', $product_id)->run();

  if ($result) {
    echo '1';
  } else {
    echo '0';
  }
}
