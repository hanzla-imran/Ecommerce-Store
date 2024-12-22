<?php
include "config/env.php";


if (isset($_POST['fetch']) && !empty($_POST['fetch'])) {



   
    $footer_data = $h->table('section_1')->select()->fetchAll();
    
    if ($footer_data) {
        // Loop through the data and add the edit and delete links
        foreach ($footer_data as &$data) {
           

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

    if (isset($_POST['heading']) && !empty($_POST['heading'])) {
    @$id =  $_POST['id'];
    $icon = trim($_POST['icon'] );
    $heading = trim($_POST['heading'] );
    $description = trim($_POST['description'] );  
    if (empty($icon)) {
        $errors = "Icon is required.";
    }
    if (empty($heading)) {
        $errors = "Heading is required.";
    }
    if (empty($description)) {
        $errors = "Description is required.";
    }

    if (empty($errors)) {
        $res = $h->update('section_1')->values([
            'icon' => $icon,
            'heading' => $heading,
            'description' => $description])->where('id', '=', $id)->run();

        if ($res) {
            echo '1'; 
        } else {
            echo '0'; 
        }
    } else {
        echo '2'; 
    }
}

if(isset($_POST['edit']) && !empty($_POST['edit'])){
    $id= $_POST['id'];
    $contract = $h->table('section_1')->select()->where('id', '=', $id)->fetchAll();
    echo json_encode($contract);
    exit();
}