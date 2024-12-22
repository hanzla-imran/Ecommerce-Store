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
        </div>




        <div class="card-datatable text-nowrap table-responsive ">
            <table id="example" class="datatables-ajax table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Icon</th>
                        <th>Heading</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                </tbody>
            </table>
          
        </div>
    </div>

</div>

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
                    <div class="col-12">
                        <label class="form-label" for="icon">Icon</label>
                        <input type="hidden" name="id">
                        <input type="text" id="icon" name="icon" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="heading">Heading</label>
                        <input type="text" id="heading" name="heading" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control" />
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
<?php
include "views/backend/include/footer.php";
?>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


<script>

$(document).ready(function() {
        
        new DataTable('#example', {
            ajax: {
                url: '/section_1', 
                type: 'POST', 
                data:  {
                    
                    fetch : true 
                   
                },

            },
            columns: [{
                    data: 'id'
                }, 
                {
                    data: 'icon'
                },
               
                {
                    data: 'heading'
                },
                {
                    data: 'description'
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
            url: '/section_1',
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
                    document.getElementById('updateForm').reset();
                    $('#editUser').modal('hide');
                    // $("#section").load(location.href + " #section > *");
                    // $('#section').load(window.location.href + '#section');
                    // $('#section').load(window.location.href + '#section');
                } else if (response === '0') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                } else if (response === '2') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'Please fill the form correctly.',
                    });
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Unexpected Response',
                        text: 'Received unexpected response: ' + response,
                    });
                }
            },
            error: function(xhr, status, error) {
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

        $('#updateForm').trigger("reset");

        $.ajax({
            url: "/section_1",
            type: "POST",
            data: {
                edit: 1,
                id: id,
            },
            cache: false,
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                console.log(dataResult[0].id);
                $('input[name=id]').val(dataResult[0].id);
                $('input[name=icon]').val(dataResult[0].icon); // Matching 'icon'
                $('input[name=heading]').val(dataResult[0].heading); // Matching 'heading'
                $('input[name=description]').val(dataResult[0].description);

            }
        });
    });
</script>