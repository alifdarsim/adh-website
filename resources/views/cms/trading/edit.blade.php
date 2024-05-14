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
                <h3 class="nk-block-title page-title">Trading Item Edit</h3>
                <div class="nk-block-des text-soft">
                    <p>Edit of  trading  item for the web pages</p>
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
                           
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="addTitle">Title</label>
                                    <input type="text" class="form-control" id="addTitle" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="addSlug">Slug (Url endpoint)</label>
                                    <input type="text" class="form-control" id="addSlug" placeholder="Slug">
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
       


        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.date-picker').datepicker('setDate', '{{ $page->created_at }}');
        $('#addTitle').val('{{ $page->category_type }}');
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
@endpush
