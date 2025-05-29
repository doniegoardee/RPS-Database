@include('rps-database.contents.header')

<style>
    .address-container {
        width: 100%;
        max-width: 100%;
        background: #f8f9fa;
        padding: 12px 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .address-text {
        font-weight: bold;
        flex-grow: 1;
        text-align: left;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .icon-folder {
        font-size: 1.5rem;
        margin-right: 10px;
    }
</style>

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('permit.doc') }}" class="btn btn-sm btn-primary shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">Wildlife</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif



        <div class="d-flex gap-2 mb-3">

            <a href="{{ route('all-data.wildlife') }}" class="btn btn-sm btn-success shadow-sm">
                <i class="fas fa-file-arrow-down fa-sm text-white-50"></i> Generate Excel Report
            </a>
        </div>


            <div class="container-fluid px-0">
                <div class="card-body px-0">
                    @foreach ($address as $add)

                    <a href="{{ route('wildlife.client',['add'=>$add->address]) }}" class="address-container">
                        <i class="bi bi-folder-fill text-warning icon-folder"></i>
                        <span class="address-text">{{ $add->address }}</span>
                    </a>
                    @endforeach

                </div>
            </div>


    </div>

</div>

@include('rps-database.contents.footer')


