<?php
include "config/env.php";



if (isset($_POST['fetch']) && !empty($_POST['fetch'])) {
   
    $section_3 = $h->table('section_3')->select()->fetchAll();
    
    if ($section_3) {
       
        foreach ($section_3 as &$data) {
          $data['blog_img'] = '
          <a href="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['blog_img'], ENT_QUOTES, 'UTF-8') . '" data-lightbox="gallery" data-title="img">
          <img style="width:100px" src="' . htmlspecialchars($env['APP_URL'], ENT_QUOTES, 'UTF-8') . 'uploads/profile/' . htmlspecialchars($data['blog_img'], ENT_QUOTES, 'UTF-8') . '"></a>';
      
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
      
        echo json_encode(['status' => 1, 'data' => $section_3]);
    } else {
        echo json_encode(['status' => 0, 'message' => 'No data found']);
    }
  
  exit();
  }




if (isset($_POST['blog_tag_2_link']) && !empty($_POST['blog_tag_2_link'])) {
    // $id = $_POST['id'] ;
    $blog_link = $_POST['blog_link'];
    $blog_tag_1 = $_POST['blog_tag_1'];
    $blog_tag_1_link = $_POST['blog_tag_1_link'];
    $blog_tag_2 = $_POST['blog_tag_2'];
    $blog_tag_2_link = $_POST['blog_tag_2_link'];
    $blog_box_link = $_POST['blog_box_link'];
    $blog_box_desc = $_POST['blog_box_desc'];
    $date_of_upload = $_POST['date_of_upload'];
    $posted_by = $_POST['posted_by'];
    $posted_by_link = $_POST['posted_by_link'];
    $icon = $_POST['icon'];
    $icon_data = $_POST['icon_data'];
    $blog_content = $_POST['blog_content'];
    $read_more_link = $_POST['read_more_link'];
    $read_more = $_POST['read_more'];

    if (empty($_FILES['blog_img'])) {
        echo '3';
        exit();
    }
    if (empty($blog_link)) {
        echo '4';
        exit();
    }
    if (empty($blog_tag_1)) {
        echo '5';
        exit();
    }
    if (empty($blog_tag_1_link)) {
        echo '6';
        exit();
    }
    if (empty($blog_tag_2)) {
        echo '7';
        exit();
    }
    if (empty($blog_tag_2_link)) {
        echo '8';
        exit();
    }
    if (empty($blog_box_link)) {
        echo '9';
        exit();
    }
    if (empty($blog_box_desc)) {
        echo '10';
        exit();
    }
    if (empty($date_of_upload)) {
        echo '11';
        exit();
    }
    if (empty($posted_by)) {
        echo '12';
        exit();
    }
    if (empty($posted_by_link)) {
        echo '13';
        exit();
    }
    if (empty($icon)) {
        echo '14';
        exit();
    }
    if (empty($icon_data)) {
        echo '15';
        exit();
    }
    if (empty($blog_content)) {
        echo '16';
        exit();
    }
    if (empty($read_more_link)) {
        echo '17';
        exit();
    }
    if (empty($read_more)) {
        echo '18';
        exit();
    }


    if (!empty($blog_link)) {
        $blog_img = upload('blog_img', 'uploads/profile/');


        $res = $h->insert('section_3')->values([
            'blog_img' => $blog_img,
            'blog_link' => $blog_link,
            'blog_tag_1' => $blog_tag_1,
            'blog_tag_1_link' => $blog_tag_1_link,
            'blog_tag_2' => $blog_tag_2,
            'blog_tag_2_link' => $blog_tag_2_link,
            'blog_box_link' => $blog_box_link,
            'blog_box_desc' => $blog_box_desc,
            'date_of_upload' => $date_of_upload,
            'posted_by' => $posted_by,
            'posted_by_link' => $posted_by_link,
            'icon' => $icon,
            'icon_data' => $icon_data,
            'blog_content' => $blog_content,
            'read_more_link' => $read_more_link,
            'read_more' => $read_more
        ])->run();

        if ($res) {
            echo '1';
        } else {
            echo '2';
        }
    } else {
        echo '2';
    }
}





// update

if (isset($_POST['blog_tag_2_linkk']) && !empty($_POST['blog_tag_2_linkk'])) {
    $id = $_POST['id'] ;






    @$footer_data = $h->table('section_3')->select()->where('id', '=', $id)->fetchAll();

    $blog_imgg = upload('blog_imgg', 'uploads/profile/');


    if (empty($blog_imgg) || $blog_imgg == 'null') {
        $blog_imgg = $footer_data[0]['blog_img'];
    }
  

    $blog_linkk = $_POST['blog_linkk'];
    $blog_tag_11 = $_POST['blog_tag_11'];
    $blog_tag_1_linkk = $_POST['blog_tag_1_linkk'];
    $blog_tag_22 = $_POST['blog_tag_22'];
    $blog_tag_2_linkk = $_POST['blog_tag_2_linkk'];
    $blog_box_linkk = $_POST['blog_box_linkk'];
    $blog_box_descc = $_POST['blog_box_descc'];
    $date_of_uploadd = $_POST['date_of_uploadd'];
    $posted_byy = $_POST['posted_byy'];
    $posted_by_linkk = $_POST['posted_by_linkk'];
    $iconn = $_POST['iconn'];
    $icon_dataa = $_POST['icon_dataa'];
    $blog_contentt = $_POST['blog_contentt'];
    $read_more_linkk = $_POST['read_more_linkk'];
    $read_moree = $_POST['read_moree'];

   
    if (empty($blog_linkk)) {
        echo '4';
        exit();
    } elseif (empty($blog_tag_11)) {
        echo '5';
        exit();
    } elseif (empty($blog_tag_1_linkk)) {
        echo '6';
        exit();
    } elseif (empty($blog_tag_22)) {
        echo '7';
        exit();
    } elseif (empty($blog_tag_2_linkk)) {
        echo '8';
        exit();
    } elseif (empty($blog_box_linkk)) {
        echo '9';
        exit();
    } elseif (empty($blog_box_descc)) {
        echo '10';
        exit();
    } elseif (empty($date_of_uploadd)) {
        echo '11';
        exit();
    } elseif (empty($posted_byy)) {
        echo '12';
        exit();
    } elseif (empty($posted_by_linkk)) {
        echo '13';
        exit();
    } elseif (empty($iconn)) {
        echo '14';
        exit();
    } elseif (empty($icon_dataa)) {
        echo '15';
        exit();
    } elseif (empty($blog_contentt)) {
        echo '16';
        exit();
    } elseif (empty($read_more_linkk)) {
        echo '17';
        exit();
    } elseif (empty($read_moree)) {
        echo '18';
        exit();
    } 
    // else {
       
    // }
    
  
    if (!empty($blog_imgg)) {
       
        $res = $h->update('section_3')->values([
            'blog_img' => $blog_imgg,
            'blog_link' => $blog_linkk,
            'blog_tag_1' => $blog_tag_11,
            'blog_tag_1_link' => $blog_tag_1_linkk,
            'blog_tag_2' => $blog_tag_22,
            'blog_tag_2_link' => $blog_tag_2_linkk,
            'blog_box_link' => $blog_box_linkk,
            'blog_box_desc' => $blog_box_descc,
            'date_of_upload' => $date_of_uploadd,
            'posted_by' => $posted_byy,
            'posted_by_link' => $posted_by_linkk,
            'icon' => $iconn,
            'icon_data' => $icon_dataa,
            'blog_content' => $blog_contentt,
            'read_more_link' => $read_more_linkk,
            'read_more' => $read_moree
            ])->where('id', '=', $id)->run();

        if ($res) {
            echo '1';
        } else {
            echo '2';
        }
    }
    else{

        $res = $h->update('section_3')->values([
          
            'blog_link' => $blog_linkk,
            'blog_tag_1' => $blog_tag_11,
            'blog_tag_1_link' => $blog_tag_1_linkk,
            'blog_tag_2' => $blog_tag_22,
            'blog_tag_2_link' => $blog_tag_2_linkk,
            'blog_box_link' => $blog_box_linkk,
            'blog_box_desc' => $blog_box_descc,
            'date_of_upload' => $date_of_uploadd,
            'posted_by' => $posted_byy,
            'posted_by_link' => $posted_by_linkk,
            'icon' => $iconn,
            'icon_data' => $icon_dataa,
            'blog_content' => $blog_contentt,
            'read_more_link' => $read_more_linkk,
            'read_more' => $read_moree
            ])->where('id', '=', $id)->run();

        if ($res) {
            echo '1';
        } else {
            echo '2';
        }
    }
    // if (!empty($blog_box_descc)) {
       


    // } else {
    //     echo '2';
    // }
}

if (isset($_POST['edit']) && !empty($_POST['edit'])) {
    $id = $_POST['id'];

    $xxx = $h->table('section_3')->select()->where('id', '=', $id)->fetchAll();
    echo json_encode($xxx);
    exit();
}






// delete query

if (isset($_POST['delete']) && !empty($_POST['delete'])) {
    $id = $_POST['id_delete'];

    $res = $h->table('section_3')->delete()->where('id', $id)->run();
    if ($res) {
        echo '1'; 
    } else {
        echo '0';
    }
} 
