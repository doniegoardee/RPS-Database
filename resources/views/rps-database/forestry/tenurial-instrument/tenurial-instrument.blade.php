@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <!-- Scrollable Content -->
    <div class="flex-grow-1 overflow-auto custom-scroll">

        <div class="flex-grow-1 overflow-auto custom-scroll p-4">
            <div class="d-sm-flex align-items-center mb-4">
                <a href="{{ route('forestry') }}" class="btn btn-sm btn-primary shadow-sm me-3">
                    <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
                </a>
                <h1 class="h3 mb-0 text-gray-800">Tenurial Instruments</h1>
            </div>

        <!-- Page Heading -->
        <div class="container mt-5">

            <div class="row g-4">

                {{-- @foreach ($title as $title)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tenur.type', ['title' => $title->title]) }}" class="text-decoration-none">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <img src="{{ asset('images/penro_cag.png') }}" alt="" class="img-fluid mb-3" style="width: 80px; height: 80px;">

                                <h5 class="card-title">{{ $title->title }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach --}}
                @foreach ($title as $title)
                <div class="col-md-4">
                    <a href="{{ route('ti.folder',['title'=> $title->title]) }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 rounded-3 text-center hover-card">
                            <div class="card-body">
                                <img src="{{ asset('images/penro_cag.png') }}" alt="{{$title->title }}" class="img-fluid mb-3" style="width: 80px; height: 80px;">
                                <h5 class="card-title fw-bold text-primary">{{$title->title }}</h5>
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

<style>
    .hover-card:hover {
        transform: translateY(-5px);
        transition: 0.3s ease-in-out;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
</style>

