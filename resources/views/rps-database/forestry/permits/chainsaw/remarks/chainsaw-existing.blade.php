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

    .hover-shadow:hover {
        background-color: #f0f4f8;
        transition: background-color 0.2s ease-in-out;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }
</style>

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <a href="{{ route('chainsaw.remark', ['add' => $add->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
                    <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
                </a>
                <h1 class="h4 mb-0 text-gray-800"><b>{{ $add->address }}'s Expired Folder</b></h1>
            </div>
        </div>

        <div>
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

        {{-- <a href="#" class="btn btn-sm btn-primary shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addClientModal">
            <i class="fas fa-user-plus fa-sm text-white-50"></i> Add Client
        </a> --}}

        <a href="{{ route('chainsaw.remarks.new',['add' => $add->address]) }}" class="btn btn-danger btn-sm shadow-sm" target="_blank">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Pdf Report
        </a>

        <a href="{{ route('status.chainsaw-excel', ['add' => $add->address, 'remarks' => 'existing']) }}" class="btn btn-sm btn-success shadow-sm ms-auto">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Excel Report
        </a>


        <div class="container-fluid px-0">
            <div class="card-body px-0">
                @foreach ($client as $item)
                <a href="{{ route('table.existing', $item->id) }}" class="d-flex align-items-center gap-3 py-3 px-4 mb-2 bg-light rounded shadow-sm text-decoration-none address-container hover-shadow">
                    <i class="fa-regular fa-circle-user fa-lg text-primary"></i>
                    <span class="fw-medium text-dark">{{ $item->name }}</span>
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
            <form action="{{ route('client.chainsaw',[ 'address'=> $add->address]) }}" method="POST">
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

