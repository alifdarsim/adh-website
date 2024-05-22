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
                <h3 class="nk-block-title page-title"> Post Content  Edit</h3>
                <div class="nk-block-des text-soft">
                    <p>Edit of Post Content for the web pages</p>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-block">
        <div class="row g-gs">

     


            <div class="col-lg-4">
                <div class="card card-bordered">
                    <div class="card-inner" id="side-post">
                        <div class="row g-2">


                        <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="pageType">Select Page Type</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Type" id="pageType">
                                        <option value="">Select Type</option>
                                        @foreach ($pagetype as $pagetype_get)
                     <option value="{{ $pagetype_get->id }}">{{ $pagetype_get->type_name }}</option>
        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                        <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="pageType">Select Main Category</label>
                                    <div class="form-control-wrap">
                                            <select class="form-select js-select2" data-placeholder="Select Category" id="main_menu_type">
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
        <label class="form-label" for="keyword">Select Sub Category</label>
        <div class="form-control-wrap">
            <select class="form-select js-select2" data-placeholder="Keyword" id="keyword">
                <option value="">Select Keyword</option>
                @foreach ($submenus as $menu)
                     <option value="{{ $menu->sub_id }}">{{ $menu->sub_menu_title }}</option>
        @endforeach
                     
            </select>
        </div>
    </div>
</div>


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
                                    <label class="form-label">Featured Image (Banner)</label>
                                    <div class="d-flex" style="border-width: 1px; justify-content: center; align-items: center; height: 11rem;">
                                        <button id="image_button" onclick="uploadImage()" class="btn btn-primary">Upload
                                            Image
                                        </button>
                                        <input class="form-control d-none" type="file" id="formFile"
                                               onchange="preview()">
                                        <img id="image_holder" src="" class="d-none tw-h-full tw-w-full"
                                             alt="feature_image"/>
                                    </div>
                                    <button id="cancel_image_button" onclick="resetImage()"
                                            class="d-none mt-1 btn btn-light btn-sm float-end">Reset Image
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="addDate">Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" id="addDate"
                                               data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="pageAuthor">Input Author</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="pageAuthor" placeholder="Eg: John Doe">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6">
    <div class="form-group">
        <label class="form-label" for="postTags">Tags</label>
        <input type="text" class="form-control" id="postTags" name="tags" placeholder="Enter tags">
        <small id="tagsHelp" class="form-text text-muted">Separate tags with commas (e.g., technology, science, AI).</small>
    </div>
</div>


                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="pageStatus">Select Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Status"
                                                id="pageStatus">
                                            <option value="published">Published</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                        <li>
                                            <button id="submitBtn" class="btn btn-primary">Publish Post</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-lg-8">
                <div class="card card-bordered h-100">
                    <div class="card-inner h-100">
                        <textarea id="mytextarea" class="h-100">{{ $page->content }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.date-picker').datepicker('setDate', '{{ $page->created_at }}');
        $('#main_menu_type').val('{{ $page->main_menu_tbl_id }}').trigger('change');
        $('#keyword').val('{{ $page->sub_menu_tbl_id }}').trigger('change');
        $('#addTitle').val('{{ $page->title }}');
        $('#addSlug').val('{{ $page->slug }}');
        $('#pageAuthor').val('{{ $page->author }}');
        $('#pageStatus').val('{{ $page->status }}').trigger('change');
        $('#pageType').val('{{ $page->type }}').trigger('change');
        $('#image_holder').attr('src', '{{ asset($page->banner) }}');
        $('#image_holder').removeClass('d-none');
        $('#image_button').addClass('d-none');
        $('#cancel_image_button').removeClass('d-none');
        $('#postTags').val('{{ $page->tag }}');
 
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
        
        
            $.ajax({
                url: '{{ route('cms.blogs.update', $page->id) }}',
                method: 'PUT',
                data: {
                    _token: '{{csrf_token()}}',
                    content: tinymce.activeEditor.getContent(),
                    type: $('#pageType').val(),
                    title: $('#addTitle').val(),
                    slug: $('#addSlug').val(),
                    post_date: $('#addDate').val(),
                    status: $('#pageStatus').val(),
                    author: $('#pageAuthor').val(),
                    image: $('#formFile').prop('files')[0],
                    tags: $('#postTags').val(),
                },
                success: response => {
                    if (response.success) {
                        Swal.fire('Update Success', response.message, 'success').then(() => {
                            window.location.href = '{{ route('cms.blogs.index') }}';
                        });
                    }
                },
                error: response => {
                    Swal.fire('Error', response.responseJSON.message, 'error')
                }
            });
        });


        $(document).ready(function() {
   

   $('#main_menu_type').change(function() {
       var categoryId = $(this).val();

       // Clear existing options
       $('#keyword').empty();
       $('#keyword').append($('<option>', { 
           value: '',
           text : 'Loading...' 
       }));

       // Fetch keywords based on the selected category
       $.ajax({
           url: '/cms/getKeywords/' + categoryId,
           type: 'GET',
           success: function(response) {
               $('#keyword').empty();
               $('#keyword').append($('<option>', { 
                   value: '',
                   text : 'Select Keyword' 
               }));
               $.each(response.keywords, function (index, keyword) {
                   $('#keyword').append($('<option>', { 
                       value: keyword.id,
                       text : keyword.sub_menu_title 
                   }));
               });
           },
           error: function(xhr) {
               console.log(xhr.responseText);
               // Handle error
           }
       });
   });
});

    </script>
@endpush
