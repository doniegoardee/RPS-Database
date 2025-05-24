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
            <a href="{{ route('wildlife.client',['add' => $client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
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
                            <th style="width: 10%;">Name</th>
                            <th style="width: 15%;">Address</th>
                            <th style="width: 8%;">Permit No.</th>
                            <th style="width: 10%;">Date Issuance</th>
                            <th style="width: 10%;">Date Expiry</th>
                            <th style="width: 10%;">Fee</th>
                            <th style="width: 8%;">Species Name</th>
                            <th style="width: 10%;">Description</th>
                            <th style="width: 7%;">Quantity</th>
                            <th style="width: 7%;">Unit Measure</th>
                            <th style="width: 7%;">Origin</th>
                            <th style="width: 7%;">Destination</th>
                            <th style="width: 7%;">Purpose</th>
                            <th>Document</th>
                            <th style="width: 12%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($table as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->permit_no }}</td>
                                <td>
                                    @if ($item->date_issuance)
                                        {{ \Carbon\Carbon::parse($item->date_issuance)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if ($item->date_expiry)
                                        {{ \Carbon\Carbon::parse($item->date_expiry)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>{{ $item->fee }}</td>
                                <td>{{ $item->species_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->unit_measure }}</td>
                                <td>{{ $item->origin }}</td>
                                <td>{{ $item->destination }}</td>
                                <td>{{ $item->purpose }}</td>
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
                                            <form action="{{ route('delete-data.wildlife', $item->id) }}" method="POST" class="d-inline">
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
                                            $dateExpiry = $item->date_expiry ? \Carbon\Carbon::parse($item->date_expiry)->format('Y-m-d') : '';
                                        @endphp

                                        <form action="{{ route('update-data.wildlife', $item->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                        <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="" name="name" value="{{ old('name', $item->name) }}" placeholder="Enter Name..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $item->address) }}" placeholder="Enter Address..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Permit No.</label>
                                                    <input type="text" class="form-control" id="" name="permit_no" value="{{ old('permit_no', $item->permit_no) }}" placeholder="Enter Permit No..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Date Issuance</label>
                                                    <input type="date" class="form-control" id="date_issuance" name="date_issuance"
                                                           value="{{ old('date_issuance', $dateIssuance) }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Expiration Date</label>
                                                    <input type="date" class="form-control" id="" name="expiration_date"
                                                           value="{{ old('expiration_date', $dateExpiry) }}">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Fee</label>
                                                    <input type="text" class="form-control" id="fee" name="fee" value="{{ old('fee', $item->fee) }}" placeholder="Enter Fee..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Species Name</label>
                                                    <input type="text" class="form-control" id="species_name" name="species_name" value="{{ old('species_name', $item->species_name) }}" placeholder="Enter Species name..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Description</label>
                                                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $item->description) }}" placeholder="Enter Description..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Quantity</label>
                                                    <input type="text" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $item->quantity) }}" placeholder="Enter Quantity..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Unit Measure</label>
                                                    <input type="text" class="form-control" id="unit_measure" name="unit_measure" value="{{ old('unit_measure', $item->unit_measure) }}" placeholder="Enter Unit measure..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Origin</label>
                                                    <input type="text" class="form-control" id="origin" name="origin" value="{{ old('origin', $item->origin) }}" placeholder="Enter Origin..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Destination</label>
                                                    <input type="text" class="form-control" id="destination" name="destination" value="{{ old('destination', $item->destination) }}" placeholder="Enter Destination..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Purpose</label>
                                                    <input type="text" class="form-control" id="purpose" name="purpose" value="{{ old('purpose', $item->purpose) }}" placeholder="Enter Purpose..">
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
            <form action="{{ route('add-data.wildlife',$client->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="" name="name" value="{{ old('name', $client->name) }}" placeholder="Enter Name..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Permit No.</label>
                        <input type="text" class="form-control" id="" name="permit_no" placeholder="Enter Permit No..">
                     </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Date Issuance</label>
                        <input type="date" class="form-control" id="date_issuance" name="date_issuance">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Expiration Date</label>
                        <input type="date" class="form-control" id="" name="expiration_date">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Fee</label>
                        <input type="text" class="form-control" id="fee" name="fee" placeholder="Enter Fee..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Species Name</label>
                        <input type="text" class="form-control" id="species_name" name="species_name" placeholder="Enter Species name..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description"  placeholder="Enter Description..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Unit Measure</label>
                        <input type="text" class="form-control" id="unit_measure" name="unit_measure"  placeholder="Enter Unit measure..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Origin</label>
                        <input type="text" class="form-control" id="origin" name="origin" placeholder="Enter Origin..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" name="destination"  placeholder="Enter Destination..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Purpose</label>
                        <input type="text" class="form-control" id="purpose" name="purpose"  placeholder="Enter Purpose..">
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
