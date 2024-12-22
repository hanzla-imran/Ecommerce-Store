
          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div
                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                <!-- <div class="text-body">
                  ©
                  <script>
                    document.write(new Date().getFullYear())

                  </script>, made with ❤️ by <a href="https://pixinvent.com/" target="_blank" class="footer-link">Pixinvent</a>
                </div> -->
              
              </div>
            </div>
          </footer>
          <!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

  </div>
  <!-- / Layout wrapper -->



  <?php
if (!empty($error)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '" . $error . "',
        });
    };
    </script>";
} elseif (!empty($success)) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '" .$success . "',
        });
    };
    </script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/popper/popper.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/js/bootstrap.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/node-waves/node-waves.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/hammer/hammer.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/i18n/i18n.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/swiper/swiper.js"></script>
  <script src="<?= $env['APP_URL']?>assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

  <!-- Main JS -->
  <script src="<?= $env['APP_URL']?>assets/admin/js/main.js"></script>


  <!-- Page JS -->
  <script src="<?= $env['APP_URL']?>assets/admin/js/dashboards-analytics.js"></script>

  <!-- <script src="<?= $env['APP_URL']?>assets/admin/js/tables-datatables-advanced.js"></script> -->

<!-- datatable -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- Optional: DataTables Scroller extension -->
    <script src="https://cdn.datatables.net/scroller/2.2.5/js/dataTables.scroller.min.js"></script>
   

<!-- ligthbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js" integrity="sha512-KbRFbjA5bwNan6DvPl1ODUolvTTZ/vckssnFhka5cG80JVa5zSlRPCr055xSgU/q6oMIGhZWLhcbgIC0fyw3RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  

</body>




</html>

<!-- beautify ignore:end -->