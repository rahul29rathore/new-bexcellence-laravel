@extends('include.13sqft-app')


@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <h2 class="main-content-title tx-24 mb-2">MDC Details</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mg-b-0">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('13sqft-mdc') }}">MDC</a></li>
                        <li class="breadcrumb-item active" aria-current="page">MDC Details</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card card-invoice">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Material Delivery Challan</h5>
                        <div>
                            <button class="btn btn-danger-gradient" id="printBtn"><i
                                    class="mdi mdi-download mr-1"></i>Download PO</button>
                            <a href="javascript:history.back()" class="btn btn-light"><i
                                    class="ti ti-arrow-left mr-1"></i>Go Back</a>
                        </div>
                    </div>
                    <div class="card-body" id="po-invoice">
                        <table class="table table-bordered" style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><img src="{{ asset('assets/img/brand/13sqft-logo-invoice.png') }}"
                                        height="40"></td>
                                <td colspan="2" class="text-right"><strong style="font-size:24px;">Material Delivery
                                        Challan</strong></td>
                            </tr>
                            <tr>
                                <th>COMPANY</th>
                                <td>MAKEMYINFRA PRIVATE LIMITED</td>
                                <th>CLIENT</th>
                                <td>Coldman Logistics</td>
                            </tr>
                            <tr>
                                <th>GSTIN</th>
                                <td>07AALCM2173N1Z0</td>
                                <th>Date</th>
                                <td>2023-05-26</td>
                            </tr>
                            <tr>
                                <th>PAN NO</th>
                                <td>AALCM2173N</td>
                                <th>Serial No.</th>
                                <td>NA</td>
                            </tr>
                            <tr>
                                <th>Project ID</th>
                                <td>NA</td>
                                <th>Client PO NO.</th>
                                <td>SRC1/OPX/23-24/00007</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-center">537, Adarsh Apartment, Pocket 16, Sector-3, Dwarka,
                                    Delhi, 110078</td>
                            </tr>
                            <tr>
                                <th>LC & NAME</th>
                                <td colspan="3">Varadaiahpalem Varadaiahpalem</td>
                            </tr>
                            <tr>
                                <th>Site Address</th>
                                <td colspan="3">SY No. 201, 1305, Italia Lane, Mopurupalli Village, Varadaiahpalem Mandal,
                                    Chittoor, AP-517541</td>
                            </tr>
                            <tr>
                                <th>Contact Person</th>
                                <td>Mr. Kartikey</td>
                                <th>Contact No.</th>
                                <td>+91 76520 23189</td>
                            </tr>
                        </table>

                        <table class="table table-bordered mt-4" style="border-collapse: collapse;">
                            <thead class="bg-light">
                                <tr>
                                    <th colspan="5" class="text-center" style="font-size:22px;">Material</th>
                                </tr>
                                <tr class="bg-secondary text-white">
                                    <th>S. No.</th>
                                    <th>PO No.</th>
                                    <th>Description of Goods</th>
                                    <th>Quantity</th>
                                    <th>Yes/No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SRC1/OPX/23-24/00007</td>
                                    <td>SITC of 24 port PoE Switch</td>
                                    <td>1</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SRC1/OPX/23-24/00007</td>
                                    <td>Engineer Visit Charge</td>
                                    <td>1</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <th colspan="2">Terms & Conditions</th>
                                    <td colspan="3" height="100px"></td>
                                </tr>
                                <tr>
                                    <th colspan="3">Sign & Stamp</th>
                                    <td colspan="2">
                                        <div>
                                            <p>For MAKEMYINFRA PRIVATE LIMITED</p>
                                            <br><br>
                                            <p>Authorised Signatory</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered mt-4">
                            <tr class="bg-light">
                                <th colspan="6" class="text-center" style="font-size:22px;">13SQFT Feedback</th>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="checkbox" name="feedback" value="Good"> Good</td>
                                <td colspan="2"><input type="checkbox" name="feedback" value="V Good"> Very Good</td>
                                <td colspan="2"><input type="checkbox" name="feedback" value="Excellent"> Excellent</td>
                            </tr>
                            <tr>
                                <th colspan="2">FEEDBACK</th>
                                <td colspan="4" height="100px"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-editor.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#printBtn').on('click', function () {
                const content = $('#po-invoice').html();
                const originalContent = $('body').html();

                const printHtml = `
                        <html>
                            <head>
                                <title>Print MDC</title>
                                <style>
                                    body { font-family: Arial, sans-serif; margin: 40px; }
                                    table { width: 100%; border-collapse: collapse; }
                                    th, td { border: 1px solid #ccc; padding: 10px; }
                                    .text-center { text-align: center; }
                                    .text-right { text-align: right; }
                                    .bg-light { background-color: #ecf0fa; }
                                    input.form-control { border: none; width: 100%; }
                                </style>
                            </head>
                            <body>
                                ${content}
                            </body>
                        </html>
                    `;

                $('body').html(printHtml);
                window.print();
                $('body').html(originalContent);
                location.reload();
            });
        });

        $(document).ready(function () {
            $('#printBtn').on('click', function () {
                printDiv('po-invoice');
            });
        });

        function insertRow(e) {
            var row = `
                            <tr>
                                <td align="center" scope="row">1.</td>
                                <td align="center"><input type="text" class="form-control"></td>
                                <td align="center"><input type="text" class="form-control"></td>
                                <td align="center"><input type="text" class="form-control"></td>
                                <td align="center">
                                    <div class="d-flex">
                                        <span class="mx-2 c-pointer" onclick="deleteRow(this)">
                                            <i class="bx bx-minus tx-22 btn-danger-gradient p-1 badge-pill"></i>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        `;
            $('#tbl-body').prepend(row);
            updateSerialNumbers();
        }

        function deleteRow(element) {
            $(element).closest('tr').remove();
            updateSerialNumbers();
        }

        function updateSerialNumbers() {
            $('#tbl-body tr').each(function (index) {
                $(this).find('td:first-child').html((index + 1) + '.');
            });
        }
    </script>
@endsection