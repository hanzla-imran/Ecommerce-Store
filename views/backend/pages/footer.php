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
                        <th>footer_desc</th>
                        <th>title</th>
                        <th>Number</th>
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
                    <div class="col-12 col-md-10">
                        <label class="form-label" for="modalEditUserFirstName">footer_logo</label>
                        <input type="hidden" name="id">
                        <input type="file" id="modalEditUserFirstName" name="footer_logo" class="form-control" />
                    </div>
                    <div class="col-12 col-md-2">
                        <img style='width:60px' id="imgg" src="" alt="">
                    </div>
                    <div class="col-12 ">
                        <label class="form-label" for="modalEditUserLastName">footer_desc</label>
                        <input type="text" id="modalEditUserLastName" name="footer_desc" class="form-control" />
                    </div>

                    <div class="col-12 col-md-10">
                        <label class="form-label" for="modalEditUserFirstName">footer_img</label>

                        <input type="file" id="modalEditUserFirstName" name="footer_img" class="form-control" />
                    </div>
                    <div class="col-12 col-md-2">
                        <img style='width:60px' id="img" src="" alt="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_1</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_1" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_1_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_1_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_2</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_2" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_2_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_2_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_3</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_3" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_3_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_3_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_4</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_4" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_4_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_4_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_5</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_5" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_li_5_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_li_5_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_1</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_1" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_1_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_1_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_2</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_2" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_2_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_2_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_3</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_3" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_3_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_3_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_4</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_4" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_4_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_4_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_5</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_5" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_5_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_5_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_6</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_6" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_2_li_6_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_2_li_6_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_1</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_1" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_1_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_1_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_2</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_2" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_2_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_2_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_3</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_3" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_3_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_3_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_4</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_4" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_4_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_4_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_5</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_5" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_5_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_5_link" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_6</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_6" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationEmail">title_3_li_6_link</label>
                        <input class="form-control" type="Text" id="formValidationEmail" name="title_3_li_6_link" />
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
        
        new DataTable('#example', {
            ajax: {
                url: '/footerr', 
                type: 'POST', 
                data:  {
                    
                    fetch : true 
                   
                },

            },
            columns: [{
                    data: 'id'
                }, // Data keys must match the structure from your server
                {
                    data: 'footer_desc'
                },
                {
                    data: 'title'
                },
                {
                    data: 'edit_link'
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
            url: '/footerr',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                var trimmedResponse = response.trim();
                if (trimmedResponse === '1') {
                    // Ensure that the DataTable is reloaded correctly
                    $('#example').DataTable().ajax.reload();

                    // Close modal and show success message
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Form submitted successfully!',
                    });

                    // Reset the form after submission
                    document.getElementById('insertForm').reset();
                } else if (trimmedResponse === '0') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                } else if (trimmedResponse === '2') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'Please fill the form correctly.',
                    });
                } else if (trimmedResponse === '3') {
                    $('#editUser').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'blog_img is required.',
                    });
                } else if (trimmedResponse === '5') {
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
                        title: 'Unexpected trimmedResponse',
                        text: 'Received unexpected trimmedResponse: ' + trimmedResponse,
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
            url: "/footerr",
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
                $('#imgg').attr('src', '<?= $env['APP_URL'] ?>uploads/profile/'+dataResult[0].footer_logo);
                $('input[name=footer_desc]').val(dataResult[0].footer_desc);
                $('#img').attr('src', '<?= $env['APP_URL'] ?>uploads/profile/'+dataResult[0].footer_desc);
                // $('input[name=description]').val(dataResult[0].description);
                $('input[name=title]').val(dataResult[0].title);
                $('input[name=title_li_1]').val(dataResult[0].title_li_1);
                $('input[name=title_li_1_link]').val(dataResult[0].title_li_1_link);
                $('input[name=title_li_2]').val(dataResult[0].title_li_2);
                $('input[name=title_li_2_link]').val(dataResult[0].title_li_2_link);
                $('input[name=title_li_3]').val(dataResult[0].title_li_3);
                $('input[name=title_li_3_link]').val(dataResult[0].title_li_3_link);
                $('input[name=title_li_4]').val(dataResult[0].title_li_4);
                $('input[name=title_li_4_link]').val(dataResult[0].title_li_4_link);
                $('input[name=title_li_5]').val(dataResult[0].title_li_5);
                $('input[name=title_li_5_link]').val(dataResult[0].title_li_5_link);
                $('input[name=title_2]').val(dataResult[0].title_2);
                $('input[name=title_2_li_1]').val(dataResult[0].title_2_li_1);
                $('input[name=title_2_li_1_link]').val(dataResult[0].title_2_li_1_link);
                $('input[name=title_2_li_2]').val(dataResult[0].title_2_li_2);
                $('input[name=title_2_li_2_link]').val(dataResult[0].title_2_li_2_link);
                $('input[name=title_2_li_3]').val(dataResult[0].title_2_li_3);
                $('input[name=title_2_li_3_link]').val(dataResult[0].title_2_li_3_link);
                $('input[name=title_2_li_4]').val(dataResult[0].title_2_li_4);
                $('input[name=title_2_li_4_link]').val(dataResult[0].title_2_li_4_link);
                $('input[name=title_2_li_5]').val(dataResult[0].title_2_li_5);
                $('input[name=title_2_li_5_link]').val(dataResult[0].title_2_li_5_link);
                $('input[name=title_2_li_6]').val(dataResult[0].title_2_li_6);
                $('input[name=title_2_li_6_link]').val(dataResult[0].title_2_li_6_link);
                $('input[name=title_3]').val(dataResult[0].title_3);
                $('input[name=title_3_li_1]').val(dataResult[0].title_3_li_1);
                $('input[name=title_3_li_1_link]').val(dataResult[0].title_3_li_1_link);
                $('input[name=title_3_li_2]').val(dataResult[0].title_3_li_2);
                $('input[name=title_3_li_2_link]').val(dataResult[0].title_3_li_2_link);
                $('input[name=title_3_li_3]').val(dataResult[0].title_3_li_3);
                $('input[name=title_3_li_3_link]').val(dataResult[0].title_3_li_3_link);
                $('input[name=title_3_li_4]').val(dataResult[0].title_3_li_4);
                $('input[name=title_3_li_4_link]').val(dataResult[0].title_3_li_4_link);
                $('input[name=title_3_li_5]').val(dataResult[0].title_3_li_5);
                $('input[name=title_3_li_5_link]').val(dataResult[0].title_3_li_5_link);
                $('input[name=title_3_li_6]').val(dataResult[0].title_3_li_6);
                $('input[name=title_3_li_6_link]').val(dataResult[0].title_3_li_6_link);

            }
        });
    });
</script>