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
            <a href="{{ route('ti.folder', ['title' => $title ]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">{{ $add->address }} Folder</h1>
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

    @if(session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif

    @if ($errors->any())
        <div class="alert alert-warning">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




        <a href="#" class="btn btn-sm btn-success shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#ImportClientModal" >
            <i class="fas fa-solid fa-file-excel fa-sm text-white-50"></i> Import Excel File
        </a>
        <a href="{{ route('export.tenurial') }}" class="btn btn-sm btn-success shadow-sm ms-auto" >
            <i class="fas fa-solid fa-file-arrow-down fa-sm text-white-50"></i> Download Template
        </a>

        <hr>


   <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <a href="{{ route('tenurial.new', ['title' => $title, 'add' => $add->address]) }}" class="text-decoration-none">
            <div class="card border-left-success shadow-lg h-100 py-3">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-success text-uppercase mb-2">
                        New
                    </div>
                    <b class="text-lg font-weight-bold text-success text-uppercase mb-2">{{ $new }}</b>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <a href="{{ route('tenurial.renewal', ['title' => $title, 'add' => $add->address]) }}" class="text-decoration-none">
            <div class="card border-left-primary shadow-lg h-100 py-3">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-2">
                        Existing
                    </div>
                    <b class="text-lg font-weight-bold text-primary text-uppercase mb-2">{{ $renewal }}</b>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <a href="{{ route('tenurial.renewal', ['title' => $title, 'add' => $add->address]) }}" class="text-decoration-none">
            <div class="card border-left-info shadow-lg h-100 py-3">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-info text-uppercase mb-2">
                        Renewal
                    </div>
                    <b class="text-lg font-weight-bold text-info text-uppercase mb-2">{{ $renewal }}</b>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <a href="{{ route('tenurial.expired', ['title' => $title, 'add' => $add->address]) }}" class="text-decoration-none">
            <div class="card border-left-secondary shadow-lg h-100 py-3">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-secondary text-uppercase mb-2">
                        Expired
                    </div>
                    <b class="text-lg font-weight-bold text-secondary text-uppercase mb-2">{{ $expired }}</b>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <a href="{{ route('tenurial.renewal', ['title' => $title, 'add' => $add->address]) }}" class="text-decoration-none">
            <div class="card border-left-danger shadow-lg h-100 py-3">
                <div class="card-body">
                    <div class="text-lg font-weight-bold text-danger text-uppercase mb-2">
                        Cancelled
                    </div>
                    <b class="text-lg font-weight-bold text-danger text-uppercase mb-2">{{ $renewal }}</b>
                </div>
            </div>
        </a>
    </div>
</div>



    </div>

</div>

@include('rps-database.contents.footer')




<div class="modal fade" id="ImportClientModal" tabindex="-1" aria-labelledby="ImportClientModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ImportClientModalLabel">Import Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <form action="{{ route('ti.import', ['address' => $add->address, 'title' => $title]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Import Client</label>
                        <input class="form-control" type="file" name="import" id="import" required> <br>
                        <i style="color: red; font-decoration:underline ">Status can ONLY be: <b style="text-decoration: underline">NEW, RENEWAL, or EXPIRED</b></i><br>
                        <i style="color: red; font-decoration:underline ">If Status doesn't match <b style="text-decoration: underline">AUTOMATICALLY</b> mark status as <b>NEW</b></i>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Import</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>


        </div>
    </div>
</div>
