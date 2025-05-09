@extends('include.app')

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, Welcome to 13SQFT!</h2>
                    <p class="mg-b-0">Sales monitoring dashboard template.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                <div class="card bg-primary-gradient">
                    <a href="{{ url('/13sqft/13sqft-mdc') }}">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-right mt-2">
                                    <span class="text-white">
                                        <i class="fe fe-file-text tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-left">
                                    <p class="card-text mb-1 text-white">Total MDC Raised</p>
                                    <h5 class="text-white">{{ $totalMDC }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                <a href="{{ url('/13sqft/13sqft-wcc') }}">
                    <div class="card bg-danger-gradient">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-right mt-2">
                                    <span class="text-white">
                                        <i class="fe fe-layers tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-left">
                                    <p class="card-text mb-1 text-white">Total WCC Raised</p>
                                    <h5 class="text-white">{{ $totalWCC }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                <a href="{{ url('/13sqft/13sqft-po') }}">
                    <div class="card bg-success-gradient">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-right mt-2">
                                    <span class="text-white">
                                        <i class="fe fe-file-text tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-left">
                                    <p class="card-text mb-1 text-white">Total PO Raised</p>
                                    <h5 class="text-white">{{ round($totalPO, 2) }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                <div class="card bg-warning-gradient">
                    <div class="card-body list-icons">
                        <div class="clearfix">
                            <div class="float-right mt-2">
                                <span class="text-white">
                                    <i class="fe fe-dollar-sign tx-30"></i>
                                </span>
                            </div>
                            <div class="float-left">
                                <p class="card-text mb-1 text-white">Total PO Amount</p>
                                <h5 class="text-white"><i class="bx bx-rupee"></i>{{ number_format($totalPOAmount, 2) }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                <a href="{{ url('/13sqft/13sqft-delivery-challan') }}">
                    <div class="card bg-secondary-gradient">
                        <div class="card-body list-icons">
                            <div class="clearfix">
                                <div class="float-right mt-2">
                                    <span class="text-white">
                                        <i class="fe fe-file-text tx-30"></i>
                                    </span>
                                </div>
                                <div class="float-left">
                                    <p class="card-text mb-1 text-white">Total DC Raised</p>
                                    <h5 class="text-white">{{ $totalDC }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row row-sm mt-4">
            <div class="col-xl-6 col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header pb-1">
                        <h3 class="card-title mg-b-5">Activity</h3>
                        <p>Tracks all Challans generated, Monitors the number of Work Completion Certificates issued
                            Displays the total count of Purchase Orders created, Shows the cumulative value of all POs</p>
                    </div>
                    <div class="product-timeline card-body pt-2 mt-1">
                        <ul class="timeline-1 mb-0">
                            <li class="mt-0 d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="ti-files bg-success-gradient text-white product-icon"></i>
                                    <span class="font-weight-semibold mb-4 tx-14 ml-3">Total MDC Raised </span>
                                </div>
                                <span class="font-weight-semibold tx-14 ml-3">{{ $totalMDC }}</span>
                            </li>
                            <li class="mt-0 d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="ti-files bg-warning-gradient text-white product-icon"></i>
                                    <span class="font-weight-semibold mb-4 tx-14 ml-3">Total WCC Raised </span>
                                </div>
                                <span class="font-weight-semibold tx-14 ml-3">{{ $totalWCC }}</span>
                            </li>
                            <li class="mt-0 d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="ti-files bg-purple-gradient text-white product-icon"></i>
                                    <span class="font-weight-semibold mb-4 tx-14 ml-3">Total Po Raised </span>
                                </div>
                                <span class="font-weight-semibold tx-14 ml-3">{{ $totalPO }}</span>
                            </li>
                            <li class="mt-0 d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="ti-files bg-purple-gradient text-white product-icon"></i>
                                    <span class="font-weight-semibold mb-4 tx-14 ml-3">Total DC Raised </span>
                                </div>
                                <span class="font-weight-semibold tx-14 ml-3">{{ $totalDC }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-lg-6">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5"> PO Analytics </div>
                        <p class="mg-b-20">Purachase orders achieved by the team members.</p>
                        <!-- <div class="ht-200 ht-sm-300" id="flotBar3"></div> -->
                        <div class="ht-200 ht-sm-300" id="flotBar4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>


    <script>
        const poData = @json($poData);
        const flotData = poData.map((item, index) => [index, item.po_count]);
        const flotTicks = poData.map((item, index) => [index, `${item.name}(${item.po_count} Count)`]);
        $.plot('#flotBar4', [{
            data: flotData
        }], {
            series: {
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ed1c24',
                    barWidth: .2,
                    align: "center"
                },
                highlightColor: '#cb070e'
            },
            grid: {
                borderWidth: 1,
                borderColor: 'rgba(171, 167, 167,0.2)',
                hoverable: true,
                labelMargin: 15,
            },
            yaxis: {
                tickColor: 'rgba(171, 167, 167,0.2)',
                font: {
                    color: '#5f6d7a',
                    size: 10
                }
            },
            xaxis: {
                tickColor: 'rgba(171, 167, 167,0.2)',
                font: {
                    color: '#5f6d7a',
                    size: 10,
                },
                ticks: flotTicks,
                autoscaleMargin: 0.5,
            },
        });
    </script>

@endsection