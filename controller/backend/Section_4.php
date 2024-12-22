<?php
include "config/env.php";
if (isset($_POST['fetch']) && !empty($_POST['fetch'])) {



   
    $section_4 = $h->table('section_4')->select()->fetchAll();
    
    if ($section_4) {
        // Loop through the data and add the edit and delete links
        foreach ($section_4 as &$data) {
            
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
        echo json_encode(['status' => 1, 'data' => $section_4]);
    } else {
        echo json_encode(['status' => 0, 'message' => 'No data found']);
    }

exit();
}


if (isset($_POST['title']) && !empty($_POST['description'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    if (empty($title)) {
        echo '4';
        exit();
    } elseif (empty($description)) {
        echo '5';
        exit();
    }

    if (!empty($title) && !empty($description)) {

        $res = $h->update('section_4')->values([
            'title' => $title,
            'description' => $description
        ])->where('id', '=', $id)->run();

        if ($res) {
            echo '1';
        } else {
            echo '2';
        }
    } 
}

if (isset($_POST['edit']) && !empty($_POST['edit'])) {
    $id = $_POST['id'];

    $xxx = $h->table('section_4')->select()->where('id', '=', $id)->fetchAll();
    echo json_encode($xxx);
    exit();
}



