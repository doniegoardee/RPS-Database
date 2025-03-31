@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto custom-scroll p-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Permits</h1>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <a href="{{ route('gsup') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-3 text-center hover-card">
                        <div class="card-body">
                            <img src="{{ asset('images/penro_cag.png') }}" alt="GSUP" class="img-fluid mb-3" style="width: 80px; height: 80px;">
                            <h5 class="card-title fw-bold text-primary">GSUP</h5>
                        </div>
                    </div>
                </a>
            </div>

            @foreach ($title as $permit)
                <div class="col-md-4">
                    <a href="{{ route('permit.list', ['title' => $permit->permit_title]) }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 rounded-3 text-center hover-card">
                            <div class="card-body">
                                <img src="{{ asset('images/penro_cag.png') }}" alt="{{ $permit->permit_title }}" class="img-fluid mb-3" style="width: 80px; height: 80px;">
                                <h5 class="card-title fw-bold text-primary">{{ $permit->permit_title }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
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
