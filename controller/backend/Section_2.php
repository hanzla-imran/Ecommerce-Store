<?php
include "config/env.php";



if (isset($_POST['fetch']) && !empty($_POST['fetch'])) {
   
    $section_2 = $h->table('section_2')->select()->fetchAll();
    
    if ($section_2) {
        // Loop through the data and add the edit and delete links
        foreach ($section_2 as &$data) {
          $data['product_img'] = '
          <a href="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['product_img'], ENT_QUOTES, 'UTF-8') . '" data-lightbox="gallery" data-title="img">
          <img style="width:100px" src="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['product_img'], ENT_QUOTES, 'UTF-8') . '"></a>';
      
          $data['hover_img'] = '
          <a href="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['hover_img'], ENT_QUOTES, 'UTF-8') . '" data-lightbox="gallery" data-title="img">
          <img style="width:100px" src="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['hover_img'], ENT_QUOTES, 'UTF-8') . '"></a>';
      
          $data['actions'] = '
              <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="ti ti-dots-vertical"></i>
                  </button>
                  <div class="dropdown-menu">
                      <a href="javascript:void(0)" data-id="' . htmlspecialchars($data['id'], ENT_QUOTES, 'UTF-8') . '" class="edit dropdown-item text-end" data-bs-toggle="modal" data-bs-target="#editUser">
                          <i class="ti ti-pencil me-1"></i> Edit
                      </a>
                      <a href="javascript:void(0)" data-id="' . htmlspecialchars($data['id'], ENT_QUOTES, 'UTF-8') . '" class="delete dropdown-item text-end" data-bs-toggle="modal" data-bs-target="#deleteUser">
                          <i class="ti ti-trash me-1"></i> Delete
                      </a>
                  </div>
              </div>
          ';
      }
      
        echo json_encode(['status' => 1, 'data' => $section_2]);
    } else {
        echo json_encode(['status' => 0, 'message' => 'No data found']);
    }
  
  exit();
  }


if (isset($_POST['quick_view_link']) && !empty($_POST['quick_view_link'])) {
    $id = $_POST['id'];



    @$footer_data = $h->table('section_2')->select()->where('id', '=', $id)->fetchAll();

    $product_img = upload('product_img', 'uploads/profile/');
    $hover_img = upload('hover_img', 'uploads/profile/');


    if (empty($product_img) || $product_img == 'null') {
        $product_img = $footer_data[0]['product_img'];
    }
    if (empty($hover_img) || $hover_img == 'null') {
        $hover_img = $footer_data[0]['hover_img'];
    }






    $quick_view_link = $_POST['quick_view_link'];
    $catagories = $_POST['catagories'];
    $catagories_link = $_POST['catagories_link'];
    $product_title = $_POST['product_titlee'];
    $price = $_POST['pricee'];

    if (empty($_FILES['product_img'])) {
        echo '3';
        exit();
    }
    if (empty($_FILES['hover_img'])) {
        echo '4';
        exit();
    }
    if (empty($quick_view_link)) {
        echo '5';
        exit();
    }
    if (empty($catagories)) {
        echo '6';
        exit();
    }
    if (empty($catagories_link)) {
        echo '7';
        exit();
    }


    if (!empty($catagories)) {


        $res = $h->update('section_2')->values([
            'product_img' => $product_img,
            'hover_img' => $hover_img,
            'quick_view_link' => $quick_view_link,
            'catagories' => $catagories,
            'catagories_link' => $catagories_link,
            'product_title' => $product_title,
            'price' => $price
        ])->where('id', '=', $id)->run();

        if ($res) {
            echo '1';
        } else {
            echo '0';
        }
    } else {
        echo '2';
    }
}

if (isset($_POST['edit']) && !empty($_POST['edit'])) {
    $id = $_POST['id'];

    $xxx = $h->table('section_2')->select()->where('id', '=', $id)->fetchAll();
    echo json_encode($xxx);
    exit();
}




// insert


if (isset($_POST['quick_view_linkk']) && !empty($_POST['quick_view_linkk'])) {
    $quick_view_linkk = $_POST['quick_view_linkk'];
    $catagoriess = $_POST['catagoriess'];
    $catagories_linkk = $_POST['catagories_linkk'];
    $product_titlee = $_POST['product_title'];
    $pricee = $_POST['price'];


    if (empty($_FILES['product_imgg']['name'])) {
        echo '3';
        exit();
    }
    if (empty($_FILES['hover_imgg']['name'])) {
        echo '4';
        exit();
    }

    if (empty($quick_view_linkk)) {
        echo '5';
        exit();
    }
    if (empty($catagoriess)) {
        echo '6';
        exit();
    }
    if (empty($catagories_linkk)) {
        echo '7';
        exit();
    }


    $product_imgg = upload('product_imgg', 'uploads/profile/');
    $hover_imgg = upload('hover_imgg', 'uploads/profile/');

$slug=slugify($product_imgg);
    $res = $h->insert('section_2')->values([
        'slug'=>$slug,
        'product_img' => $product_imgg,
        'hover_img' => $hover_imgg,
        'quick_view_link' => $quick_view_linkk,
        'catagories' => $catagoriess,
        'catagories_link' => $catagories_linkk,
        'product_title' => $product_titlee,
        'price' => $pricee
    ])->run();

    if ($res) {
        echo '1';
    } else {
        echo '2';
    }
}





// delete query

if (isset($_POST['delete']) && !empty($_POST['delete'])) {
    $id = $_POST['id_delete'];

    $res = $h->table('section_2')->delete()->where('id', $id)->run();

    if ($res) {
        echo '1';
    } else {
        echo '0';
    }
}
