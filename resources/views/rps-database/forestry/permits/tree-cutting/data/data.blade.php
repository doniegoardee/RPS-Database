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



</style>

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('tree-cutting.client',['add' => $client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
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



        <div>

            <a href="#" class="btn btn-sm btn-primary shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addInfoModal">
                <i class="fas fa-user-plus fa-sm text-white-50"></i> Add New Document
            </a>

            <a href="{{ route('report.chainsaw.new',$client->id) }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Report
                </a>
        </div>

        <div class="card-body">
            <div class="table-responsive" style="height: 42.5rem">
                <table class="table table-bordered">
                    <thead class="text-center bg-primary text-white">
                        <tr>
                            <th style="width: 3%;">NO.</th>
                            <th style="width: 10%;">Name Permitee</th>
                            <th style="width: 15%;">Location</th>
                            <th style="width: 8%;">No. of Trees</th>
                            <th style="width: 10%;">Species</th>
                            <th style="width: 10%;">Approved Volume</th>
                            <th style="width: 10%;">Date Issuance</th>
                            <th style="width: 8%;">Expiration Date</th>
                            <th style="width: 10%;">Seed Requirements</th>
                            <th>Document</th>
                            <th style="width: 12%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($table as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->name_permitee }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->no_trees }}</td>
                                <td>{{ $item->species }}</td>
                                <td>{{ $item->approved_volume }}</td>
                                <td>
                                    @if ($item->date_issuance)
                                        {{ \Carbon\Carbon::parse($item->date_issuance)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if ($item->expiration_date)
                                        {{ \Carbon\Carbon::parse($item->expiration_date)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>{{ $item->seed_requirements }}</td>
                                <td>
                                    @if($item->document)
                                        <a href="{{ asset('file/' . $item->document) }}" target="_blank">
                                            {{ $item->document }}
                                        </a>
                                    @else
                                        <span class="text-muted">No document uploaded yet</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger d-inline-block me-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Delete Modal -->
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
                                            <form action="{{ route('delete-data.tree-cutting', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        @php
                                            $dateIssuance = $item->date_issuance ? \Carbon\Carbon::parse($item->date_issuance)->format('Y-m-d') : '';
                                            $expirationDate = $item->expiration_date ? \Carbon\Carbon::parse($item->expiration_date)->format('Y-m-d') : '';
                                        @endphp

                                        <form action="{{ route('update.tree-cutting', $item->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                        <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name Permitee</label>
                                                    <input type="text" class="form-control" id="" name="name_permitee" value="{{ old('name_permitee', $item->name_permitee) }}" placeholder="Enter name permitee..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Location</label>
                                                    <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $item->location) }}" placeholder="Enter location..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">No. of Trees</label>
                                                    <input type="text" class="form-control" id="no_trees" name="no_trees" value="{{ old('no_trees', $item->no_trees) }}" placeholder="Enter No. of trees..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Species</label>
                                                    <input type="text" class="form-control" id="species" name="species" value="{{ old('species', $item->species) }}" placeholder="Enter species..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Approved Volume</label>
                                                    <input type="text" class="form-control" id="approved_volume" name="approved_volume" value="{{ old('approved_volume', $item->approved_volume) }}" placeholder="Enter Approve volume..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Date Issuance</label>
                                                    <input type="date" class="form-control" id="date_issuance" name="date_issuance"
                                                           value="{{ old('date_issuance', $dateIssuance) }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Expiration Date</label>
                                                    <input type="date" class="form-control" id="" name="expiration_date"
                                                           value="{{ old('expiration_date', $expirationDate) }}">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Seed Requirements</label>
                                                    <input type="text" class="form-control" id="seed_requirements" name="seed_requirements" value="{{ old('seed_requirements', $item->seed_requirements) }}" placeholder="Enter Seed requirements..">
                                                </div>


                                               <div class="mb-3">
                                                <label for="">Documents</label>
                                                <input type="file" name="document" class="form-control" value="{{ old('document',$item->document) }}" id="">
                                                <i style="color:red; text-decoration:underline">PDF ONLY</i>
                                            </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Information</button>
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
            <form action="{{ route('add.tree-cutting',$client->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Name Permitee</label>
                        <input type="text" class="form-control" id="" name="name_permitee" value="{{ old('name_permitee', $client->name) }}" placeholder="Enter Name permitee..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Location</label>
                        <input type="text" class="form-control" id="" name="location" value="{{ old('location', $client->location) }}" placeholder="Enter Location..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">No. of Trees</label>
                        <input type="text" class="form-control" id="" name="no_trees" placeholder="Enter No. of trees..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Species</label>
                        <input type="text" class="form-control" id="" name="species" placeholder="Enter Species..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Approved Volume</label>
                        <input type="text" class="form-control" id="" name="approved_volume" placeholder="Enter Approved volume..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Date Issuance</label>
                        <input type="date" class="form-control" id="" name="date_issuance">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Expiration Date</label>
                        <input type="date" class="form-control" id="" name="expiration_date"">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Seed Requirements</label>
                        <input type="text" class="form-control" id="" name="seed_requirements" placeholder="Enter Seed requirements..">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
