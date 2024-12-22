<?php


include "config/env.php";
if (isset($_POST['fetch']) && !empty($_POST['fetch'])) {
    $users = $h->table('users')->select()
    ->where('type', '!=', 'admin')
    ->where('status', '=', 'block') // Example for an additional condition
    ->fetchAll();

    if ($users) {

        foreach ($users as &$data) {
            $data['status'] = ($data['status'] == "active")
                ? "<span class='badge badge-light-success text-success'>Active</span>"
                : "<span class='badge badge-light-danger text-danger'>Block</span>";

            $data['actions'] = '
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="ti ti-dots-vertical"></i>
                    </button>
                    <div class="dropdown-menu">
                        <!-- Conditional activation/deactivation link -->
                        ' . (($data['status'] == "active") ?
                '<a onclick="changestatus(' . $data['id'] . ')" class="dropdown-item">
    <i class="ti ti-check me-1"></i> Active
</a>
' :
                '<a onclick="changestatus(' . $data['id'] . ')" class="dropdown-item">
    <i class="ti ti-check me-1"></i> Deactivate
                            </a>'
            ) . '
            
                        <!-- Edit link -->
                        <a href="javascript:void(0)" data-id="' . $data['id'] . '" class="edit dropdown-item" data-bs-toggle="modal" data-bs-target="#editUser">
                            <i class="ti ti-pencil me-1"></i> Edit
                        </a>
            
                        <!-- Delete link -->
                        <a href="javascript:void(0)" data-id="' . $data['id'] . '" class="delete dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteUser">
                            <i class="ti ti-trash me-1"></i> Delete
                        </a>
                    </div>
                </div>
            ';
        }
        echo json_encode(['status' => 1, 'data' => $users]);
    } else {
        echo json_encode(['status' => 0, 'message' => 'No data found']);
    }

    exit();
}



if (isset($_POST['status']) && !empty($_POST['status'])) {
    $id = $_POST['id'];
 
  
    $users = $h->table('users')->select()->where('id', $id)->fetchAll();


        if ($users[0]['status'] == "active") {


            $res = $h->table('users')->update([
                'status' => 'block'
            ])->where('id', '=', $id)->run();
    
            echo json_encode(['status' => 1]);
          
        } else {
            $res = $h->table('users')->update([
                'status' => 'active'
            ])->where('id', '=', $id)->run();
            echo json_encode(['status' => 2]);
    
        }
       
    }
    else{
        echo json_encode(['status' => 0 ]);   
    }
   





