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

        <div class="card-body text-nowrap table-responsive ">
            <table id="example" class="datatables-ajax table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Roll</th>
                        <th>Status</th>
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
                <form method="POST" id="RegisterForm" enctype="multipart/form-data">

                    <!-- Slider Heading 1 -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserFirstName">First Name</label>
                        <!-- <input type="hidden" name="id"> -->
                        <input type="text" id="modalEditUserFirstName" name="first-name" class="form-control" />
                    </div>

                    <!-- Slider Heading 2 -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserLastName">Last Name</label>
                        <input type="text" id="modalEditUserLastName" name="last-name" class="form-control" />
                    </div>

                    <!-- Slider Description -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserName">Phone Number</label>
                        <input type="text" id="modalEditUserName" name="phone" class="form-control" />
                    </div>

                    <!-- Background Image -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserEmail">Email Address </label>
                        <input type="text" id="modalEditUserEmail" name="email" class="form-control" />
                    </div>

                    <!-- Slider Link -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditTaxID">Password</label>
                        <input type="text" id="modalEditTaxID" name="password" class="form-control modal-edit-tax-id" />
                    </div>

                    <div class="col-12 ">
                        <label class="form-label" for="modalEditTaxID">Confirm Password</label>
                        <input type="text" id="modalEditTaxID" name="confirm-password" class="form-control modal-edit-tax-id" />
                    </div>

                    <!-- Buttons -->
                    <div class="col-12 text-center">
                        <!-- <button type="button" class="btn btn-primary me-3 mt-3" onclick="add_tool()">Insert</button> -->
                        <button type="button" class="btn btn-primary me-3 mt-3 " onclick="insert_tool()">Register Now</button>
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

                    <!-- Slider Heading 1 -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserFirstName">First Name</label>
                        <input type="hidden" name="id">
                        <input type="text" id="modalEditUserFirstName" name="efirst_name" class="form-control" />
                    </div>

                    <!-- Slider Heading 2 -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserLastName">Last Name</label>
                        <input type="text" id="modalEditUserLastName" name="elast_name" class="form-control" />
                    </div>

                    <!-- Slider Description -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserName">Phone Number</label>
                        <input type="text" id="modalEditUserName" name="ephone" class="form-control" />
                    </div>

                    <!-- Background Image -->
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserEmail">Email Address </label>
                        <input type="text" id="modalEditUserEmail" name="eemail" class="form-control" />
                    </div>

                    <div class="col-12 text-center">

                        <button type="button" class="btn btn-primary me-3 mt-3" onclick="edit_tool()">Update</button>
                        <button type="reset" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- delete -->



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
                url: '/users',
                type: 'POST',
                data: {

                    fetch: true

                },

            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'first_name'
                },
                {
                    data: 'last_name'
                },
                {
                    data: 'phone'
                },
                {
                    data: 'email'
                },
                {
                    data: 'type'
                },
                {
                    data: 'status'
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
        var formData = new FormData(document.getElementById('RegisterForm'));
        $.ajax({
            url: '/register',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response == '1') {

                    $('#example').DataTable().ajax.reload();
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Form submitted successfully!',
                    });
                    document.getElementById('RegisterForm').reset();

                } else if (response == '0') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something Went Wrong!',
                    });
                } else if (response == '2') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill the form correctly',
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill the form correctly',
                });
            }
        });
    }

    function changestatus(id) {
        var csrf_token = $("input[name=csrf]").val();

        $.ajax({
            url: '/users',
            type: 'POST',
            data: {
                id: id,
                status: 'status',
                csrf: csrf_token
            },
            success: function(data) {
                console.log(data);
                let response = typeof data === "string" ? JSON.parse(data) : data;
                if (response.status === 1) {
                    $('#example').DataTable().ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'User Block successfully!',
                    });
                } else if (response.status == 2) {
                    $('#example').DataTable().ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'User Active successfully!',
                    });
                } else {
                    alert.error('Something went wrong.');
                }
            },
            error: function(xhr, status, error) {
                alert.error('An error occurred: ' + xhr.responseText);
            }
        });
    }

    function edit_tool() {

        var formData = new FormData(document.getElementById('updateForm'));


        $.ajax({
            url: '/usersedit',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                let res = JSON.parse(response);
                if (res.status === 1) {
                    $('#example').DataTable().ajax.reload();
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: res.message,
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: res.message,
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
            url: "/usersedit",
            type: "POST",
            data: {
                edit: 1,
                id: id,
                feh: 'true'
            },

            cache: false,

            success: function(dataResult) {
                console.log(dataResult);

                var dataResult = JSON.parse(dataResult);
                console.log(dataResult[0].id);
                $('input[name=id]').val(dataResult[0].id);
                $('input[name=efirst_name]').val(dataResult[0].first_name);
                $('input[name=elast_name]').val(dataResult[0].last_name);
                $('input[name=ephone]').val(dataResult[0].email);
                $('input[name=eemail]').val(dataResult[0].last_name);

            }
        });
    });



    function deleteTool() {
        var formData = new FormData(document.getElementById('deleteForm'));

    $.ajax({
        url: '/usersedit', 
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