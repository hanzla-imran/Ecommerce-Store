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




        
        <div class="card-body text-nowrap table-responsive ">
            <table id="example" class="datatables-ajax table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
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
                        <label class="form-label" for="modalEditUserFirstName">Title </label>
                        <input type="hidden" name="id" > 
                        <input type="text" id="modalEditUserFirstName" name="title" class="form-control" />
                    </div>
                <div class="col-12 ">
                        <label class="form-label" for="modalEditUserFirstName">description</label>
                        <input type="hidden" name="id" > 
                        <input type="text" id="modalEditUserFirstName" name="description" class="form-control" />
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



<script>
 $(document).ready(function() {
        // Initialize DataTable
        new DataTable('#example', {
            ajax: {
                url: '/section_4', // Replace with your server-side data source
                type: 'POST', // Specify the request method
                data:  {
                    // Add any additional data if necessary
                    fetch : true // Custom key for fetching data
                   
                },

            },
            columns: [{
                    data: 'id'
                }, // Data keys must match the structure from your server
                {
                    data: 'title'
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
            url: '/section_4',
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
                   
                    // $("#section").load(location.href + " #section > *");
                  
                 
                    

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
                } else if (response === '3') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_img is required.',
                    });
                }  else if (response === '5') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_tag_1 is required.',
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

        $('#updateForm').trigger("reset");

        $.ajax({
            url: "/section_4",
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
                $('input[name=title]').val(dataResult[0].title); 
                $('input[name=description]').val(dataResult[0].description);
               
            }
        });
    });


</script>