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
            <a href="{{ route('chainsaw.renewal', ['add' => $client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
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

        <a href="#" class="btn btn-sm btn-primary shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addInfoModal">
            <i class="fas fa-user-plus fa-sm text-white-50"></i> Add New Document
        </a>

        <a href="{{ route('report.chainsaw.renewal',$client->id) }}" class="btn btn-danger btn-sm shadow-sm" target="_blank">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Pdf Report
        </a>

        <a href="{{ route('data.chainsaw-excel', $client->id) }}" class="btn btn-sm btn-success shadow-sm ms-auto">
                <i class="fa-solid fa-chart-simple me-1"></i> Generate Excel Report
        </a>

        <div class="card-body">
            <div class="table-responsive" style="height: 42.5rem">
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
                                <td >{{ $item->purpose }}</td>
                                <td>{{ $item->remarks ?: 'No Remarks' }}</td>
                                <td><i>No document yet uploaded</i></td>
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
                                            <form action="{{ route('chainsaw.delete', $item->id) }}" method="POST" class="d-inline">
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
                                            $dateRegistered = $item->date_registered ? \Carbon\Carbon::parse($item->date_registered)->format('Y-m-d') : '';
                                            $dateExpiry = $item->date_expiry ? \Carbon\Carbon::parse($item->date_expiry)->format('Y-m-d') : '';
                                            $dateAcquired = $item->date_acquired ? \Carbon\Carbon::parse($item->date_acquired)->format('Y-m-d') : '';
                                        @endphp


                                        <form action="{{ route('update.info', $item->id) }}" id="Client" method="POST">
                                            @csrf
                                            @method('PUT')

                                        <div class="modal-body">

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
                                                    <input type="date" class="form-control" id="date_registered" name="date_registered"
                                                           value="{{ old('date_registered', $dateRegistered) }}"
                                                           placeholder="Enter date registered/renewal">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date_expiry" class="form-label">Date Expiry</label>
                                                    <input type="date" class="form-control" id="date_expiry" name="date_expiry"
                                                           value="{{ old('date_expiry', $dateExpiry) }}"
                                                           placeholder="Enter date expiry">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="control_no" class="form-label">Control No.</label>
                                                    <input type="text" class="form-control" id="control_no" name="control_no" value="{{ old('control_no', $item->control_no) }}" placeholder="Enter control number">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date_acquired" class="form-label">Date Acquired</label>
                                                    <input type="date" class="form-control" id="date_acquired" name="date_acquired" value="{{ old('date_acquired', $dateAcquired) }}" placeholder="Enter date acquired">
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
                                                    <label for="sticker" class="form-label">DENR Sticker No.</label>
                                                    <input type="text" class="form-control" id="sticker" name="sticker" value="{{ old('sticker', $item->sticker) }}" placeholder="Enter sticker number">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="purpose" class="form-label">Purpose</label>
                                                    <input type="text" class="form-control" id="purpose" name="purpose" value="{{ old('purpose', $item->purpose) }}" placeholder="Enter purpose">
                                                </div>

                                                <div class="mb-3">
                                                <label for="remarks">Remarks</label>
                                                <select name="remarks" class="form-control" id="remarks">
                                                    <option value="NEW" {{ old('remarks', $item->remarks) == 'NEW' ? 'selected' : '' }}>New</option>
                                                    <option value="RENEWAL" {{ old('remarks', $item->remarks) == 'RENEWAL' ? 'selected' : '' }}>Renewal</option>
                                                    <option value="EXPIRED" {{ old('remarks', $item->remarks) == 'EXPIRED' ? 'selected' : '' }}>Expired</option>
                                                </select>
                                              </div>

                                                <div class="mb-3">
                                                    <label for="purpose" class="form-label">Document</label>
                                                    <input type="file" class="form-control" id="documents" name="document" value="{{ old('document', $item->documents) }}">
                                                <i style="color:red; text-decoration:underline">PDF ONLY</i>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="Sbtn" class="btn btn-primary">Save Information</button>
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
            <form action="{{ route('client.info',$client->id) }}" id="Client" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Name</label>
                        <input type="text" class="form-control" id="folderAddress" name="name" value="{{ old('name', $client->name) }}" placeholder="Enter name">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="folderAddress" name="address" value="{{ old('address', $client->address) }}" placeholder="Enter address">
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
                        <label for="length_guidebar" class="form-label">Length Guidebar</label>
                        <input type="text" class="form-control" id="length_guidebar" name="length_guidebar" placeholder="Enter length guidebar">
                    </div>

                    <div class="mb-3">
                        <label for="sticker" class="form-label">DENR Sticker No.</label>
                        <input type="text" class="form-control" id="sticker" name="sticker"  placeholder="Enter DENR Sticker No.">
                    </div>

                    <div class="mb-3">
                        <label for="purpose" class="form-label">Purpose</label>
                        <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Enter purpose">
                    </div>

                    <input type="hidden" name="remarks" value="RENEWAL" id="">

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
