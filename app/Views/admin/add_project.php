<!--HEADER-->
<?= $header ?>
<!--HEADER-->

<div class="container">

    <form method="post" enctype="multipart/form-data" id="add_projects">

        <div class="row g-3">

            <div class="col-md-12 mb-4">
                <span class="h1">Main info</span>
            </div>

            <div class="col-md-6 d-flex flex-column">
                <label for="title" class="mb-2">Title</label>
                <input name="title" type="text" id="title" class="form-control" required>
            </div>

            <div class="col-md-3 d-flex flex-column">
                <label for="date" class="mb-2">Date</label>
                <input name="date" type="date" id="date" class="form-control" required>
            </div>

            <div class="col-md-3 d-flex flex-column">
                <label for="square" class="mb-2">Square</label>
                <input name="square" type="number" id="square" class="form-control" required>
            </div>

            <div class="col-md-6 d-flex flex-column">
                <label for="location" class="mb-2">Location</label>
                <input name="location" type="text" id="location" class="form-control" required>
            </div>

            <div class="col-md-6 d-flex flex-column">
                <label for="category" class="mb-2">Category</label>
                <select class="form-select" id="category" name="category">
                    <option value="" disabled selected>Select your option</option>
                    <option value="1">Restaurants and Bars</option>
                    <option value="2">Hotels & Spa</option>
                    <option value="3">Architecture</option>
                    <option value="4">Furniture & Light</option>
                    <option value="5">Retail</option>
                </select>
            </div>

            <div class="col-md-6 d-flex flex-column">
                <label for="image" class="mb-2">Image size(1537px x 820px)</label>
                <input name="image" class="form-control mb-2" type="file" id="image"
                       accept="image/png, image/jpeg, image/jpg" onchange="preview()">
                <img id="frame" src="" class="img-fluid"/>
            </div>

            <div class="form-check form-switch col-md-6 d-flex flex-column">
                <label class="form-check-label" for="show_in_slider" style="margin: 0 0 10px -2em;">
                    Show in slider
                </label>
                <input class="form-check-input" type="checkbox" role="switch" id="show_in_slider" name="show" style="width:60px; height: 24px; margin-left: -2em;">
            </div>

            <div class="col-md-12 d-flex flex-column">
                <label for="information" class="mb-2">Information</label>
                <textarea name="information" id="information" class="form-control" rows="3" required></textarea>
            </div>

            <hr class="mt-4 mb-4">

            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <span class="h1">Team</span>
                <span class="h1 createTeam" style="cursor: pointer">+</span>
            </div>

            <div class="appendTeam"></div>

            <hr class="mt-4 mb-4">

            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <span class="h1">Materials</span>
                <span class="h1 createMaterials" style="cursor: pointer">+</span>
            </div>

            <div class="appendMaterials"></div

            <hr class="mt-4 mb-4">


            <div class="col-md-12 d-flex justify-content-end mt-4">
                <button class="btn btn-primary sentRequest" type="submit">Add</button>
            </div>


        </div>

    </form>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

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

                        $('<div class="alert alert-success">' + response.message + '</div>').appendTo('.col-md-12.mb-4');
                    } else {
                        $('<div class="alert alert-danger">' + response.message + '</div>').appendTo('.col-md-12.mb-4');
                    }
                },
                error: function () {
                    $('<div class="alert alert-danger"></div>').appendTo('.col-md-12.mb-4');
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
       <div class="row align-items-end" data-id="${timestamp}">
            <!-- Title Input -->
            <div class="col-md-5 col-6 mb-2 mb-md-0">
                <label for="team[${timestamp}][position]" class="form-label">Position</label>
                <input name="team[${timestamp}][position]" type="text" id="team[${timestamp}][position]" class="form-control" required>
            </div>

            <!-- Full Name Input -->
            <div class="col-md-5 col-6 mb-2 mb-md-0">
                <label for="team[${timestamp}][fullname]" class="form-label">Full name</label>
                <input name="team[${timestamp}][fullname]" type="text" id="team[${timestamp}][fullname]" class="form-control" required>
            </div>

            <!-- Close Button -->
            <div class="col-md-1 col-12 d-flex align-items-center justify-content-end">
              <button type="button" class="btn btn-outline-danger remove-row">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                </svg>
              </button>
            </div>
        </div>

        `);
        });

        $('.createMaterials').click(function () {
            let timestamp = Date.now();

            $('.appendMaterials').append(`
       <div class="row align-items-end" data-id="${timestamp}">
            <!-- Title Input -->
            <div class="col-md-5 col-6 mb-2 mb-md-0">
                <label for="material[${timestamp}][name]" class="form-label">Name</label>
                <input name="material[${timestamp}][name]" type="text" id="team[${timestamp}][position]" class="form-control" required>
            </div>

            <!-- Full Name Input -->
            <div class="col-md-5 col-6 mb-2 mb-md-0">
                <label for="material[${timestamp}][collection]" class="form-label">Collection</label>
                <input name="material[${timestamp}][collection]" type="text" id="team[${timestamp}][fullname]" class="form-control" required>
            </div>

            <!-- Close Button -->
            <div class="col-md-1 col-12 d-flex align-items-center justify-content-end">
              <button type="button" class="btn btn-outline-danger remove-row">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                </svg>
              </button>
            </div>
        </div>

        `);
        });

        $(document).on('click', '.remove-row', function () {
            $(this).closest('.row').remove();
        });
    })
</script>

<!--FOOTER-->
<?= $footer ?>
<!--FOOTER-->