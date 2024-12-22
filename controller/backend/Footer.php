

<?php
include "config/env.php";
if (isset($_POST['fetch']) && !empty($_POST['fetch'])) {



   
        $footer_data = $h->table('footer')->select()->fetchAll();
        
        if ($footer_data) {
            // Loop through the data and add the edit and delete links
            foreach ($footer_data as &$data) {
                $data['edit_link'] = '123' . $data['title'] . '';

                $data['actions'] = '
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="javascript:void(0)" data-id="' . $data['id'] . '" class="edit dropdown-item text-end" data-bs-toggle="modal" data-bs-target="#editUser">
                                <i class="ti ti-pencil me-1"></i> Edit
                            </a>
                            <a href="javascript:void(0)" data-id="' . $data['id'] . '" class="delete dropdown-item text-end" data-bs-toggle="modal" data-bs-target="#deleteUser">
                                <i class="ti ti-trash me-1"></i> Delete
                            </a>
                        </div>
                    </div>
                ';
            }
            echo json_encode(['status' => 1, 'data' => $footer_data]);
        } else {
            echo json_encode(['status' => 0, 'message' => 'No data found']);
        }
    
    exit();
}



@$id = $_POST['id'];
// var_dump($id);
// exit();
@$footer_data = $h->table('footer')->select()->where('id', '=', $id)->fetchAll();

@$footer_logo = upload('footer_logo', 'uploads/profile/');

@$footer_desc = $_POST['footer_desc'];
@$footer_img = upload('footer_img', 'uploads/profile/');
if(empty($footer_logo) || $footer_logo =='null'){
    $footer_logo = $footer_data[0]['footer_logo'];
}
if(empty($footer_img) || $footer_img =='null'){
    $footer_img = $footer_data[0]['footer_img'];
}
// Get other form fields

@$title = $_POST['title'];
@$title_li_1 = $_POST['title_li_1'];
@$title_li_1_link = $_POST['title_li_1_link'];
@$title_li_2 = $_POST['title_li_2'];
@$title_li_2_link = $_POST['title_li_2_link'];
@$title_li_3 = $_POST['title_li_3'];
@$title_li_3_link = $_POST['title_li_3_link'];
@$title_li_4 = $_POST['title_li_4'];
@$title_li_4_link = $_POST['title_li_4_link'];
@$title_li_5 = $_POST['title_li_5'];
@$title_li_5_link = $_POST['title_li_5_link'];
@$title_2 = $_POST['title_2'];
@$title_2_li_1 = $_POST['title_2_li_1'];
@$title_2_li_1_link = $_POST['title_2_li_1_link'];
@$title_2_li_2 = $_POST['title_2_li_2'];
@$title_2_li_2_link = $_POST['title_2_li_2_link'];
@$title_2_li_3 = $_POST['title_2_li_3'];
@$title_2_li_3_link = $_POST['title_2_li_3_link'];
@$title_2_li_4 = $_POST['title_2_li_4'];
@$title_2_li_4_link = $_POST['title_2_li_4_link'];
@$title_2_li_5 = $_POST['title_2_li_5'];
@$title_2_li_5_link = $_POST['title_2_li_5_link'];
@$title_2_li_6 = $_POST['title_2_li_6'];
@$title_2_li_6_link = $_POST['title_2_li_6_link'];

@$title_3 = $_POST['title_3'];
@$title_3_li_1 = $_POST['title_3_li_1'];
@$title_3_li_1_link = $_POST['title_3_li_1_link'];
@$title_3_li_2 = $_POST['title_3_li_2'];
@$title_3_li_2_link = $_POST['title_3_li_2_link'];
@$title_3_li_3 = $_POST['title_3_li_3'];
@$title_3_li_3_link = $_POST['title_3_li_3_link'];
@$title_3_li_4 = $_POST['title_3_li_4'];
@$title_3_li_4_link = $_POST['title_3_li_4_link'];
@$title_3_li_5 = $_POST['title_3_li_5'];
@$title_3_li_5_link = $_POST['title_3_li_5_link'];
@$title_3_li_6 = $_POST['title_3_li_6'];
@$title_3_li_6_link = $_POST['title_3_li_6_link'];


if (!empty($footer_desc)) {

    $res = $h->update('footer')->values([
        'footer_logo' => $footer_logo,
        'footer_desc' => $footer_desc,
        'footer_img' => $footer_img,
        'title' => $title,
        'title_li_1' => $title_li_1,
        'title_li_1_link' => $title_li_1_link,
        'title_li_2' => $title_li_2,
        'title_li_2_link' => $title_li_2_link,
        'title_li_3' => $title_li_3,
        'title_li_3_link' => $title_li_3_link,
        'title_li_4' => $title_li_4,
        'title_li_4_link' => $title_li_4_link,
        'title_li_5' => $title_li_5,
        'title_li_5_link' => $title_li_5_link,
        'title_2' => $title_2,
        'title_2_li_1' => $title_2_li_1,
        'title_2_li_1_link' => $title_2_li_1_link,
        'title_2_li_2' => $title_2_li_2,
        'title_2_li_2_link' => $title_2_li_2_link,
        'title_2_li_3' => $title_2_li_3,
        'title_2_li_3_link' => $title_2_li_3_link,
        'title_2_li_4' => $title_2_li_4,
        'title_2_li_4_link' => $title_2_li_4_link,
        'title_2_li_5' => $title_2_li_5,
        'title_2_li_5_link' => $title_2_li_5_link,
        'title_2_li_6' => $title_2_li_6,
        'title_2_li_6_link' => $title_2_li_6_link,
        'title_3' => $title_3,
        'title_3_li_1' => $title_3_li_1,
        'title_3_li_1_link' => $title_3_li_1_link,
        'title_3_li_2' => $title_3_li_2,
        'title_3_li_2_link' => $title_3_li_2_link,
        'title_3_li_3' => $title_3_li_3,
        'title_3_li_3_link' => $title_3_li_3_link,
        'title_3_li_4' => $title_3_li_4,
        'title_3_li_4_link' => $title_3_li_4_link,
        'title_3_li_5' => $title_3_li_5,
        'title_3_li_5_link' => $title_3_li_5_link,
        'title_3_li_6' => $title_3_li_6,
        'title_3_li_6_link' => $title_3_li_6_link

    ])->where('id', '=', $id)->run();
    if ($res) {
        echo '1';
        exit();
    } else {
        echo '2';
    }
}


if (isset($_POST['edit']) && !empty($_POST['edit'])) {
    $id = $_POST['id'];

    $xxx = $h->table('footer')->select()->where('id', '=', $id)->fetchAll();
    echo json_encode($xxx);
    exit();
}


?>
