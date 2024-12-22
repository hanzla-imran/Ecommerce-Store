<?php
include("config/enviroment.php");
header("Content-Type: application/json; charset=UTF-8");

//services
if($_GET['page_name']=="services"){
//    if( ! is_csrf_v_script()){
//        exit();
//    }
    $srNo=0;
    $services= $h->table('services')
        ->select()
        ->get();
    if(!empty($services)){
        foreach ($services as $service){
            $name= array("nameView"=>'<div class="nk-tb-col">
                <strong>'.$service['name'].'</strong>
            </div>');
            $price= array("priceView"=>'<div class="nk-tb-col">
                <strong>'.$service['price'].'$</strong>
            </div>');
            $image= array("imageView"=>'<div class="nk-tb-col">
                <img width="50%" src="uploads/services/'.$service['image'].'" alt="">
            </div>');
            $created_at= array("createdAt"=>'<div class="nk-tb-col">
                <strong>'.$service['created_at'].'</strong>
            </div>');
            $action= array("action"=>"<div class='nk-tb-col'>
<a role='button' data-bs-toggle='modal' data-bs-target='#editExampleModal' data-id='".$service['id']."' class='edit btn btn-success text-center'>
           <i class='ni ni-edit'></i>
           </a>
         <a role='button'  onclick=deleteData('".$service['id']."') class='btn btn-danger btn-sm text-center'>
         <em class='icon ni ni-trash'></em></a>
         </div>");

            $srNo=$srNo+1;
            $ids= array("ids"=>"$srNo");

            $check_arr[]=array_merge($ids,$name,$price,$image, $created_at, $action);
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
            "aaData"=>$services);
        echo json_encode($result);
    }
}

//END OF  services

//services
if($_GET['page_name']=="fetch_service"){
//    if( ! is_csrf_v_script()){
//        exit();
//    }
    $srNo=0;
    @$ser_id=$_POST['id'];
    $service= $h->table('services')
        ->select()->where('id','=',$ser_id)
        ->one();
    header('Content-Type: application/json');
    echo json_encode($service);
    exit;
}


// UPDATE FORM
if ($_GET['page_name']=="update_service") {
    $flag=false;
    $id= $_POST['service_id'];

    @$edit_name= $_POST['edit_name'];
    $edit_price= $_POST['edit_price'];
    $edit_description=base64_encode($_POST['edit_description']);
    if (isset($edit_name) && !empty($edit_name)) {
        $services=$h->table('services');
        $available=$services->select()->where('id','=',$id)->count();
        $fetchService=$services->select()->where('id','=',$id)->one();
        if($available > 0) {
            //Unlink Image
            if(isset($_FILES['edit_image']) && !empty($_FILES['edit_image']['name'])){
                @unlink("uploads/service/".$fetchService['image']);
                $file=uploadDoc("edit_image","./uploads/services/");
                $h->table('services')->update(['name' => $edit_name, 'price'=>$edit_price, 'image'=>$file, 'description'=>$edit_description])->where('id','=',$id)->execute();
                $flag=true;
            }else{
                $h->table('services')->update(['name' => $edit_name, 'price'=>$edit_price, 'description'=>$edit_description])->where('id','=',$id)->execute();
                $flag=true;
            }
            if ($flag) {
                echo "1";
                exit();
            } else {
                echo "0";
                exit();
            }
        }else{
            echo "2";
            exit();
        }
    }
}



//ADD services
if($_GET['page_name']=="add_service"){
    // INSERT FORM
    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['price']) && !empty($_POST['price'])
                && isset($_POST['description']) && !empty($_POST['description']) && isset($_FILES['image']) && !empty($_FILES['image'])) {
        $name= ucwords($_POST['name']);
        if (isset($name) && !empty($name)) {
            $description= base64_encode($_POST['description']);
            $slug=slugify($_POST['name']);
            $price=slugify($_POST['price']);

            if(isset($_FILES['image']) && !empty($_FILES['image'])){
               $file=uploadDoc("image","./uploads/services/");
                $res=$h->table('services')
                    ->insert(['name' => $name,'slug'=>$slug,'price'=>$price, 'image' => $file, 'description'=>$description])
                    ->execute();
            }else
                $file=NULL;

                if ($res) {
                    echo "1";
                    exit();
                }else {
                    echo "0";
                    exit();
                }

        }
    }
}
//END OF ADD services

//UPDATE NOTIFICATION STATUS
if($_GET['page_name']=="notificationStatus") {
//    if (!is_csrf_v_script()) {
//        exit();
//    }
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $status=$_GET['status'];
        try {
            $statusUpdate = $h->table('notifications')
                ->update(['status'=>$status])
                ->where('id','=',$id)
                ->execute();

            echo "1";
            exit;
        }catch (PDOException $e) {
            echo 0;
            exit;
        }
    }
}
//END OF UPDATE NOTIFICATION STATUS


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