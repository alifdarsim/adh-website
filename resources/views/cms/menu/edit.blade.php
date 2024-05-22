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
                                    <label class="form-label" for="pageType">Select Type</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Status" id="main_menu_type">
                                        <option value="">Select Menu</option>
        @foreach ($menus as $menu)
                     <option value="{{ $menu->id }}">{{ $menu->menu_title }}</option>
        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="addTitle">Keyword</label>
                                    <input type="text" class="form-control" id="addTitle" placeholder="Keyword">
                                </div>
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
                </div><!-- .card -->
            </div><!-- .col -->
       


        </div>
    </div>
@endsection
@push('scripts')
    <script>
      
      $('#main_menu_type').val('{{ $page->id }}').trigger('change');   
        $('#addTitle').val('{{ $page->sub_menu_title }}');

        // create a typing change event for the title
        // $('#addTitle').on('keyup', e => {
        //     let title = $('#addTitle').val();
        //     let slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        //     $('#addSlug').val(slug);
        // });

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
                url: '{{ route('cms.menu.update', $page->sub_id) }}',
                method: 'PUT',
                data: {
                    _token: '{{csrf_token()}}',
                    main_menu: $('#main_menu_type').val(),
                    sub_menu: $('#addTitle').val(),
                  
                },
                success: response => {
                    if (response.success) {
                        Swal.fire('Update Success', response.message, 'success').then(() => {
                            window.location.href = '{{ route('cms.menu.index') }}';
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
