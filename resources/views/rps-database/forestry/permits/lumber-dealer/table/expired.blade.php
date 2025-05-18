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
            <a href="{{ route('ld.expired', ['add' => $client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
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

            <a href="{{ route('report.ld.new',$client->id) }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
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
                            <th style="width: 10%;">Date Registered/Renewal</th>
                            <th style="width: 10%;">Date Expiry</th>
                            <th style="width: 8%;">Control NO.</th>
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
                                <td >{{ $item->purpose }}</td>
                                <td>{{ $item->remarks ?: 'No Remarks' }}</td>
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
                                            <form action="{{ route('ld.delete', $item->id) }}" method="POST" class="d-inline">
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
                                        @endphp

                                        <form action="{{ route('ld.update.info', $item->id) }}" method="POST" enctype="multipart/form-data">
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
                                                    <label for="purpose" class="form-label">Purpose</label>
                                                    <textarea name="purpose" id="" class="form-control" cols="30" rows="10" placeholder="Enter purpose">{{ $item->purpose }}
                                                    </textarea>
                                                    {{-- <input type="text" class="form-control" id="purpose" name="purpose" > --}}
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
            <form action="{{ route('ld.client.info',$client->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Name</label>
                        <input type="text" class="form-control" id="folderAddress" name="name" value="{{ old('name', $client->name) }}" placeholder="Enter name..">
                    </div>

                    <div class="mb-3">
                        <label for="folderAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="folderAddress" name="address" value="{{ old('address', $client->address) }}" placeholder="Enter address..">
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
                        <input type="text" class="form-control" id="folderAddress" name="control_no" placeholder="Enter Control number..">
                    </div>


                    <div class="mb-3">
                        <label for="purpose" class="form-label">Purpose</label>
                        <textarea name="purpose" class="form-control" id="" cols="30" rows="10" placeholder="Enter purpose.."></textarea>
                        {{-- <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Enter purpose"> --}}
                    </div>


                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                       <select class="form-control" name="remarks" id="">
                        <option value="NEW">New</option>
                        <option value="RENEWAL">Renewal</option>
                        <option value="EXPIRED">Expired</option>
                       </select>
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
