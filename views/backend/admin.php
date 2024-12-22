<?php
include "include/header.php";
include "include/sidebar.php";
include "include/navbar.php";
?>



<!-- Content wrapper -->
<div class="content-wrapper">

  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <?php
      $users = $h->table('users')->select()
        ->where('type', '!=', 'admin')
        ->count();
      ?>
      <div class="col-xxl-4 col-md-4">
        <div class="card h-100">
          <div class="card-body d-flex justify-content-between" style="position: relative;">
            <div class="d-flex flex-column me-xl-7">
              <div class="card-title mb-auto ">
                <h5 class="mb-2 text-nowrap ">Total Users</h5>
              </div>
              <div class="chart-statistics">
                <h3 class="card-title mb-1 "><?= $users ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      $active = $h->table('users')->select()
        ->where('type', '!=', 'admin')
        ->where('status', '=', 'active')
        ->count();
      ?>
      <div class="col-xxl-4 col-md-4">
        <div class="card h-100">
          <div class="card-body d-flex justify-content-between" style="position: relative;">
            <div class="d-flex flex-column me-xl-7">
              <div class="card-title mb-auto ">
                <h5 class="mb-2 text-nowrap ">Active</h5>
              </div>
              <div class="chart-statistics">
                <h3 class="card-title mb-1 "><?= $active ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      $block = $h->table('users')->select()
        ->where('type', '!=', 'admin')
        ->where('status', '=', 'block')
        ->count();
      ?>
      <div class="col-xxl-4 col-md-4">
        <div class="card h-100">
          <div class="card-body d-flex justify-content-between" style="position: relative;">
            <div class="d-flex flex-column me-xl-7">
              <div class="card-title mb-auto ">
                <h5 class="mb-2 text-nowrap ">Block</h5>
              </div>
              <div class="chart-statistics">
                <h3 class="card-title mb-1 "><?= $block ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <?php
    include "include/footer.php";
    ?>