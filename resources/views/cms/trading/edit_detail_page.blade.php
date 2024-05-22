@extends('cms.layouts.main')

@section('content')
    <script src="/assets_cms/libs/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea",
            plugins: [
                "advlist", "autolink",  "lists", "link", "image" , "charmap", "preview" , "anchor",
                "searchreplace" , "visualblocks" , "code" , "fullscreen",
                "insertdatetime" , "media" , "table",
            ],
            promotion: false,
            toolbar:
                "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            height : "100%"
        });
    </script>

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Trading Details Page</h3>
            <div class="nk-block-des text-soft">
                <p>Edit of trading details for the web pages</p>
            </div>
        </div>
    </div>
</div>

<div class="nk-block">
    <div class="row g-gs">
        <div class="col-lg-12">
            <div class="card card-bordered">
                <div class="card-inner" id="side-post">
                    <div class="row g-2">
                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="title nk-block-title">Category One</h4>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <h5 class="title nk-block-title" id="addTitle"></h5>
                                    <input type="hidden" class="form-control" id="addTitleinput" placeholder="Title">
                                </div>
                            </div>

                            <div class="form-group">
                                <button id="cancel_image_button" onclick="resetImage()" class="d-none mt-1 btn btn-light btn-sm float-end">Reset Image</button>
                                <div class="d-flex" style="border-width: 1px; justify-content: center; align-items: center; height: 11rem;">
                                    <button id="image_button" onclick="uploadImage()" class="btn btn-primary">Change Image</button>
                                    <input class="form-control d-none" type="file" id="formFile" onchange="preview()">
                                    <img id="image_holder" style="max-width: 37% !important;" src="" class="d-none tw-h-full tw-w-full" alt="feature_image"/>
                                </div>
                                <br>
                            </div>

                            <div class="card">
                                <div class="card-inner">
                                    <textarea class="tinymce-basic form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                    <li>
                                        <button id="submitBtn" class="btn btn-primary">Update</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->

        <div class="col-lg-12">
            <div class="card card-bordered">
                <div class="card-inner" id="side-post">
                    <div class="row g-2">
                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="title nk-block-title">Category Two</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="form-group">
                                        <h5 class="title nk-block-title" id="addTitle"></h5>
                                        <input type="text" class="form-control" id="addTitleinput" placeholder="Title">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control d-none file-input" type="file" id="formFile0" onchange="preview_category_two(this, 'image_holder0')">
                                            <button id="image_button" onclick="uploadImage_category_two(0)" class="btn btn-primary">Upload Image</button>
                                            <span style="margin-right: 10px;"></span>
                                            <button id="add-btn" class="btn btn-success">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-2">
                                    <img class="image-holder d-none" id="image_holder0" src="#" alt="Preview" style="max-width: 100px;">
                                </div>
                            </div>                 
                            <div id="category_one_container">
                            </div>   

                            <div class="col-12">
                                <div class="form-group">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                        <li>
                                            <button id="submitBtn" class="btn btn-primary">Submit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->


        <div class="col-lg-12">
            <div class="card card-bordered">
                <div class="card-inner" id="side-post">
                    <div class="row g-2">
                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="title nk-block-title">Category Three</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="form-group">
                                        <h5 class="title nk-block-title" id="addTitle"></h5>
                                        <input type="text" class="form-control" id="addTitleinput" placeholder="Title">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control d-none file-input" type="file" id="formFile0" onchange="preview_category_two(this, 'image_holder0')">
                                            <button id="image_button" onclick="uploadImage_category_two(0)" class="btn btn-primary">Upload Image</button>
                                            <span style="margin-right: 10px;"></span>
                                            <button id="add-btn" class="btn btn-success">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-2">
                                    <img class="image-holder d-none" id="image_holder0" src="#" alt="Preview" style="max-width: 100px;">
                                </div>
                            </div>                 
                            <div id="container">
                            </div>   

                            <div class="col-12">
                                <div class="form-group">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                        <li>
                                            <button id="submitBtn" class="btn btn-primary">Submit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->



    </div>
</div>


@endsection
@push('scripts')
    <script>
        $('.date-picker').datepicker('setDate', '{{ $page->created_at }}');
        $('#addTitle').text('{{ $page->category_type }}');
        $('#addTitleinput').val('{{ $page->category_type }}');
        $('#addSlug').val('{{ $page->slug }}');

        // create a typing change event for the title
        $('#addTitle').on('keyup', e => {
            let title = $('#addTitle').val();
            let slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            $('#addSlug').val(slug);
        });

        function resetImage() {
            document.getElementById("image_holder").classList.add('d-none');
            document.getElementById("cancel_image_button").classList.add('d-none');
            document.getElementById("image_button").classList.remove('d-none');
            document.getElementById("formFile").value = "";
        }

        function uploadImage() {
            document.getElementById("formFile").click();
        }

        function preview() {
            let oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("formFile").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("image_button").classList.add('d-none');
                document.getElementById("image_holder").classList.remove('d-none');
                document.getElementById("image_holder").src = oFREvent.target.result;
                document.getElementById("cancel_image_button").classList.remove('d-none');
            };
        }

        // get publish button and add event listener
        $('#submitBtn').click(e => {
            // send the form page_adddata to the server
            $.ajax({
                url: '{{ route('cms.trading.update', $page->id) }}',
                method: 'PUT',
                data: {
                    _token: '{{csrf_token()}}',
                    title: $('#addTitle').val(),
                    slug: $('#addSlug').val(),
                  
                },
                success: response => {
                    if (response.success) {
                        Swal.fire('Update Success', response.message, 'success').then(() => {
                            window.location.href = '{{ route('cms.trading.index') }}';
                        });
                    }
                },
                error: response => {
                    Swal.fire('Error', response.responseJSON.message, 'error')
                }
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   function uploadImage_category_two(id) {
            document.getElementById("formFile"+id).click();
        }
  function preview_category_two(input, imageHolderId) {
    if (input && input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#' + imageHolderId).attr('src', e.target.result).removeClass('d-none');
        }
        reader.readAsDataURL(input.files[0]);
    }
}



$(document).ready(function () {
    // Plus button click event
    let rowCounter = 1; // Initialize a counter to keep track of the number of rows added

$('#add-btn').on('click', function () {
    var newRow = `<br>
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="title${rowCounter}" placeholder="Title">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control d-none file-input" type="file" id="formFile${rowCounter}" onchange="preview_category_two(this, 'image_holder${rowCounter}')">
                        <button class="btn btn-primary upload-button">Upload Image</button>
                        <span style="margin-right: 10px;"></span>
                        <button class="btn btn-success remove-btn">-</button>

                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                <img class="image-holder d-none" id="image_holder${rowCounter}" src="#" alt="Preview" style="max-width: 100px;">
                 </div>
            </div>
         
        </div>`;

    $('#category_one_container').append(newRow);
    rowCounter++; // Increment the row counter for the next row
});

    // Remove button click event
    $(document).on('click', '.remove-btn', function () {
        $(this).closest('.row').remove();
    });

    // Upload button click event
    $(document).on('click', '.upload-button', function () {
        $(this).prev('.file-input').click();
    });
});

</script>

@endpush
