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

            <a href="{{ route('sp.client', ['address' => $client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
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

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
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

            <a href="{{ route('client-report.lands',['id' => $client->id,'add' => $client->address ]) }}" class="btn btn-danger btn-sm shadow-sm" target="_blank">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Pdf Report
            </a>

            <a href="{{ route('client-report.excel',['id' => $client->id,'add' => $client->address ]) }}" class="btn btn-success btn-sm shadow-sm">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Excel Report
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive" style="height: 42.5rem">
                <table class="table table-bordered">
                    <thead class="text-center bg-primary text-white">
                        <tr>
                            <th style="width: 3%;"></th>
                            <th style="width: 10%;">Applicant</th>
                            <th style="width: 10%;">Applicant No.</th>
                            <th style="width: 15%;">Lot No.</th>
                            <th style="width: 10%;">Area</th>
                            <th style="width: 8%;">Location</th>
                            <th style="width: 10%;">DPLI/MI/SI</th>
                            <th>Document</th>
                            <th style="width: 12%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($table as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->applicant }}</td>
                                <td>{{ $item->applicant_no }}</td>
                                <td>{{ $item->lot_no }}</td>
                                <td>{{ $item->area }}</td>
                                <td>{{ $item->location }}</td>
                                <td >{{ $item->dpli_mi_si }}</td>
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
                                            <form action="{{ route('delete-data.sp',$item->id) }}" method="POST" class="d-inline">
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
                                            $dateApproved = $item->date_approved ? \Carbon\Carbon::parse($item->date_approved)->format('Y-m-d') : '';
                                        @endphp

                                        <form action="{{ route('update-data.sp',$item->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                        <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Applicant</label>
                                                    <input type="text" class="form-control" id="name" name="applicant" value="{{ old('applicant', $item->applicant) }}" placeholder="Enter Applicant..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Applicant No.</label>
                                                    <input type="text" class="form-control" id="name" name="applicant_no" value="{{ old('applicant_no', $item->applicant_no) }}" placeholder="Enter Applicant No..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Lot No.</label>
                                                    <input type="text" class="form-control" id="address" name="lot_no" value="{{ old('lot_no', $item->lot_no) }}" placeholder="Enter Lot No..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Area</label>
                                                    <input type="text" class="form-control" id="" name="area" value="{{ old('area', $item->area) }}" placeholder="Enter area..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Location</label>
                                                    <input type="text" class="form-control" id="control_no" name="location" value="{{ old('location', $item->location) }}" placeholder="Enter Location..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">DPLI/MI/SI</label>
                                                    <input type="text" class="form-control" id="" name="dpli_mi_si" value="{{ old('dpli_mi_si', $item->dpli_mi_si) }}" placeholder="Enter DPLI/MI/SI..">
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
            <form action="{{ route('sp-data.store',[$client->id , 'add' => $client->address]) }}" id="Client" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Applicant</label>
                        <input type="text" class="form-control" id="folderAddress" name="applicant" value="{{ old('name',$client->name) }}" placeholder="Enter Applicant..">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Applicant No.</label>
                        <input type="text" class="form-control" id="folderAddress" name="applicant_no" value="" placeholder="Enter Applicant No..">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Lot No.</label>
                        <input type="text" class="form-control" id="folderAddress" name="lot_no"  placeholder="Enter Lot No..">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Area</label>
                        <input type="text" class="form-control" id="folderAddress" name="area" placeholder="Enter Area..">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Location</label>
                        <input type="text" class="form-control" id="folderAddress" name="location" placeholder="Enter Location..">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">DPLI/MI/SI</label>
                        <input type="text" class="form-control" id="folderAddress" name="dpli_mi_si" placeholder="Enter DPLI/MI/SI..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Document</label>
                        <input type="file" class="form-control" id="" name="document">
                        <i style="color: red">Pdf Only</i>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="Sbtn" class="btn btn-primary">Add Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  const form = document.getElementById('Client');
  const btn = document.getElementById('Sbtn');

  form.addEventListener('submit', function() {
    btn.disabled = true;
  });
</script>
