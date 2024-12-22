<?php


include "config/env.php";
if (isset($_POST['edit']) && !empty($_POST['edit'])) {
    $id = $_POST['id'];

    $xxx = $h->table('users')->select()->where('id', '=', $id)->fetchAll();
    echo json_encode($xxx);
    exit();
}


if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
  
    
    $efirstName = $_POST['efirst_name'];
    $elastName = $_POST['elast_name'];
    $ephone = $_POST['ephone'];
    $eemail = $_POST['eemail'];

    $res = $h->table('users')->update([
        'first_name' => $efirstName,
        'last_name' => $elastName,
        'phone' => $ephone,
        'email' => $eemail,
    ])->where('id', '=', $id)->run();

    if ($res) {
        echo json_encode(['status' => 1, 'message' => 'User updated successfully']);
    } else {
        echo json_encode(['status' => 0, 'message' => 'Update failed']);
    }
    exit();
}


if (isset($_POST['delete']) && !empty($_POST['delete'])) {
    $id = $_POST['id_delete'];

    $res = $h->table('users')->delete()->where('id', $id)->run();

    if ($res) {
        echo '1';
    } else {
        echo '0';
    }
}

?>