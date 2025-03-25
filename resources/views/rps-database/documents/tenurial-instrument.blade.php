@include('rps-database.contents.header')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tenurial Instrument</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <!-- Page Heading -->
    <div class="container mt-5">

        <div class="row">

            @foreach ($title as $titles)
            <div class="col-md-4 mb-4">
                <a href="{{ route('tenur.type',$titles->id) }}" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/penro_cag.png') }}" alt="" class="img-fluid mb-3" style="width: 80px; height: 80px;">

                            <h5 class="card-title">{{ $titles->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>

</div>

@include('rps-database.contents.footer')
