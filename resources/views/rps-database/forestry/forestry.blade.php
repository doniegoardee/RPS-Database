@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Forestry</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <div class="row g-4">

        <div class="col-lg-3 col-md-6 col-sm-12">
            <a href="{{ route('tenur.doc') }}" class="text-decoration-none">
                <div class="card border-left-success shadow-lg h-100 py-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-lg font-weight-bold text-success text-uppercase mb-2">
                                    Tenurial Instrument(TI)
                                </div>
                                <b class="text-lg font-weight-bold text-success text-uppercase mb-2">{{ $ti }}</b>

                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <a href="{{ route('permit.doc') }}" class="text-decoration-none">
                <div class="card border-left-info shadow-lg h-100 py-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-lg font-weight-bold text-info text-uppercase mb-2">
                                    Permits
                                </div>
                                <b class="text-lg font-weight-bold text-info text-uppercase mb-2">{{ $per }}</b>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


    </div>


</div>

</div>

@include('rps-database.contents.footer')
