@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Page Heading -->


            <div class="row">


                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ route('tenur.doc') }}" class="text-decoration-none">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Tenurial Instrument (TI)
                                        </div>
                                        <b class="text-success">{{ $ti }}</b>
                                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> --}}
                                    </div>
                                    <div class="col-auto">
                                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ route('for.doc') }}" class="text-decoration-none">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Foreshore
                                        </div>
                                        <b class="text-primary">{{ $foreshore }}</b>

                                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                                    </div>
                                    <div class="col-auto">
                                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ route('ppi.doc') }}" class="text-decoration-none">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">API / PPI</div>
                                        <b class="text-info">{{ $ppi }}</b>

                                        {{-- <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="col-auto">
                                        {{-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- Pending Requests Card Example -->
                {{-- <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pending Requests</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>



</div>

@include('rps-database.contents.footer')
