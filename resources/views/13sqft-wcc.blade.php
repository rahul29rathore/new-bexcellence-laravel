@extends('include.13sqft-app')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Work Completion Certificate</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"><a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Work Completion Certificate</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row justify-content-between">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <h4 class="card-title">List Of Items</h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-right btn-set">
                                <a href="{{ url('13sqft/13sqft-wcc-add') }}" class="btn btn-danger-gradient">
                                    <i class="bx bx-plus-circle mr-1"></i> Add New WCC
                                </a>
                            </div>
                        </div>

                        <form method="GET" action="{{ url()->current() }}" id="filterFormWcc">
                            <div class="row justify-content-between mt-4">
                                <div class="col-lg-3">
                                    <div class="d-flex align-items-center">
                                        <span>Show</span>
                                        <select name="limit" class="form-control mx-2 wd-100"
                                            onchange="document.getElementById('filterFormWcc').submit()">
                                            @foreach([10, 25, 50, 100, 'All'] as $size)
                                                <option value="{{ $size }}" {{ request('limit', 10) == $size ? 'selected' : '' }}>
                                                    {{ $size }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span>Entries</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-6"></div>
                                        <div class="col-6">
                                            <input name="search" id="searchInput" type="search" class="form-control"
                                                placeholder="Search here" value="{{ request('search') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div id="wcc-table-container">
                            @include('include.13sqft-wcc-table')
                        </div>

                    </div>
                </div>
            </div>
            <script>
                const searchInput = document.getElementById('searchInput');
                let typingTimer;
                const delay = 800;

                searchInput.addEventListener('input', () => {
                    clearTimeout(typingTimer);
                    typingTimer = setTimeout(() => {
                        document.getElementById('filterFormWcc').submit();
                    }, delay);
                });
            </script>
            <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
            <script src="{{ asset('assets/js/form-editor.js') }}"></script>
            <script>
                $(document).ready(function () {
                    $('.swal-parameter').click(function (e) {
                        e.preventDefault();
                        const deleteUrl = $(this).data('url');

                        swal({
                            title: "Are you sure?",
                            text: "You will not be able to recover this record!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Yes, delete it!",
                            cancelButtonText: "No, cancel!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                        },
                            function (isConfirm) {
                                if (isConfirm) {
                                    $.ajax({
                                        url: deleteUrl,
                                        type: 'DELETE',
                                        data: {
                                            _token: '{{ csrf_token() }}'
                                        },
                                        success: function (result) {
                                            swal("Deleted!", "Your record has been deleted.", "success");
                                            window.location.reload();
                                        },
                                        error: function () {
                                            swal("Error", "There was an error deleting the record.", "error");
                                        }
                                    });
                                } else {
                                    swal("Cancelled", "Your record is safe :)", "error");
                                }
                            });
                    });
                });
            </script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                function fetchWCCData() {
                    const search = $('#search').val();
                    const limit = $('#limit').val();
                    $.ajax({
                        url: "{{ route('13sqft-wcc') }}",
                        type: "GET",
                        data: {
                            search: search,
                            limit: limit
                        },
                        success: function (data) {
                            $('#wcc-table-container').html(data);
                        }
                    });
                }

                $('#search, #limit').on('input change', function () {
                    fetchWCCData();
                });

                $(document).on('click', '.pagination a', function (e) {
                    e.preventDefault();
                    const url = $(this).attr('href');
                    const search = $('#search').val();
                    const limit = $('#limit').val();
                    $.get(url, { search: search, limit: limit }, function (data) {
                        $('#wcc-table-container').html(data);
                    });
                });
            </script>

        </div>
@endsection