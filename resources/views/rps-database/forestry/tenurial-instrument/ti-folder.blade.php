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
            <a href="{{ route('tenur.doc') }}" class="btn btn-sm btn-primary shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">{{ $type->title }}'s Folder</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="#" class="btn btn-sm btn-primary shadow-sm ms-auto mb-3" data-bs-toggle="modal" data-bs-target="#addFolderModal">
            <i class="fas fa-file-circle-plus fa-sm text-white-50"></i> Add Folder
        </a>

        <div class="container-fluid px-0">
            <div class="card-body px-0">

                @foreach ($address as $add)
                    <a href="{{ route('tenur.client', ['add' => $add->address, 'title' => $type->title]) }}" class="address-container">
                        <i class="bi bi-folder-fill text-warning icon-folder"></i>
                        <span class="address-text">{{ $add->address }}</span>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>

@include('rps-database.contents.footer')

<!-- Add Folder Modal -->
<div class="modal fade" id="addFolderModal" tabindex="-1" aria-labelledby="addFolderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFolderModalLabel">Add New Folder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('ti-add.folder',['title'=>$type->title]) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Folder Name</label>
                        <input type="text" class="form-control" id="folderAddress" name="address" placeholder="Enter folder name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Folder</button>
                </div>
            </form>
        </div>
    </div>
</div>
