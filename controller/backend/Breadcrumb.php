<?php
include "config/env.php";
if (isset($_POST['fetch']) && !empty($_POST['fetch'])) {
  $breadcrum = $h->table('breadcrum')->select()->fetchAll();
  
  if ($breadcrum) {
      // Loop through the data and add the edit and delete links
      foreach ($breadcrum as &$data) {
        $data['backgroud_img'] = '
        <a href="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['backgroud_img'], ENT_QUOTES, 'UTF-8') . '" data-lightbox="gallery" data-title="img">
        <img style="width:100px" src="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['backgroud_img'], ENT_QUOTES, 'UTF-8') . '"></a>';
    
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
    
      echo json_encode(['status' => 1, 'data' => $breadcrum]);
  } else {
      echo json_encode(['status' => 0, 'message' => 'No data found']);
  }

exit();
}




if (isset($_POST['heading']) && !empty($_POST['heading'])) {
  $id =  $_POST['id'];


  @$footer_data = $h->table('breadcrum')->select()->where('id', '=', $id)->fetchAll();

  $image = upload('background_img', 'uploads/profile/');
  
  if(empty($image) || $image =='null'){
      $image = $footer_data[0]['backgroud_img'];
  }

  $heading = trim($_POST['heading']);
  $heading_2 = trim($_POST['heading_2']);
  $slider_desc = trim($_POST['slider_desc']);
  $slider_link = trim($_POST['slider_link']);

  if (empty($heading)) {
    $error = "A Slider Heading 1 is required.";
  } else if (empty($heading_2)) {
    $error = "Slider Heading 2 is required.";
  } else if (empty($slider_desc)) {
    $error = "Slider Description is required.";
  } else if (empty($slider_link)) {
    $error = "A valid URL is required for Slider Link.";
  }

  

  if (empty($errors)) {

    $res = $h->table('breadcrum')->update([
      'slider_heading_1' => $heading,
      'slider_heading_2' => $heading_2,
      'slider_desc' => $slider_desc,
      'slider_link' => $slider_link,
      'backgroud_img' => $image,

    ])->where('id', '=', $id)->run();


    if ($res) {
      echo '1';
      exit();
    } else {
      $success = "Error updating data: ";
    }
  } else {

    foreach ($errors as $error) {
      $success = "<p style='color:red;'>$error</p>";
    }
  }
}

if (isset($_POST['edit']) && !empty($_POST['edit'])) {
  $id = $_POST['id'];

  $xxx = $h->table('breadcrum')->select()->where('id', '=', $id)->fetchAll();
  echo json_encode($xxx);
  exit();
}



// insert



if (isset($_POST['edit_heading']) && !empty($_POST['edit_heading'])) {

  // Sanitize user inputs
  $edit_heading = trim($_POST['edit_heading']);
  $edit_heading_2 = trim($_POST['edit_heading_2']);
  $edit_slider_desc = trim($_POST['edit_slider_desc']);
  $edit_slider_link = trim($_POST['edit_slider_link']);

  // Form validation
  if (empty($edit_heading)) {
    $error = "Slider Heading 1 is required.";
  } else if (empty($edit_heading_2)) {
    $error = "Slider Heading 2 is required.";
  } else if (empty($edit_slider_desc)) {
    $error = "Slider Description is required.";
  } else if (empty($edit_slider_link)) {
    $error = "A valid URL is required for Slider Link.";
  }

  // If no errors, process the image and database update
  if (empty($error)) {
    $edit_image = upload('edit_background_img', 'uploads/profile/');

    // Check if the upload was successful
    if (!$edit_image) {
      $error = "Error uploading the background image.";
    }

    if (empty($error)) {
      // Assuming $id is properly defined and passed
      // $res = $h->table('breadcrum')->update([
      //   'slider_heading_1' => $edit_heading,
      //   'slider_heading_2' => $edit_heading_2,
      //   'slider_desc' => $edit_slider_desc,
      //   'slider_link' => $edit_slider_link,
      //   'backgroud_img' => $edit_image
      // ])->where('id', '=', $id)->run();



      $res = $h->insert('breadcrum')->values([
        'slider_heading_1' => $edit_heading,
        'slider_heading_2' => $edit_heading_2,
        'slider_desc' => $edit_slider_desc,
        'slider_link' => $edit_slider_link,
        'backgroud_img' => $edit_image
      ])->run();



      if ($res) {
        echo '1';  // Successful update
        exit();
      } else {
        $error = "Error updating data.";
      }
    }
  }

  // If any errors, display them
  if (!empty($error)) {
    echo $error;
  }
}
// delete




if (isset($_POST['delete']) && !empty($_POST['delete'])) {
  $id = $_POST['id_delete'];

  $res = $h->table('breadcrum')->delete()->where('id', $id)->run();
  if ($res) {
    echo '1';
  } else {
    echo '0';
  }
}
