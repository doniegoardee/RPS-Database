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
            <a href="{{ route('folder', ['add' => $client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">{{ $client->name }}'s Information</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
        @endif

        @if(session('primary'))
        <div class="alert alert-primary">
            {{ session('primary') }}
        </div>
        @endif

        {{-- <div class="input-group mb-4">
            <input type="search" id="searchInput" class="form-control" placeholder="Search...">
            <button class="btn btn-primary" id="searchBtn">Search</button>
            <button class="btn btn-secondary ms-2" id="clearBtn">Clear</button>
        </div> --}}

        <a href="#" class="btn btn-sm btn-primary shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addInfoModal">
            <i class="fas fa-user-plus fa-sm text-white-50"></i> Add New Document
        </a>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="text-center bg-primary text-white">
                        <tr>
                            <th style="width: 3%;">NO.</th>
                            <th style="width: 10%;">Name</th>
                            <th style="width: 15%;">Address</th>
                            <th style="width: 8%;">Brand</th>
                            <th style="width: 10%;">Serial Number</th>
                            <th style="width: 10%;">Date Registered/Renewal</th>
                            <th style="width: 10%;">Date Expiry</th>
                            <th style="width: 8%;">Control NO.</th>
                            <th style="width: 10%;">Date Acquired</th>
                            <th style="width: 7%;">Horse Power</th>
                            <th style="width: 7%;">Length Guidebar</th>
                            <th style="width: 8%;">DENR Sticker No.</th>
                            <th style="width: 10%;">Purpose</th>
                            <th style="width: 10%;">Remarks</th>
                            <th style="width: 12%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($table as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->brand }}</td>
                                <td>{{ $item->serial_num }}</td>
                                <td>
                                    @if ($item->date_registered)
                                        {{ \Carbon\Carbon::parse($item->date_registered)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if ($item->date_expiry)
                                        {{ \Carbon\Carbon::parse($item->date_expiry)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>{{ $item->control_no }}</td>
                                <td>
                                    @if ($item->date_acquired)
                                        {{ \Carbon\Carbon::parse($item->date_acquired)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>{{ $item->horse_power }}</td>
                                <td>{{ $item->length_guidebar }}</td>
                                <td>{{ $item->sticker }}</td>
                                <td>{{ $item->purpose }}</td>
                                <td>{{ $item->remarks ?: 'No Remarks' }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        {{-- <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"><i class="fas fa-edit"></i></button> --}}
                                        <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger d-inline-block me-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>

                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Delete Confirmation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this record? This action cannot be undone.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('chainsaw.delete', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('update.info', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $item->name) }}" placeholder="Enter name">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $item->address) }}" placeholder="Enter address">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="brand" class="form-label">Brand</label>
                                                    <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $item->brand) }}" placeholder="Enter brand">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="serial_num" class="form-label">Serial No.</label>
                                                    <input type="text" class="form-control" id="serial_num" name="serial_num" value="{{ old('serial_num', $item->serial_num) }}" placeholder="Enter serial number">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date_registered" class="form-label">Date Registered/Renewal</label>
                                                    <input type="date" class="form-control" id="date_registered" name="date_registered" value="{{ old('date_registered', $item->date_registered) }}" placeholder="Enter date registered/renewal">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date_expiry" class="form-label">Date Expiry</label>
                                                    <input type="date" class="form-control" id="date_expiry" name="date_expiry" value="{{ old('date_expiry', $item->date_expiry) }}" placeholder="Enter date expiry">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="control_no" class="form-label">Control No.</label>
                                                    <input type="text" class="form-control" id="control_no" name="control_no" value="{{ old('control_no', $item->control_no) }}" placeholder="Enter Control number">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date_acquired" class="form-label">Date Acquired</label>
                                                    <input type="date" class="form-control" id="date_acquired" name="date_acquired" value="{{ old('date_acquired', $item->date_acquired) }}" placeholder="Enter date acquired">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="horse_power" class="form-label">Horse Power</label>
                                                    <input type="text" class="form-control" id="horse_power" name="horse_power" value="{{ old('horse_power', $item->horse_power) }}" placeholder="Enter horse power">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="length_guidebar" class="form-label">Length Guidebar</label>
                                                    <input type="text" class="form-control" id="length_guidebar" name="length_guidebar" value="{{ old('length_guidebar', $item->length_guidebar) }}" placeholder="Enter length guidebar">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="sticker" class="form-label">DENR Sticker Number</label>
                                                    <input type="text" class="form-control" id="sticker" name="sticker" value="{{ old('sticker', $item->sticker) }}" placeholder="Enter sticker number">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="purpose" class="form-label">Purpose</label>
                                                    <input type="text" class="form-control" id="purpose" name="purpose" value="{{ old('purpose', $item->purpose) }}" placeholder="Enter purpose">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="remarks" class="form-label">Remarks</label>
                                                    <input type="text" class="form-control" id="remarks" name="remarks" value="{{ old('remarks', $item->remarks) }}" placeholder="Enter remarks">
                                                </div>

                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>

                                                </form>
                                        </div>
                                    </div>

                            </div>



                        @empty
                            <tr>
                                <td colspan="15" class="text-center text-muted">No records found</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>




    </div>

</div>

@include('rps-database.contents.footer')

<div class="modal fade" id="addInfoModal" tabindex="-1" aria-labelledby="addFolderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFolderModalLabel">Add New Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('client.info',$client->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Name</label>
                        <input type="text" class="form-control" id="folderAddress" name="name" placeholder="Enter name">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="folderAddress" name="address" placeholder="Enter address">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="folderAddress" name="brand" placeholder="Enter brand">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Serial No.</label>
                        <input type="text" class="form-control" id="folderAddress" name="serial_num" placeholder="Enter serial number">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Date Registered/Renewal</label>
                        <input type="date" class="form-control" id="folderAddress" name="date_registered" placeholder="Enter date registered/renewal">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Date Expiry</label>
                        <input type="date" class="form-control" id="folderAddress" name="date_expiry" placeholder="Enter date expiry">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Control No.</label>
                        <input type="text" class="form-control" id="folderAddress" name="control_no" placeholder="Enter Control number">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Date Acquired</label>
                        <input type="date" class="form-control" id="folderAddress" name="date_acquired" placeholder="Enter date acquired">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Horse Power</label>
                        <input type="text" class="form-control" id="folderAddress" name="horse_power" placeholder="Enter horse power">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Length Guidebar</label>
                        <input type="text" class="form-control" id="folderAddress" name="length_guidebar" placeholder="Enter enter length guidebar">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">DENR Sticker Number</label>
                        <input type="text" class="form-control" id="folderAddress" name="sticker" placeholder="Enter sticker number">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Purpose</label>
                        <input type="text" class="form-control" id="folderAddress" name="purpose" placeholder="Enter purpose">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Remarks</label>
                        <input type="text" class="form-control" id="folderAddress" name="remarks" placeholder="Enter Remarks">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
