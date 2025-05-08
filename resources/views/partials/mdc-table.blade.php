<div class="card-body">
    <div class="table-responsive">
        <table id="mdcTable" class="table table-striped mg-b-0 text-md-nowrap">
            <thead>
                <tr>
                    <th width="45">S.No.</th>
                    <th>Client</th>
                    <th>Client PO</th>
                    <th>Project ID</th>
                    <th width="90">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($totalMDC as $index => $mdc)
                    <tr>
                        <td align="center">{{ $totalMDC->firstItem() + $index }}.</td>
                        <td>{{ $mdc->client_name ?? 'NA' }}</td>
                        <td>{{ $mdc->client_po_no ?? 'NA' }}</td>
                        <td>{{ $mdc->project_id ?? 'NA' }}</td>
                        <td>
                            <div class="dropcenter">
                                <button class="btn btn-sm py-0" data-toggle="dropdown" type="button">
                                    <i class="bx bx-dots-vertical bx-xs"></i>
                                </button>
                                <div class="dropdown-menu tx-13">
                                    <a class="dropdown-item"
                                        href="{{ url('13sqft/13sqft-mdc-pdf/' . $mdc->mdc_id) }}">View
                                        MDC</a>
                                    <a class="dropdown-item"
                                        href="{{ url('13sqft/13sqft-mdc-edit/' . $mdc->mdc_id) }}">Edit</a>
                                    <a class="dropdown-item swal-parameter" href="#"
                                        data-url="{{ url('13sqft/13sqft-mdc-delete/' . $mdc->mdc_id) }}">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No data available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
        <div class="mb-2">
            Showing {{ $totalMDC->firstItem() }} to {{ $totalMDC->lastItem() }} of
            {{ $totalMDC->total() }} entries
        </div>
        <div>
            <span>{{ $totalMDC->links('pagination::bootstrap-4') }}</span>
        </div>
    </div>
</div>
