<?php
include "config/env.php";
include "views/backend/include/header.php";
include "views/backend/include/sidebar.php";
include "views/backend/include/navbar.php";

$name = $_SESSION['users']['first_name'];
$last_name = $_SESSION['users']['last_name'];
$phone = $_SESSION['users']['phone'];
$email = $_SESSION['users']['email'];
$type = $_SESSION['users']['type'];
$status = $_SESSION['users']['status'];
?>


 

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="user-profile-header-banner">
        <img src="<?= $env['APP_URL']?>assets/admin/img/pages/profile-banner.png" width="956vh" alt="Banner image" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="<?= $env['APP_URL']?>assets/admin/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-lg-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4 class="mb-2 mt-lg-6"><?=$name?></h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 my-2">
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-palette ti-lg'></i><span class="fw-medium">Web Designer</span>
                </li>
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-map-pin ti-lg'></i><span class="fw-medium">Multan City</span>
                </li>
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-calendar ti-lg'></i><span class="fw-medium"> Joined April 2024</span></li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary mb-1">
              <i class='ti ti-user-check ti-xs me-2'></i>Connected
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-sm-row mb-6 gap-2 gap-lg-0">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='ti-sm ti ti-user-check me-1_5'></i> Profile</a></li>
      </ul>
    </div>
  </div>
</div>
<!--/ Navbar pills -->

<!-- User Profile Content -->
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-6">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted small">About</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="ti ti-user ti-lg"></i><span class="fw-medium mx-2">Full Name:</span> <span><?= $name?> <?= $last_name?></span></li>
          <li class="d-flex align-items-center mb-4"><i class="ti ti-check ti-lg"></i><span class="fw-medium mx-2">Status:</span> <span><?=$status?></span></li>
          <li class="d-flex align-items-center mb-4"><i class="ti ti-crown ti-lg"></i><span class="fw-medium mx-2">Role:</span> <span><?=$type?></span></li>
          <li class="d-flex align-items-center mb-4"><i class="ti ti-flag ti-lg"></i><span class="fw-medium mx-2">Country:</span> <span>Multan</span></li>
          <li class="d-flex align-items-center mb-2"><i class="ti ti-language ti-lg"></i><span class="fw-medium mx-2">Languages:</span> <span>English</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted small">Contacts</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="ti ti-phone-call ti-lg"></i><span class="fw-medium mx-2">Contact:</span> <span><?=$phone?></span></li>
          
          <li class="d-flex align-items-center mb-4"><i class="ti ti-mail ti-lg"></i><span class="fw-medium mx-2">Email:</span> <span><?=$email?></span></li>
        </ul>
      
      
      </div>
    </div>

  </div>
 
</div>
<!--/ User Profile Content -->

          </div>


<?php
include "views/backend/include/footer.php";
?>


