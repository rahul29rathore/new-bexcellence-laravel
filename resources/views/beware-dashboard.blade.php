@extends('include.beware-app')

@section('content')
<div class="container-fluid">
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, Welcome to BEWARE!</h2>
                <p class="mg-b-0">Sales monitoring dashboard template.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-primary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>

                            </span>
                        </div>
                        <!-- <a href="beware-sales-invoice-data-dashboard-d" class="text-white text-decoration-none"> -->
                            <div class="float-left">
                                <p class="card-text mb-2 text-white">Total Sales Generated</p>
                                 <h5 class="text-white">{{ number_format($final_invoice_value_sale, 2) }}</h5>

                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-danger-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="text-white text-decoration-none">Received Sales Amount</p>
                            <h5 class="text-white">{{ number_format($total_sale_amt_received,2) }}</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-success-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-file-text tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Remaining Sales Amount</p>
                             <h5 class="text-white">{{ $remaining_amount = $final_invoice_value_sale - $total_sale_amt_received }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-warning-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-layers tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Purchase Generated</p>
                             <h5 class="text-white">{{ number_format($final_invoice_value_purchase, 2) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-secondary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Paid Purchase Amount</p>
                            <h5 class="text-white">{{ number_format($purchase_amount_paid, 2) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-info-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-file-text tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Remaining Purchase</p>
                             <h5 class="text-white">{{ $purchase_remaining_amount = $final_invoice_value_purchase - $purchase_amount_paid }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-primary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Expenses</p>
                             <h5 class="text-white">{{ number_format($total_expenses, 2) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-danger-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-user tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Stock Value</p>
                             <h5 class="text-white">{{ number_format($final_stock, 2) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-success-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-box tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left"> 
                            <p class="card-text mb-2 text-white">Total Delivery Challan</p>
                             <h5 class="text-white">{{( $total_delivery_challan ) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-warning-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-users tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Distributors</p>
                             <h5 class="text-white">{{ ($total_distributors) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-secondary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-users tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Sale offer</p>
                             <h5 class="text-white"> {{ $poData }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-info-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-user-check tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Purchase Orders</p>
                            <h5 class="text-white"> {{ $PurchaseData }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="row row-sm mt-4">
    <div class="col-xl-12">
        <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Sales Analytics</h2>
        <hr>
    </div>

    <!-- Financial Year Cards -->
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="card card-img-holder {{ request('year') == '2023' ? 'active' : '' }}" onclick="loadFinancialData('2023-2024')">
            <a href="javascript:void(0)" class="card-body list-icons option-item">
                <div class="text-dark">
                    <small class="mb-2 d-block tx-12">Sales Data for the Financial Year</small>
                    <h5 class="m-0">2023 - 2024</h5>
                </div>
                <span><i class="bx bx-line-chart bx-sm"></i></span>
            </a>
        </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="card card-img-holder {{ request('year') == '2024' ? 'active' : '' }}" onclick="loadFinancialData('2024-2025')">
            <a href="javascript:void(0)" class="card-body list-icons option-item">
                <div class="text-dark">
                    <small class="mb-2 d-block tx-12">Sales Data for the Financial Year</small>
                    <h5 class="m-0">2024 - 2025</h5>
                </div>
                <span><i class="bx bx-line-chart bx-sm"></i></span>
            </a>
        </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="card card-img-holder {{ request('year') == '2025' ? 'active' : '' }}" onclick="loadFinancialData('2025-2026')">
            <a href="javascript:void(0)" class="card-body list-icons option-item">
                <div class="text-dark">
                    <small class="mb-2 d-block tx-12">Sales Data for the Financial Year</small>
                    <h5 class="m-0">2025 - 2026</h5>
                </div>
                <span><i class="bx bx-line-chart bx-sm"></i></span>
            </a>
        </div>
    </div>
</div>

<!-- Data Table -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row justify-content-between mt-4">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-12">
                        <div class="d-flex align-items-center">
                            <span>Show</span>
                            <select class="form-control mx-2 wd-100">
                                <option value="10"> 10 </option>
                                <option value="20"> 20 </option>
                                <option value="50"> 50 </option>
                                <option value="100"> 100 </option>
                                <option value="All"> All </option>
                            </select>
                            <span>Entries</span>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6 col-sm-8 col-12">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <select multiple class="testselect2 SumoUnder" placeholder="Hide Columns">
                                    <option> S.No. </option>
                                    <option> Months </option>
                                    <option> Sale Amount Without GST </option>
                                    <option> Sale Amount With GST </option>
                                    <option> Credit Note </option>
                                    <option> Sale Amount Received </option>
                                    <option> Sale Amount Remaining </option>
                                    <option> Purchase Amount </option>
                                    <option> Debit Note </option>
                                    <option> Purchase Amount Paid </option>
                                    <option> Purchase Amount Remaining </option>
                                    <option> Total Expenses </option>
                                    <option> Total Stock Value </option>
                                </select>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="search" class="form-control" placeholder="Search here">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th class="text-center">Months</th>
                                <th class="text-center">Sale Amount Without GST</th>
                                <th class="text-center">Sale Amount With GST</th>
                                <th class="text-center">Credit Note</th>
                                <th class="text-center">Sale Amount Received</th>
                                <th class="text-center">Sale Amount Remaining</th>
                                <th class="text-center">Purchase Amount With GST</th>
                                <th class="text-center">Purchase Amount Without GST</th>
                                <th class="text-center">Debit Note</th>
                                <th class="text-center">Purchase Amount Paid</th>
                                <th class="text-center">Purchase Amount Remaining</th>
                                <th class="text-center">Total Expenses</th>
                                <th class="text-center">Total Stock Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $row)
                             <tr>
                                <td>{{ $row['serialNumber'] }}</td>
                                <td>{{ $row['monthName'] }} - {{ $row['year'] }}</td>
                                <td>{{ $row['saleAmount_wog'] }}</td>
                                <td>{{ $row['saleAmount'] }}</td>
                                <td>{{ $row['saleAmount_Credit_Note'] }}</td>
                                <td>{{ $row['saleAmountReceived'] }}</td>
                                <td>{{ $row['saleAmountRemaining'] }}</td>
                                <td>{{ $row['purchaseAmount'] }}</td>
                                <td>{{ $row['purchaseamount_without_gst'] }}</td>
                                <td>{{ $row['purchaseAmount_Debit_Note'] }}</td>
                                <td>{{ $row['purchaseAmountPaid'] }}</td>
                                <td>{{ $row['purchaseAmountRemaining'] }}</td>
                                <td>{{ $row['totalExpenses'] }}</td>
                                <td>{{ $row['totalStockValue'] }}</td>
                            </tr>
                            @endforeach

                            <tr class="bg-light font-weight-bold">
                                <td colspan="2">Total</td>
                                <td>{{ $totals['saleAmount_wog'] }}</td>
                                <td>{{ $totals['saleAmount'] }}</td>
                                <td>{{ $totals['saleAmount_Credit_Note'] }}</td>
                                <td>{{ $totals['saleAmountReceived'] }}</td>
                                <td>{{ $totals['saleAmountRemaining'] }}</td>
                                <td>{{ $totals['purchaseAmount'] }}</td>
                                <td>{{ $totals['purchaseamount_without_gst'] }}</td>
                                <td>{{ $totals['purchaseAmount_Debit_Note'] }}</td>
                                <td>{{ $totals['purchaseAmountPaid'] }}</td>
                                <td>{{ $totals['purchaseAmountRemaining'] }}</td>
                                <td>{{ $totals['totalExpenses'] }}</td>
                                <td>{{ $totals['totalStockValue'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function loadFinancialData(year) {
        window.location.href = '?year=' + year;
    }
</script>
@endsection
