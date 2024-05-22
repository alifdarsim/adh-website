@extends('cms.layouts.main')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Post  Content List</h3>
                <div class="nk-block-des text-soft">
                    <p>List of all Post  Content for the web pages</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="{{route('cms.blogs.create')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em>
                                    <span>Create New Post</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-preview">
            <div class="card-inner position-relative card-tools-toggle py-3">
                <div class="card-title-group">
                    <div class="card-tools">
                        <div class="form-inline flex-nowrap gx-3">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-left form-control"><em class="icon ni ni-search"></em></div>
                                <input type="text" class="tw-w-96 form-control form-control tw-rounded ps-5 focus:tw-border focus:tw-border-blue-500" id="searchbar" placeholder="Search Title">
                            </div>
                        </div>
                    </div>
                    <div class="card-tools me-n1">
                        <ul class="btn-toolbar gx-1">
                            <li>
                                <div class="toggle-wrap">
                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                    <div class="toggle-content" data-content="cardTools">
                                        <ul class="btn-toolbar gx-1">
                                            <li class="toggle-close">
                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                            </li>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-filter-alt"></em>
                                                    </a>
                                                    <div class="filter-wg dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <div class="dropdown-head">
                                                            <span class="sub-title dropdown-title">Column Search</span>
                                                        </div>
                                                        <div class="dropdown-body dropdown-body-rg">
                                                            <div class="row gx-6 gy-3">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-switch mt-1">
                                                                            <input type="checkbox" class="custom-control-input" id="column_search">
                                                                            <label class="custom-control-label" for="column_search">Hide</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-eye"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu dropdown-menu-end">
                                                        <ul class="link-check">
                                                            <li><span>Show/Hide Column</span></li>
                                                            <div id="colvis-holder">
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-setting"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-check">
                                                            <li><span>Row Per Page</span></li>
                                                            <li><a class="page-btn py-2 clickable">6</a></li>
                                                            <li><a class="page-btn py-2 clickable">10</a></li>
                                                            <li><a class="page-btn py-2 clickable">20</a></li>
                                                            <li><a class="page-btn py-2 clickable">50</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-download-cloud"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu dropdown-menu-end">
                                                        <ul class="link-check">
                                                            <li><span>Export As</span></li>
                                                            <li><a class="export-btn py-2 clickable" val="excel"><span><i class="fa-solid fa-file-excel fs-7 me-1"></i>Export Excel</span></a></li>
                                                            <li><a class="export-btn py-2 clickable" val="pdf"><span><i class="fa-solid fa-file-pdf fs-7 me-1"></i>Export Pdf</span></a></li>
                                                            <li><a class="export-btn py-2 clickable" val="print"><span><i class="fa-solid fa-print fs-7 me-1"></i>Print Table</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-search search-wrap" data-search="search">
                    <div class="card-body">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or email">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                        </div>
                    </div>
                </div>
            </div>
            <table id="datatable" class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Author</span></th>
                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Category</span></th>
                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Insert At</span></th>
                    <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/assets_cms/js/libs/datatable-btns.js?ver=3.2.2"></script>
    <script src="/assets_cms/js/libs/datatable-init.js?ver=3.2.2"></script>
    <script>

        datatableInit('#datatable', {
            ajax: '{{route('cms.blogs.index')}}',
            order:  [[4, 'desc']],
            columnDefs: [
                { "className": "nk-tb-col", "targets": "_all" }
            ],
            pageLength: localStorage.getItem(window.location.pathname + '_pagination') || 10,
            columns: [
                {
                    data: 'title',
                    render: function (data, type, row) {
                        let featured = row.featured ? '<em class="icon ni ni-star-fill fs-6 me-1 text-warning"></em>' : '';
                        return featured + data;

                    }
                },
                {
                    data: 'author'
                },
                {
                    data: 'type_name',
                    render: function (data) {
                        return data.replace(/\b\w/g, e => e.toUpperCase());
                    }
                },
                {
                    data: 'status',
                    render: function (data) {
                        let color = data === 'published' ? 'success' : 'secondary'
                        return ` <span class="badge text-capitalize bg-${color}">${data}</span>`
                    },
                },
                {
                    data: 'post_date',
                    render: function (data) {
                        return data ? moment(data).format(' DD MMM YYYY') : 'N/A';
                    }
                },
                {
                    data: 'id',
                    className: 'nk-tb-col-tools',
                    render: function (data) {
                        return `<ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a onclick="edit(${data})"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                                <li><a onclick="remove(${data})"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                <li><a onclick="featured(${data})"><em class="icon ni ni-star"></em><span>Featured</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>`
                    }
                },
            ]
        });

        function featured(resources_id) {
            $.ajax({
                url: "{{route('cms.blogs.featured',':id')}}".replace(':id', resources_id),
                type: 'GET',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function () {
                    Swal.fire('Success!', 'Post featured successfully.', 'success').then(() => table.ajax.reload())
                },
                error: function (xhr) {
                    Swal.fire('Error!', 'Something went wrong.', 'error')
                }
            });
        }

        function edit(resources_id) {
            window.location.href = '{{route('cms.blogs.edit', ':resources_id')}}'.replace(':id', resources_id)
        }

        function remove(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning', showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{route('cms.blogs.destroy',':id')}}".replace(':id', id),
                        type: 'DELETE',
                        dataType: "JSON",
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function () {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then(() => table.ajax.reload())
                        },
                        error: function (xhr) {
                            Swal.fire(
                                'Error!',
                                'Something went wrong.',
                                'error'
                            )
                        }
                    });
                }
            })
        }
    </script>
@endpush
