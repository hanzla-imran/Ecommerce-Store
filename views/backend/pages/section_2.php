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
            <button style="float: right;" type="button" class="insert btn btn-primary mx-5 my-3  text-end" data-bs-toggle="modal" data-bs-target="#insertUser"> Add </button>
        </div>




        <div class="card-datatable text-nowrap table-responsive ">


        <table id="example" class="datatables-ajax table">
                <thead>
                    <tr>
                    <th>Id</th>
                        <th>Product img</th>
                        <th>Hover img</th>
                        <th>Quick view link</th>
                        <th>Catagories</th>
                        <th>Catagories link</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                </tbody>
            </table>

            
        </div>
    </div>

</div>

    

<!-- insert modal -->

<div class="modal fade" id="insertUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-6">
                    <h4 class="mb-2">Insert User Information</h4>
                    <p>Inserting user details will receive a privacy audit.</p>
                </div>
                <!-- HTML Form -->
                <form id="insertForm" class="row g-6" method="POST" enctype="multipart/form-data" onsubmit="return false">
                    <div class="col-12">
                        <label class="form-label" for="icon">Product img</label>
                        <input type="hidden" name="id">
                        <input type="file" id="icon" name="product_imgg" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="heading">Hover img</label>
                        <input type="file" id="heading" name="hover_imgg" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Quick view link</label>
                        <input type="text" id="description" name="quick_view_linkk" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Catagories</label>
                        <input type="text" id="description" name="catagoriess" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Catagories link</label>
                        <input type="text" id="description" name="catagories_linkk" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Product title</label>
                        <input type="text" id="description" name="product_title" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Price</label>
                        <input type="text" id="description" name="price" class="form-control" />
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary me-3 mt-3" onclick="add_tool()">Insert</button>
                        <button type="reset" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>

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
                <div class="col-12 col-md-10">
                        <label class="form-label" for="icon">Product img</label>
                        <input type="hidden" name="id">
                        <input type="file" id="icon" name="product_img" class="form-control" />
                    </div>
                    <div class="col-12 col-md-2 pt-5">
                       <img style ='width:60px' id="imgg" src="" alt="">
                    </div>
                    <div class="col-12 col-md-10">
                        <label class="form-label" for="heading">Hover img</label>
                        <input type="file" id="heading" name="hover_img" class="form-control" />
                    </div>
                    <div class="col-12 col-md-2 pt-5">
                       <img style ='width:60px'  id="img" src="" alt="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Quick view link</label>
                        <input type="text" id="description" name="quick_view_link" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Catagories</label>
                        <input type="text" id="description" name="catagories" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Catagories link</label>
                        <input type="text" id="description" name="catagories_link" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Product titlee</label>
                        <input type="text" id="description" name="product_titlee" class="form-control" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Pricee</label>
                        <input type="text" id="description" name="pricee" class="form-control" />
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
    <div class="modal-dialog modal-lg modal-simple modal-delete-user">
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



<script>


$(document).ready(function() {
        
        new DataTable('#example', {
            ajax: {
                url: '/section_2', 
                type: 'POST', 
                data:  {
                    
                    fetch : true 
                   
                },

            },
            columns: [{
                    data: 'id'
                }, 
                {
                    data: 'product_img'
                },
               
                {
                    data: 'hover_img'
                },
                {
                    data: 'quick_view_link'
                },
                {
                    data: 'catagories'
                },
                {
                    data: 'catagories_link'
                },
                {
                    data: 'product_title'
                },
                {
                    data: 'price'
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
            url: '/section_2',
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
                        text: 'product_img is required.',
                    });
                } else if (response === '4') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'hover_img is required.',
                    });
                } else if (response === '5') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'quick_view_link is required.',
                    });
                } else if (response === '6') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'catagories is required.',
                    });
                } else if (response === '7') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'catagories_link is required.',
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
            url: "/section_2",
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
                $('#imgg').attr('src', '<?= $env['APP_URL'] ?>uploads/profile/'+dataResult[0].product_img);
                $('#img').attr('src', '<?= $env['APP_URL'] ?>uploads/profile/'+dataResult[0].hover_img);
                $('input[name=quick_view_link]').val(dataResult[0].quick_view_link);
                $('input[name=catagories]').val(dataResult[0].catagories);
                $('input[name=catagories_link]').val(dataResult[0].catagories_link);
                $('input[name=product_titlee]').val(dataResult[0].product_title);
                $('input[name=pricee]').val(dataResult[0].price);
              
            }
        });
    });


   




    // insertdata


    function add_tool() {

        var formData = new FormData(document.getElementById('insertForm'));


        $.ajax({
            url: '/section_2',
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
                } else if (response === '3') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'product_img is required.',
                    });
                } else if (response === '4') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'hover_img is required.',
                    });
                } else if (response === '5') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'quick_view_link is required.',
                    });
                } else if (response === '6') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'catagories is required.',
                    });
                } else if (response === '7') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'catagories_link is required.',
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

  


// delete

    function deleteTool() {
        var formData = new FormData(document.getElementById('deleteForm'));

    $.ajax({
        url: '/section_2', 
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
            
            $('#deleteUser').modal('hide');
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An unexpected error occurred. Please try again later.',
            });
            
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