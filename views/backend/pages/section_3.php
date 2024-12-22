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

        <table id="example" class="datatables-ajax table">
                <thead>
                    <tr>
                    <th>Id</th>
                        <th>blog_img</th>
                        <th>blog_link</th>
                        <th>blog_tag_1</th>
                        <th>blog_tag_1_link</th>
                        <th>blog_tag_2</th>
                        <th>blog_tag_2_link</th>
                        <th>blog_box_link</th>
                        <th>blog_box_desc</th>
                        <th>date_of_upload</th>
                        <th>posted_by</th>
                        <th>posted_by_link</th>
                        <th>icon</th>
                        <th>icon_data</th>
                        <th>blog_content</th>
                        <th>read_more_link</th>
                        <th>read_more</th>
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
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Blog img</label>
                        <input type="hidden" name="id">
                        <input type="file" id="modalEditUserFirstName" name="blog_img" class="form-control" />
                    </div>
                  
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLastName">Blog link</label>
                        <input type="text" id="modalEditUserLastName" name="blog_link" class="form-control" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserName">Blog tag 1</label>
                        <input type="text" id="modalEditUserName" name="blog_tag_1" class="form-control"  />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserEmail">Blog tag 1 link</label>
                        <input type="text" id="modalEditUserEmail" name="blog_tag_1_link" class="form-control" />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog tag 2</label>
                        <input type="text" id="modalEditTaxID" name="blog_tag_2" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog tag 2 link</label>
                        <input type="text" id="modalEditTaxID" name="blog_tag_2_link" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog box link</label>
                        <input type="text" id="modalEditTaxID" name="blog_box_link" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 ">
                        <label class="form-label" for="modalEditTaxID">Blog box desc</label>
                        <input type="text" id="modalEditTaxID" name="blog_box_desc" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Date of upload</label>
                        <input type="text" id="modalEditTaxID" name="date_of_upload" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Posted by</label>
                        <input type="text" id="modalEditTaxID" name="posted_by" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Posted by link</label>
                        <input type="text" id="modalEditTaxID" name="posted_by_link" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Icon</label>
                        <input type="text" id="modalEditTaxID" name="icon" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Icon data</label>
                        <input type="text" id="modalEditTaxID" name="icon_data" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog content</label>
                        <input type="text" id="modalEditTaxID" name="blog_content" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Read more link</label>
                        <input type="text" id="modalEditTaxID" name="read_more_link" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Read more</label>
                        <input type="text" id="modalEditTaxID" name="read_more" class="form-control modal-edit-tax-id"  />
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
                        <label class="form-label" for="modalEditUserFirstName">Blog img</label>
                        <input type="hidden" name="id" > 
                        <input type="file" id="modalEditUserFirstName" name="blog_imgg" class="form-control" />
                    </div>
                    <div class="col-12 col-md-2 pt-5">
                       <img style ='width:60px' id="img" src="" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLastName">Blog link</label>
                        <input type="text" id="modalEditUserLastName" name="blog_linkk" class="form-control" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserName">Blog tag 1</label>
                        <input type="text" id="modalEditUserName" name="blog_tag_11" class="form-control"  />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserEmail">Blog tag 1 link</label>
                        <input type="text" id="modalEditUserEmail" name="blog_tag_1_linkk" class="form-control" />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog tag 2</label>
                        <input type="text" id="modalEditTaxID" name="blog_tag_22" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog tag 2 link</label>
                        <input type="text" id="modalEditTaxID" name="blog_tag_2_linkk" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog box link</label>
                        <input type="text" id="modalEditTaxID" name="blog_box_linkk" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 ">
                        <label class="form-label" for="modalEditTaxID">Blog box desc</label>
                        <input type="text" id="modalEditTaxID" name="blog_box_descc" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Date of upload</label>
                        <input type="text" id="modalEditTaxID" name="date_of_uploadd" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Posted by</label>
                        <input type="text" id="modalEditTaxID" name="posted_byy" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Posted by link</label>
                        <input type="text" id="modalEditTaxID" name="posted_by_linkk" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Icon</label>
                        <input type="text" id="modalEditTaxID" name="iconn" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Icon data</label>
                        <input type="text" id="modalEditTaxID" name="icon_dataa" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Blog content</label>
                        <input type="text" id="modalEditTaxID" name="blog_contentt" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Read more link</label>
                        <input type="text" id="modalEditTaxID" name="read_more_linkk" class="form-control modal-edit-tax-id"  />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Read more</label>
                        <input type="text" id="modalEditTaxID" name="read_moree" class="form-control modal-edit-tax-id"  />
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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


<script>



$(document).ready(function() {
        
        new DataTable('#example', {
            ajax: {
                url: '/section_3', 
                type: 'POST', 
                data:  {
                    
                    fetch : true 
                   
                },

            },
            columns: [{
                    data: 'id'
                }, 
                {
                    data: 'blog_img'
                },
               
                {
                    data: 'blog_link'
                },
                {
                    data: 'blog_tag_1'
                },
                {
                    data: 'blog_tag_1_link'
                },
                {
                    data: 'blog_tag_2'
                },
                {
                    data: 'blog_tag_2_link'
                },
                {
                    data: 'blog_box_link'
                },
                {
                    data: 'blog_box_desc'
                },
                {
                    data: 'date_of_upload'
                },
                {
                    data: 'posted_by'
                },
                {
                    data: 'posted_by_link'
                },
                {
                    data: 'icon'
                },
                {
                    data: 'icon_data'
                },
                {
                    data: 'blog_content'
                },
                {
                    data: 'read_more_link'
                },
                {
                    data: 'read_more'
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
            url: '/section_3',
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
                        text: 'blog_img is required.',
                    });
                } else if (response === '4') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_link is required.',
                    });
                } else if (response === '5') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_tag_1 is required.',
                    });
                } else if (response === '6') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_tag_1_link is required.',
                    });
                } else if (response === '7') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_tag_2 is required.',
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
            url: "/section_3",
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
                
                $('input[name=blog_linkk]').val(dataResult[0].blog_link); 
                $('#img').attr('src', '<?= $env['APP_URL'] ?>uploads/profile/'+dataResult[0].blog_img);
                $('input[name=blog_tag_11]').val(dataResult[0].blog_tag_1);
                $('input[name=blog_tag_1_linkk]').val(dataResult[0].blog_tag_1_link);
                $('input[name=blog_tag_22]').val(dataResult[0].blog_tag_2);
                $('input[name=blog_tag_2_linkk]').val(dataResult[0].blog_tag_2_link);
                $('input[name=blog_box_linkk]').val(dataResult[0].blog_box_link);
                $('input[name=blog_box_descc]').val(dataResult[0].blog_box_desc);
                $('input[name=date_of_uploadd]').val(dataResult[0].date_of_upload);
                $('input[name=posted_byy]').val(dataResult[0].posted_by);
                $('input[name=posted_by_linkk]').val(dataResult[0].posted_by_link);
                $('input[name=iconn]').val(dataResult[0].icon);
                $('input[name=icon_dataa]').val(dataResult[0].icon_data);
                $('input[name=blog_contentt]').val(dataResult[0].blog_content);
                $('input[name=read_more_linkk]').val(dataResult[0].read_more_link);
                $('input[name=read_moree]').val(dataResult[0].read_more);

            }
        });
    });







    // insertdata


    function add_tool() {

        var formData = new FormData(document.getElementById('insertForm'));


        $.ajax({
            url: '/section_3',
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
                        text: 'blog_img is required.',
                    });
                } else if (response === '4') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_link is required.',
                    });
                } else if (response === '5') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_tag_1 is required.',
                    });
                } else if (response === '6') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_tag_1_link is required.',
                    });
                } else if (response === '7') {
                    $('#insertUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_tag_2 is required.',
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
            url: '/section_3', // Update this URL to match your delete handler
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