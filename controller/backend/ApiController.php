<?php
include("config/env.php");
header("Content-Type: application/json; charset=UTF-8");

if ($_GET['page_name'] == "breadcrumb") {
    $draw = isset($_POST['draw']) ? intval($_POST['draw']) : 1;
    $start = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $length = isset($_POST['length']) ? intval($_POST['length']) : 10;

    $srNo = $start;
    $breadcrums = $h->table('breadcrum')->select()->orderBy('id', 'desc')->fetchAll();

    $totalRecords = $h->table('breadcrum')->count();
    
    $check_arr = [];
    foreach ($breadcrums as $breadcrum) {
        // Same logic for statusView and action
        $srNo++;
        $ids = array("ids" => "$srNo");
        $check_arr[] = array_merge($ids, $breadcrum, $status, $action);
    }

    $result = [
        "draw" => $draw,
        "recordsTotal" => $totalRecords,
        "recordsFiltered" => $totalRecords,
        "data" => $check_arr
    ];

    echo json_encode($result);
}
//END OF USERS


//ACTIVE USERS
if($_GET['page_name']=="users_active"){
//    if( ! is_csrf_v_script()){
//        exit();
//    }
    $srNo=0;
    $users = $h->table('users')
        ->select()
        ->where('status','=','active')->orderBy('id', 'desc')
        ->get();
    if(!empty($users)){
        foreach ($users as $user){


            //STATUS
            if($user['status']=="active"){
                $statusView="<span class='badge bg-success'>Active</span>";
                $userStatus="<button class='btn btn-primary btn-sm' data-toggle='tooltip' data-placement='bottom' title='Block this user' onclick='userStatus(".$user['id'].", 0)'>Inactive</button>";

            }
            else if($user['status']=="inactive"){
                $statusView="<span class='badge bg-danger'>In-active</span>";
                $userStatus="<button class='btn btn-success btn-sm' data-toggle='tooltip' data-placement='bottom' title='UnBlock this user' onclick='userStatus(".$user['id'].", 1)'>Active</button>";

            }else{
                $statusView="<span class='badge bg-danger'>In-active</span>";
                $userStatus="<button class='btn btn-success btn-sm' data-toggle='tooltip' data-placement='bottom' title='UnBlock this user' onclick='userStatus(".$user['id'].", 1)'>Active</button>";

            }
            $action= array("action"=>"".$userStatus."
         <button onclick=deleteUser('".$user['id']."') class='btn btn-danger btn-sm'>Delete</button>
         ");

            $profile= array("profile"=>'
                            <span class="tb-lead">'.$user["name"].'  <span class="dot dot-success d-md-none ms-1"></span></span>
                           | <span> '.$user["email"].'</span>
                       ');
            $typeView= array("typeView"=>'<div class="nk-tb-col">
                <span  class="tb-lead">'.$user['type'].'</span>
            </div>');
            $status= array("statusView"=>$statusView);

            $srNo=$srNo+1;
            $ids= array("ids"=>"$srNo");
            $check_arr[]=array_merge($ids, $user,$status,$profile,$typeView, $action);
        }
        $result=array(
            "sEcho" => 1,
            "iTotalRecords" => count($check_arr),
            "iTotalDisplayRecords" => count($check_arr),
            "aaData"=>$check_arr);
        echo json_encode($result);
    }else{
        $result=array(
            "sEcho" => 1,
            "iTotalRecords" => 0,
            "iTotalDisplayRecords" => 0,
            "aaData"=>$users);
        echo json_encode($result);
    }
}
//END OF ACTIVE USERS


//INACTIVE USERS
if($_GET['page_name']=="users_inactive"){
//    if( ! is_csrf_v_script()){
//        exit();
//    }
    $srNo=0;
    $users = $h->table('users')
        ->select()
        ->where('status','=','block')->orderBy('id', 'desc')
        ->get();
    if(!empty($users)){
        foreach ($users as $user){


            //STATUS
            if($user['status']=="active"){
                $statusView="<span class='badge bg-success'>Active</span>";
                $userStatus="<button class='btn btn-primary btn-sm' data-toggle='tooltip' data-placement='bottom' title='Block this user' onclick='userStatus(".$user['id'].", 0)'>Inactive</button>";

            }
            else if($user['status']=="inactive"){
                $statusView="<span class='badge bg-danger'>In-active</span>";
                $userStatus="<button class='btn btn-success btn-sm' data-toggle='tooltip' data-placement='bottom' title='UnBlock this user' onclick='userStatus(".$user['id'].", 1)'>Active</button>";

            }else{
                $statusView="<span class='badge bg-danger'>In-active</span>";
                $userStatus="<button class='btn btn-success btn-sm' data-toggle='tooltip' data-placement='bottom' title='UnBlock this user' onclick='userStatus(".$user['id'].", 1)'>Active</button>";

            }
            $action= array("action"=>"".$userStatus."
         <button onclick=deleteUser('".$user['id']."') class='btn btn-danger btn-sm'>Delete</button>
         ");

            $profile= array("profile"=>'
                            <span class="tb-lead">'.$user["name"].'  <span class="dot dot-success d-md-none ms-1"></span></span>
                           | <span> '.$user["email"].'</span>
                       ');
            $typeView= array("typeView"=>'<div class="nk-tb-col">
                <span  class="tb-lead">'.$user['type'].'</span>
            </div>');
            $status= array("statusView"=>$statusView);

            $srNo=$srNo+1;
            $ids= array("ids"=>"$srNo");
            $check_arr[]=array_merge($ids, $user,$status,$profile,$typeView, $action);
        }
        $result=array(
            "sEcho" => 1,
            "iTotalRecords" => count($check_arr),
            "iTotalDisplayRecords" => count($check_arr),
            "aaData"=>$check_arr);
        echo json_encode($result);
    }else{
        $result=array(
            "sEcho" => 1,
            "iTotalRecords" => 0,
            "iTotalDisplayRecords" => 0,
            "aaData"=>$users);
        echo json_encode($result);
    }
}
//END OF ACTIVE USERS



//UPDATE USER STATUS
if($_GET['page_name']=="userStatusUpdate") {
//    if (!is_csrf_v_script()) {
//        exit();
//    }
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $status=$_GET['status'];
        $table_name=$_GET['table_name'];
        try {
            $statusUpdate = $h->table($table_name)
                ->update(['status'=>$status])
                ->where('id','=',$id)
                ->execute();
//            $sql = "UPDATE users SET status=? WHERE id=?";
//            $conn->prepare($sql)->execute([$status, $id]);
            echo "1";
            exit;
        }catch (PDOException $e) {
            echo 0;
            exit;
        }
    }
}
//END OF UPDATE USER STATUS

//OverALL DELETE
if($_GET['page_name']=="delete") {
//    if (!is_csrf_v_script()) {
//        exit();
//    }
    if(isset($_GET['table_name'])) {
        $table_name=$_GET['table_name'];
        $id =$_GET['id'];
        try {
            //DELETE IMAGE OF THE LICENSE
           // $licenceImage= $CONN->query("SELECT `image`, `cnic` FROM `license` WHERE `id`='$id'")->fetch();
            //DELETE PROFILE IMAGE
            //unlink('./uploads/images/'.$licenceImage['image']);
            $h->table($table_name)->delete()->where('id', $id)->execute();
           // $CONN->prepare("DELETE FROM $table_name WHERE id=?")->execute([$id]);
            echo "1";
            exit;
        }catch (PDOException $e) {
            echo 0;
            exit;
        }
    }

}








//CATEGORIES
if($_GET['page_name']=="categories"){
    if( ! is_csrf_v_script()){
        exit();
    }
    $srNo=0;
    $categories= $CONN->query("SELECT * FROM `categories` ORDER BY id DESC")->fetchAll();
    if(!empty($categories)){
        foreach ($categories as $category){
            //STATUS

            $action= array("action"=>"
         <a role='button'  onclick=deleteCategory('".$category['id']."') class='btn btn-danger btn-sm text-center'>
         <i class='bi bi-x text-white'></i>
         </a>
         ");

            $srNo=$srNo+1;
            $ids= array("ids"=>"$srNo");
            $check_arr[]=array_merge($ids, $category, $action);
        }
        $result=array(
            "sEcho" => 1,
            "iTotalRecords" => count($check_arr),
            "iTotalDisplayRecords" => count($check_arr),
            "aaData"=>$check_arr);
        echo json_encode($result);
    }else{
        $result=array(
            "sEcho" => 1,
            "iTotalRecords" => 0,
            "iTotalDisplayRecords" => 0,
            "aaData"=>$categories);
        echo json_encode($result);
    }
}
//END OF CATEGORIES


