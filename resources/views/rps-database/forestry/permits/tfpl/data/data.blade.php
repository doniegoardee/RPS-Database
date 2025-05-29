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
            <a href="{{ route('tfpl.client',['add' => $client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
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

            <a href="{{ route('data-report.tfpl',['id' => $client->id,'add' => $client->address ]) }}" class="btn btn-danger btn-sm shadow-sm" target="_blank">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Pdf Report
            </a>

            <a href="{{ route('client-report.tfpl',['id' => $client->id,'add' => $client->address ]) }}" class="btn btn-success btn-sm shadow-sm">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Excel Report
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive" style="height: 42.5rem">
                <table class="table table-bordered">
                    <thead class="text-center bg-primary text-white">
                        <tr>
                            <th style="width: 3%;">NO.</th>
                            <th style="width: 10%;">Name Permitee</th>
                            <th style="width: 10%;">Place of Loading</th>
                            <th style="width: 15%;">Destination</th>
                            <th style="width: 8%;">Species</th>
                            <th style="width: 8%;">Permit No.</th>
                            <th style="width: 10%;">Volume to be Transport</th>
                            <th style="width: 15%;">No of Finish Product</th>
                            <th style="width: 15%;">No of Finish Lumber/Timber</th>
                            <th style="width: 10%;">Date Transport</th>
                            <th style="width: 10%;">Cert and Oath</th>
                            <th style="width: 10%;">Inspection</th>
                            <th style="width: 10%;">Remarks</th>
                            <th>Document</th>
                            <th style="width: 12%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($table as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->name_permitee }}</td>
                                <td>{{ $item->place_of_loading }}</td>
                                <td>{{ $item->destination }}</td>
                                <td>{{ $item->species }}</td>
                                <td>{{ $item->permit_no }}</td>
                                <td>{{ $item->volume_to_transport }}</td>
                                <td>{{ $item->no_finish_product }}</td>
                                <td>{{ $item->no_finish_lumber }}</td>
                                <td>
                                    @if ($item->date_transport)
                                        {{ \Carbon\Carbon::parse($item->date_transport)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>{{ $item->cert_and_oath }}</td>
                                <td>{{ $item->inspection }}</td>
                                <td>{{ $item->remarks }}</td>


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
                                            <form action="{{ route('delete-data.tfpl', $item->id) }}" method="POST" class="d-inline">
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
                                            $dateTransport = $item->date_transport ? \Carbon\Carbon::parse($item->date_transport)->format('Y-m-d') : '';
                                        @endphp

                                        <form action="{{ route('update-data.tfpl', $item->id) }}" id="Client" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                        <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name Permitee</label>
                                                    <input type="text" class="form-control" id="" name="name_permitee" value="{{ old('name_permitee', $item->name_permitee) }}" placeholder="Enter Name Permitee..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Place of Loading</label>
                                                    <input type="text" class="form-control" id="" name="place_of_loading" value="{{ old('place_of_loading', $item->place_of_loading) }}" placeholder="Enter Place of Loading..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Destination</label>
                                                    <input type="text" class="form-control" id="" name="destination" value="{{ old('destination', $item->destination) }}" placeholder="Enter Destination..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Species</label>
                                                    <input type="text" class="form-control" id="" name="species" value="{{ old('species', $item->species) }}" placeholder="Enter Species..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Permit No.</label>
                                                    <input type="text" class="form-control" id="" name="permit_no" value="{{ old('permit_no', $item->permit_no) }}" placeholder="Enter Permit No..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Volume to be Transport</label>
                                                    <input type="text" class="form-control" id="" name="volume_to_transport" value="{{ old('volume_to_transport', $item->volume_to_ransport) }}" placeholder="Enter Volume to Transport..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">No of Finish Product</label>
                                                    <input type="text" class="form-control" id="" name="no_finish_product" value="{{ old('no_finish_product', $item->no_finish_product) }}" placeholder="Enter No of Finish Product..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">No of Finish Lumber/Timber</label>
                                                    <input type="text" class="form-control" id="" name="no_finish_lumber" value="{{ old('no_finish_lumber', $item->no_finish_lumber) }}" placeholder="Enter No of Finish Lumber/Timber..">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="" class="form-label">Date Transport</label>
                                                    <input type="date" class="form-control" id="" name="date_transport"
                                                           value="{{ old('date_transport', $dateTransport) }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Cert and Oath</label>
                                                    <input type="text" class="form-control" id="" name="cert_and_oath" value="{{ old('cert_and_oath', $item->cert_and_oath) }}" placeholder="Enter Cert and oath..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Inspection</label>
                                                    <input type="text" class="form-control" id="" name="inspection" value="{{ old('inspection', $item->inspection) }}" placeholder="Enter Inspection..">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Remarks</label>
                                                    <input type="text" class="form-control" id="" name="remarks" value="{{ old('remarks', $item->remarks) }}" placeholder="Enter Remarks..">
                                                </div>


                                               <div class="mb-3">
                                                <label for="">Documents</label>
                                                <input type="file" name="document" class="form-control" value="{{ old('document',$item->document) }}" id="">
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
            <form action="{{ route('add-data.tfpl',$client->id) }}" id="Client" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name Permitee</label>
                            <input type="text" class="form-control" id="" name="name_permitee" value="{{ old('name_permitee', $client->name) }}" placeholder="Enter Name Permitee..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Place of Loading</label>
                        <input type="text" class="form-control" id="" name="place_of_loading" placeholder="Enter Place of Loading..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="" name="destination" placeholder="Enter Destination..">
                     </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Species</label>
                        <input type="text" class="form-control" id="" name="species" placeholder="Enter Species..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Permit No.</label>
                        <input type="text" class="form-control" id="" name="permit_no" placeholder="Enter Permit No..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Volume to be Transport</label>
                        <input type="text" class="form-control" id="" name="volume_to_transport" placeholder="Enter Volume to be Transport..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">No of Finish Product</label>
                        <input type="text" class="form-control" id="" name="no_finish_product" placeholder="Enter No of Finish Product..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">No of Finish Lumber/Timber</label>
                        <input type="text" class="form-control" id="" name="no_finish_lumber" placeholder="Enter No of Finish Lumber/Timber..">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">No of Finish Product</label>
                        <input type="text" class="form-control" id="" name="no_finish_product" placeholder="Enter No of Finish Product..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Cert and Oath</label>
                        <input type="date" class="form-control" id="" name="cert_and_oath" placeholder="Enter Cert and Oath..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Inspection</label>
                        <input type="date" class="form-control" id="" name="inspection" placeholder="Enter Inspection..">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Remarks</label>
                        <input type="date" class="form-control" id="" name="remarks" placeholder="Enter Remarks..">
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
