@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('all.doc') }}" class="btn btn-primary btn-sm shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm me-1"></i> Back
            </a>
            <h1 class="h4 mb-0 text-primary">View Information</h1>
        </div>

        <div class="input-group mb-3">
            <a href="{{ route('tenurial.all') }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
                <i class="fa-solid fa-chart-simple me-1"></i> Generate Report
            </a>
        </div>


        <div class="container my-4">
            <div class="card shadow-sm">

                <div class="card-body">
                    @foreach ($view as $item)
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Name Lessee:</strong> {{ $item->name_lessee }}
                            </div>
                            <div class="col-md-6">
                                <strong>Address:</strong> {{ $item->address }}
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Issue Date:</strong>
                                {{ $item->issue_date ? \Carbon\Carbon::parse($item->issue_date)->format('m/d/y') : 'N/A' }}
                            </div>
                            <div class="col-md-6">
                                <strong>Expired Date:</strong>
                                {{ $item->expired_date ? \Carbon\Carbon::parse($item->expired_date)->format('m/d/y') : 'N/A' }}
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Tenurial Number:</strong> {{ $item->tenur_no }}
                            </div>
                            <div class="col-md-6">
                                <strong>Total Area:</strong> {{ $item->total_area }}
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Status:</strong> {{ $item->status }}
                            </div>
                            <div class="col-md-6">
                                <strong>Remarks:</strong> {{ $item->remarks }}
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <strong>Download Document:</strong>  @if ($item['document'])
                                <a href="{{ url('file/' . $item['document']) }}" target="_blank">
                                    {{ $item['document'] }}
                                </a>
                            @else
                                <span class="text-muted">No Document yet uploaded</span>
                            @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>




    </div>
</div>

@include('rps-database.contents.footer')
