@extends('include.13sqft-app')


@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Edit MDC</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"><a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('13sqft/13sqft-mdc') }}">MDC</a></li>
                            <li class="breadcrumb-item active">Edit New MDC</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row row-sm">
            <div class="col-xl-12">
                <form action="{{ route('13sqft-mdc-updateitems') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-end">
                                <div class="col text-right">
                                    <a href="javascript:history.back()" class="btn btn-light">
                                        <i class="ti ti-arrow-left mr-1"></i> Go Back
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="mdc_id" id="mdc_id" value="{{ $fetch->mdc_id }}">
                                @foreach (['Client Name' => 'client_name', 'Date' => 'client_date', 'Project ID' => 'project_id', 'Serial No.' => 'serial_no', 'Client PO No.' => 'client_po_no', 'Location Code' => 'location_code', 'Location Name' => 'location_name', 'Contact Person' => 'contact_name', 'Contact No.' => 'contact_no', 'Site Address' => 'address',] as $label => $name)
                                    <div
                                        class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3 {{ $name == 'site_address' ? 'col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12' : '' }}">
                                        <label>{{ $label }} <span class="text-danger">*</span></label>
                                        <input type="text" name="{{ $name }}" value="{{ old($name, $fetch->$name ?? '') }}"
                                            class="form-control {{ $name === 'client_date' ? 'fc-datepicker' : '' }}" required>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped mg-b-0 text-md-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="45">S.No.</th>
                                                <th class="text-center">Item</th>
                                                <th class="text-center">Qty.</th>
                                                <th class="text-center">Unit</th>
                                                <th class="text-center" width="90">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbl-body">

                                            @foreach($mdc_items as $index => $item)
                                                <tr>
                                                    <input type="hidden" name="mdc_items_id[]" id="mdc_items_id"
                                                        value="{{ $item->mdc_items_id }}">
                                                    <input type="hidden" name="mdc_u_id[]" id="mdc_u_id"
                                                        value="{{ $item->mdc_u_id }}">
                                                    <td align="center">{{ $item->sno }}.</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="item[]"
                                                            value="{{ $item->item }}" required>
                                                    </td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="qty[]"
                                                            value="{{ $item->qty }}" required>
                                                    </td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="unit[]"
                                                            value="{{ $item->unit }}" required>
                                                    </td>
                                                    <td align="center">
                                                        <div class="d-flex justify-content-around">
                                                            <a class="dropdown-item swal-parameter" href="#"
                                                                data-url="{{ url('13sqft/13sqft-mdc-item-delete/' . $item->mdc_items_id) }}">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                            <!-- <h2>|</h2>
                                                            <a class="dropdown-item" href="{{ url('13sqft/13sqft-mdc-item-update/' . $item->mdc_items_id) }}">
                                                                <i class="fa fa-edit"></i>
                                                            </a> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col text-center my-5">
                                <button type="submit" class="btn btn-danger-gradient">
                                    <i class="bx bx-save mr-1"></i> Update Data
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

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
@endsection