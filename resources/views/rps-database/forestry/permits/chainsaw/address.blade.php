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
            <a href="{{ route('chainsaw')}}" class="btn btn-sm btn-primary shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">{{ $address->address }}'s Client Folder</h1>
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

    @if ($errors->any())
        <div class="alert alert-warning">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="input-group mb-4">
            <input type="search" id="searchInput" class="form-control" placeholder="Search...">
            <button class="btn btn-primary" id="searchBtn">Search</button>
            <button class="btn btn-secondary ms-2" id="clearBtn">Clear</button>
        </div>

        <a href="#" class="btn btn-sm btn-primary shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addClientModal">
            <i class="fas fa-user-plus fa-sm text-white-50"></i> Add Client
        </a>

        <a href="#" class="btn btn-sm btn-success shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#ImportClientModal" >
            <i class="fas fa-solid fa-file-excel fa-sm text-white-50"></i> Import Excel File
        </a>
        <a href="{{ route('export.template') }}" class="btn btn-sm btn-success shadow-sm ms-auto" >
            <i class="fas fa-solid fa-file-arrow-down fa-sm text-white-50"></i> Download Template
        </a>

        <div class="container-fluid px-0">
            <div class="card-body px-0">
                @foreach ($client as $name)

                <a href="{{route('table.chainsaw',$name->name) }}" class="address-container">
                    <i class="bi bi-folder-fill text-warning icon-folder"></i>
                    <span class="address-text">{{ $name->name }}</span>
                </a>
                @endforeach

            </div>
        </div>


    </div>

</div>

@include('rps-database.contents.footer')


<!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClientModalLabel">Add New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('client.chainsaw',[ 'address'=> $address->address]) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="clientName" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="clientName" name="name" placeholder="Enter client name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Client</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="ImportClientModal" tabindex="-1" aria-labelledby="ImportClientModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ImportClientModalLabel">Import Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <form action="{{ route('import.chainsaw', ['address' => $address->address]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Import Client</label>
                        <input class="form-control" type="file" name="import" id="import" required>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Import</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

