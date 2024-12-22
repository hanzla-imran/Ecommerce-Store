<?php
include "config/env.php";
// include "controller/backend/Breadcrumb.php";
include "views/backend/include/header.php";
include "views/backend/include/sidebar.php";
include "views/backend/include/navbar.php";
?>
<div class="container-xxl flex-grow-1 container-p-y">


  <!-- Ajax Sourced Server-side -->
  <div class="card">
    <div class="col-12 ">
      <h5 class="card-header  ">Ajax Sourced Server-side</h5>
      <button style="float: right;" type="button" class="btn btn-primary mx-5 my-3  text-end" data-bs-toggle="modal" data-bs-target="#insertUser"> Add </button>
    </div>
    <div class="card-datatable text-nowrap table-responsive ">
   <div class="card-datatable ">

   <table id="example" class="datatables-ajax table">
                <thead>
                    <tr>
                    <th>Id</th>
            <th>Slider Heading 1</th>
            <th>Slider Heading 2</th>
            <th>Slider Description</th>
            <th>Slider Link</th>
            <th>Background img</th>
            <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                </tbody>
            </table>

   
            </div>
   
    </div>
  </div>

</div>


<!-- insert modal -->
<div class="modal fade" id="insertUser" tabindex="-1" aria-labelledby="modalInsertUserTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">
      <div class="modal-body">
        <!-- Close Button -->
        <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>

        <!-- Modal Title and Description -->
        <div class="text-center mb-6">
          <h4 class="mb-2" id="modalInsertUserTitle">Insert User Information</h4>
          <p>Inserting user details will receive a privacy audit.</p>
        </div>

        <!-- Form Start -->
        <form id="insertForm" class="row g-6" method="POST" enctype="multipart/form-data" onsubmit="return false">
          
          <!-- Slider Heading 1 -->
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">Slider Heading 1</label>
            <input type="hidden" name="id">
            <input type="text" id="modalEditUserFirstName" name="edit_heading" class="form-control" />
          </div>
          
          <!-- Slider Heading 2 -->
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Slider Heading 2</label>
            <input type="text" id="modalEditUserLastName" name="edit_heading_2" class="form-control" />
          </div>
          
          <!-- Slider Description -->
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Slider Description</label>
            <input type="text" id="modalEditUserName" name="edit_slider_desc" class="form-control" />
          </div>
          
          <!-- Background Image -->
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Background Image</label>
            <input type="file" id="modalEditUserEmail" name="edit_background_img" class="form-control" />
          </div>

          <!-- Slider Link -->
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Slider Link</label>
            <input type="text" id="modalEditTaxID" name="edit_slider_link" class="form-control modal-edit-tax-id" />
          </div>

          <!-- Buttons -->
          <div class="col-12 text-center">
            <button type="button" class="btn btn-primary me-3 mt-3" onclick="add_tool()">Insert</button>
            <button type="reset" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>

        </form>
        <!-- Form End -->

      </div>
    </div>
  </div>
</div>





<!-- edit modal -->

<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">

      <div class="modal-body">
        <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit User Information</h4>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <!-- HTML Form -->
        <form id="updateForm" class="row g-6" method="POST" enctype="multipart/form-data" onsubmit="return false">

          <div class="col-12 ">
            <label class="form-label" for="modalEditUserFirstName">Slider Heading 1</label>
            <input type="hidden" name="id">
            <input type="text" id="modalEditUserFirstName" name="heading" class="form-control" />
          </div>
          <div class="col-12 ">
            <label class="form-label" for="modalEditUserLastName">Slider Heading 2</label>
            <input type="text" id="modalEditUserLastName" name="heading_2" class="form-control" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Slider Desc</label>
            <input type="text" id="modalEditUserName" name="slider_desc" class="form-control" />
          </div>
          <div class="col-12 ">
            <div class="col-10">
              <label class="form-label" for="modalEditUserEmail">Background Image</label>
              <input type="file" id="modalEditUserEmail" name="background_img" class="form-control" />
            </div>
            <div class="col-12 col-md-2">
              <img style='width:100px' id="img" src="" >
            </div>
          </div>

          <div class="col-12 ">
            <label class="form-label" for="modalEditTaxID">Slider Link</label>
            <input type="text" id="modalEditTaxID" name="slider_link" class="form-control modal-edit-tax-id" />
          </div>



          <div class="col-12 text-center">

            <button type="button" class="btn btn-primary me-3 mt-3" onclick="insert_tool()">Update</button>
            <button type="reset" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>


<!-- delete modal -->


<div class="modal fade" id="deleteUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-simple modal-delete-user">
    <div class="modal-content">

      <div class="modal-body">
        <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h4 class="mb-2">Confirm Deletion</h4>
          <p>Are you sure you want to delete this record? This action cannot be undone.</p>
        </div>
        <form id="deleteForm" class="row g-6" method="POST" enctype="multipart/form-data" onsubmit="return false">
          <input type="hidden" name="id_delete" id="id_delete">
          <input type="hidden" name="delete" id="delete" value="1">

        </form>
        <!-- Hidden input to hold the ID of the record to delete -->

        <div class="col-12 text-center">
          <button type="button" class="btn btn-danger me-3 mt-3" onclick="deleteTool()">Delete</button>
          <button type="button" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include "views/backend/include/footer.php";
?>
<!-- DataTables CSS -->


<!-- DataTables JS -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function() {
        
        new DataTable('#example', {
            ajax: {
                url: '/Breadcrumb', 
                type: 'POST', 
                data:  {
                    
                    fetch : true 
                   
                },

            },
            columns: [{
                    data: 'id'
                }, // Data keys must match the structure from your server
                {
                    data: 'slider_heading_1'
                },
                {
                    data: 'slider_heading_2'
                },
                {
                    data: 'slider_desc'
                },
                {
                    data: 'slider_link'
                },
                {
                    data: 'backgroud_img'
                },
                {
                    data: 'actions'
                },
            ],

            scrollCollapse: true,
            scroller: true,
            language: {
                emptyTable: "No data available"
            }
        });

   
    });

    
  function insert_tool() {

    var formData = new FormData(document.getElementById('updateForm'));


    $.ajax({
      url: '/Breadcrumb',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        console.log(response);

        if (response === '1') {
          $('#example').DataTable().ajax.reload();
          $('#editUser').modal('hide');
          Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Form submitted successfully!',
          });
          document.getElementById('insertForm').reset();
          // $("#section").load(location.href + " #section > *");
          // $('#editUser').modal('hide');
          // $('#section').load(window.location.href + '#section');

        } else if (response === '0') {
          $('#editUser').modal('hide');
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
          });
        } else if (response === '2') {
          $('#editUser').modal('hide');
          Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            text: 'Please fill the form correctly.',
          });
        } else {
          $('#editUser').modal('hide');
          Swal.fire({
            icon: 'warning',
            title: 'Unexpected Response',
            text: 'Received unexpected response: ' + response,
          });
        }
      },
      error: function(xhr, status, error) {
        $('#editUser').modal('hide');
        console.error(xhr.responseText);
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'An unexpected error occurred. Please try again later.',
        });
      }
    });
  }


  $('body').on('click', '.edit', function() {
    var id = $(this).data('id');

    console.log(id);

    $('#updateForm').trigger("reset");

    $.ajax({
      url: "/Breadcrumb",
      type: "POST",
      data: {
        edit: 1,
        id: id,
      },
      cache: false,
      success: function(dataResult) {
        var dataResult = JSON.parse(dataResult);

        console.log(dataResult);
        // console.log(dataResult[0].id);
        $('input[name=id]').val(dataResult[0].id);

        $('input[name=heading]').val(dataResult[0].slider_heading_1);
        

        $('#img').attr('src', '<?= $env['APP_URL'] ?>uploads/profile/'+dataResult[0].backgroud_img);
        $('input[name=heading_2]').val(dataResult[0].slider_heading_2);
        $('input[name=slider_desc]').val(dataResult[0].slider_desc);
        $('input[name=slider_link]').val(dataResult[0].slider_link);


      }
    });
  });

  function add_tool() {

    var formData = new FormData(document.getElementById('insertForm'));


    $.ajax({
      url: '/Breadcrumb',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        console.log(response);
        if (response === '1') {
          $('#example').DataTable().ajax.reload();
          Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Form submitted successfully!',
          });
          document.getElementById('insertForm').reset();
          $('#insertUser').modal('hide');
          // $("#section").load(location.href + " #section > *");
          // $('#section').load(window.location.href + '#section');

        } else if (response === '0') {
          $('#insertUser').modal('hide');
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
          });


        } else if (response === '2') {
          $('#insertUser').modal('hide');
          Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            text: 'Please fill the form correctly.',
          });
        } else {
          $('#insertUser').modal('hide');
          Swal.fire({
            icon: 'warning',
            title: 'Unexpected Response',
            text: 'Received unexpected response: ' + response,
          });
        }
      },
      error: function(xhr, status, error) {
        $('#insertUser').modal('hide');
        console.error(xhr.responseText);
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'An unexpected error occurred. Please try again later.',
        });
      }
    });
  }


  function deleteTool() {
    var formData = new FormData(document.getElementById('deleteForm'));

    $.ajax({
      url: '/Breadcrumb', // Update this URL to match your delete handler
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        console.log(response);
        if (response === '1') {
          $('#example').DataTable().ajax.reload();
          Swal.fire({
            icon: 'success',
            title: 'Deleted!',
            text: 'The item has been deleted successfully.',
          });
          // $("#section").load(location.href + " #section > *");
          // Optionally, refresh the section or remove the deleted item from the UI
          // $('#section').load(window.location.href + ' #section');
        } else if (response === '0') {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong! The item could not be deleted.',
          });
        } else {
          Swal.fire({
            icon: 'warning',
            title: 'Unexpected Response',
            text: 'Received unexpected response: ' + response,
          });
        }
        // Close the modal
        $('#deleteUser').modal('hide');
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'An unexpected error occurred. Please try again later.',
        });
        // Close the modal
        $('#deleteUser').modal('hide');
      }
    });
  }
  $('body').on('click', '.delete', function() {
    var id = $(this).data('id');
    $('#deleteForm').trigger("reset");
    $('#id_delete').val(id);
  });
</script>