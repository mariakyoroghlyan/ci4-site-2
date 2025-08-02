<?= $header ?>


<div class="container d-flex flex-column">

    <div class="row mb-5">

        <p class="h1 mb-4">The works we do</p>

        <div class="row mb-3">
            <div class="col-md-4">
                <input class="form-control" type="file" id="formFile" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
                <img id="frame" src="" class="img-fluid"/>
            </div>

            <div class="col-md-4">
                <input class="form-control" type="file" id="formFile" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
                <img id="frame" src="" class="img-fluid"/>
            </div>

            <div class="col-md-4">
                <input class="form-control" type="file" id="formFile" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
                <img id="frame" src="" class="img-fluid"/>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <input class="form-control" type="file" id="formFile" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
                <img id="frame" src="" class="img-fluid"/>
            </div>

            <div class="col-md-4">
                <input class="form-control" type="file" id="formFile" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
                <img id="frame" src="" class="img-fluid"/>
            </div>
        </div>

    </div>

    <div class="row">

        <p class="h1 mb-4">Our team</p>

        <div class="col-md-4">
            <input class="form-control" type="file" id="formFile" onchange="preview()">
            <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
            <img id="frame" src="" class="img-fluid"/>
        </div>

        <div class="col-md-4">
            <input class="form-control" type="file" id="formFile" onchange="preview()">
            <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
            <img id="frame" src="" class="img-fluid"/>
        </div>

        <div class="col-md-4">
            <input class="form-control" type="file" id="formFile" onchange="preview()">
            <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
            <img id="frame" src="" class="img-fluid"/>
        </div>

    </div>


</div>


<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }
</script>

<?= $footer ?>
