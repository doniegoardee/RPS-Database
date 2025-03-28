@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <!-- Scrollable Content -->
    <div class="flex-grow-1 overflow-auto custom-scroll">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Permits</h1>
                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Page Heading -->
        <div class="container mt-5">

            <div class="row">

                @foreach ($title as $title)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('permit.list', ['title' => $title->permit_title]) }}" class="text-decoration-none">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <img src="{{ asset('images/penro_cag.png') }}" alt="" class="img-fluid mb-3" style="width: 80px; height: 80px;">

                                <h5 class="card-title">{{ $title->permit_title }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>



</div>

</div>

@include('rps-database.contents.footer')

