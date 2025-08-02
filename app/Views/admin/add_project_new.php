<!--HEADER-->
<?= $header ?>
<!--HEADER-->

<div class="container-fluid d-flex flex-column flex-lg-row app-main flex-column flex-row-fluid py-lg-10 px-lg-10"
     id="kt_app_main">
    <div class="card min-w-100 py-lg-15 px-lg-15">
        <form method="post" enctype="multipart/form-data" id="add_projects">

        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 w-100 py-2 d-flex justify-content-end" role="tablist">
            <li class="ml-auto">
                <button class="btn btn-primary" type="submit">Save</button>
            </li>
        </ul>

        <!-- begin::Form-->


            <div class="mb-10">
                <label for="reports_title_1" class="required form-label mt-7 mb-4" style="font-size:2.05rem">
                    Main info
                </label>
            </div>

            <div class="error_message">

            </div>

            <!--begin::Image uploader group-->
            <div class="input-group mb-5">
                <div>
                    <!--begin::Image input-->
                    <div class="required form-label mt-7">Image size(1537 x 820px)</div>
                    <div class="image-input image-input-empty mt-2" data-kt-image-input="true">
                        <!--begin::Image preview wrapper-->
                        <div class="image-input-wrapper img-image-input-wrapper w-125px h-125px"></div>
                        <!--end::Image preview wrapper-->

                        <!--begin::Edit button-->
                        <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                               data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                               aria-label="Upload image" data-bs-original-title="Upload image" data-kt-initialized="1">
                            <i class="ki-duotone ki-pencil fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs-->
                            <input type="file" name="image" accept=".png, .jpg, .jpeg">
                            <input type="hidden" name="avatar_remove_1">
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit button-->

                        <!--begin::Cancel button-->
                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                              aria-label="Cancel image" data-bs-original-title="Cancel image" data-kt-initialized="1">
                            <i class="ki-outline ki-cross fs-3"></i>
                          </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                              aria-label="Remove image" data-bs-original-title="Remove image" data-kt-initialized="1">
                            <i class="ki-outline ki-cross fs-3"></i>
                          </span>
                        <!--end::Remove button-->
                    </div>
                    <!--end::Image input-->
                </div>
            </div>
            <!--end::Image uploader group-->

            <div class="mb-10">
                <label for="title" class="required form-label mt-7 mb-4">Title</label>
                <input type="text" id="name" name="title" class="form-control form-control-solid" placeholder="Title">
            </div>

            <div class="mb-10">
                <label for="location" class="required form-label mt-7 mb-4">Location</label>
                <input type="text" id="location" name="location" class="form-control form-control-solid"
                       placeholder="Location">
            </div>

            <div class="mb-10">
                <label for="date" class="required form-label mt-7 mb-4">Date</label>
                <input type="date" id="date" name="date" class="form-control form-control-solid"
                       placeholder="Title">
            </div>

            <div class="mb-10">
                <label for="square" class="required form-label mt-7 mb-4">Square</label>
                <input type="text" id="square" name="square" class="form-control form-control-solid"
                       placeholder="Square">
            </div>

            <!--begin::Input title-->
            <div class="mb-10">
                <label class="required form-label mt-7 mb-4" for="show">
                    Show in slider
                </label>
                <div class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input cursor-pointer" type="checkbox" id="show" name="show"/>
                </div>
            </div>
            <!--end::Input title-->

            <div class="mb-10">
                <label class="required form-label mt-7 mb-4" for="category">
                    Category
                </label>
                <select class="form-select" data-control="select2" data-placeholder="Select an option" name="category"
                        id="category">
                    <option value="" disabled selected>Select your option</option>
                    <option value="1">Restaurants and Bars</option>
                    <option value="2">Hotels & Spa</option>
                    <option value="3">Architecture</option>
                    <option value="4">Furniture & Light</option>
                    <option value="5">Retail</option>
                </select>
            </div>

            <!--begin::Textarea description-->
            <div class="light">
                <label class="form-label required" for="information">Information</label>
                <textarea id="information" class="form-control min-h-125px" aria-label="With textarea"
                          name="information"></textarea>
            </div>
            <!--end::Textarea description-->

            <div class="mb-10 mt-14 mb-4 d-flex justify-content-between align-items-center">
                <label for="reports_title_1" class="required form-label"
                       style="font-size:2.05rem">
                    Team
                </label>
                <span style="font-size:2.05rem; cursor: pointer" class="createTeam">+</span>
            </div>

            <div class="appendTeam d-flex gap-2 flex-column" >

            </div>

            <div class="mb-10 mt-14 mb-4 d-flex justify-content-between align-items-center">
                <label for="reports_title_1" class="required form-label"
                       style="font-size:2.05rem">
                    Materials
                </label>
                <span style="font-size:2.05rem; cursor: pointer" class="createMaterials">+</span>
            </div>

            <div class="appendMaterials d-flex gap-2 flex-column" >
        </form>

            </div>

    </div>

    <!--end::Form-->

</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {

        $('#add_projects').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: '/admin/addProjects',
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === 'success') {
                        $('input').val('');
                        $('textarea').val('');
                        $('input[type="checkbox"]').prop('checked', false);
                        $('#frame').attr('src', '');
                        $('.alert').remove();
                        $('.appendContainer').empty();
                        // $('.error_message').empty();
                        $('<div class="alert alert-success">' + response.message + '</div>').appendTo('.error_message');

                    } else {
                        $('.error_message').empty();
                        $('<div class="alert alert-danger">' + response.message + '</div>').appendTo('.error_message');
                    }
                },
                error: function () {
                    $('<div class="alert alert-danger"></div>').appendTo('.error_message');
                }
            });
        });
    })
</script>

<script>
    $(document).ready(function () {

        $('.createTeam').click(function () {
            let timestamp = Date.now();

            $('.appendTeam').append(`
                     <div class="d-flex gap-2 delete_line">
                           <div class="w-50">
                                <label for="team[${timestamp}][position]" class="required form-label mt-7 mb-4">
                                    Position
                                </label>
                                <input type="text" id="team[${timestamp}][position]" name="team[${timestamp}][position]" class="form-control form-control-solid" placeholder="Position">
                            </div>
                            <div class="w-50">
                                <label for="team[${timestamp}][fullname]" class="required form-label mt-7 mb-4">
                                    Full name
                                </label>
                                <input type="text" id="team[${timestamp}][fullname]" name="team[${timestamp}][fullname]" class="form-control form-control-solid" placeholder="Full name">
                            </div>
                            <div class="remove-row" style="align-self: end" >
                                 <span class="btn btn-danger remove-row" >x</span>
                            </div>
                </div>
        `);
        });

        $('.createMaterials').click(function () {
            let timestamp = Date.now();

            $('.appendMaterials').append(`
                    <div class="d-flex gap-2 delete_line">
                         <div class="w-50">
                                <label for="material[${timestamp}][collection_name]" class="required form-label mt-7 mb-4">
                                     Name
                                 </label>
                                 <input type="text" id="material[${timestamp}][collection_name]" name="material[${timestamp}][collection_name]" class="form-control form-control-solid" placeholder="Name">
                          </div>

                          <div class="w-50">
                                <label for="material[${timestamp}][collection]" class="required form-label mt-7 mb-4">
                                     Collection
                                </label>
                                <input type="text" id="material[${timestamp}][collection]" name="material[${timestamp}][collection]" class="form-control form-control-solid" placeholder="Collection">
                           </div>
                           <div class="remove-row" style="align-self: end" >
                                 <span class="btn btn-danger remove-row" >x</span>
                           </div>
        `);
        });

        $(document).on('click', '.remove-row', function () {
            $(this).closest('.delete_line').remove();
        });
    })
</script>


<!--FOOTER-->
<?= $footer ?>
<!--FOOTER-->