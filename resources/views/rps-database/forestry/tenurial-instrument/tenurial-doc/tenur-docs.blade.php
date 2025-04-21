@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <!-- Back Button Positioned Properly -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center">
            <a href="{{ route('tenur.doc') }}" class="btn btn-sm btn-primary shadow-sm me-2">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">{{ $client->name }} Information</h1>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="input-group mb-4">
        <input type="search" id="searchInput" class="form-control" placeholder="Search...">
        <button id="searchBtn" class="btn btn-primary">Search</button>
        <button id="clearSearchBtn" class="btn btn-secondary ms-2">Clear</button>
    </div>



        <div>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#AddDataClient">
            <i class="fas fa-file-circle-plus fa-sm text-white-50"></i> Add Document
        </a>
    </div>



        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th></th>
                            <th>Name Lessee</th>
                            <th>Address</th>
                            <th>Issue Date</th>
                            <th>Expired Date</th>
                            <th>Document</th>
                            <th>Tenurial Number</th>
                            <th>Total Area</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @forelse ($data as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->name_lessee }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    @if($item->document)
                                        <a href="{{ asset('file/' . $item->document) }}" target="_blank">
                                            {{ $item->document }}
                                        </a>
                                    @else
                                        <span class="text-muted">No document</span>
                                    @endif
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger d-inline-block me-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>


                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center text-danger">
                                    No documents uploaded yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

@include('rps-database.contents.footer')



<div class="modal fade" id="AddDataClient" aria-labelledby="AddDataClient" tabindex="-1" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddDataClient">Add New Data</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <form action="{{ route('add.client.data',$client->id) }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">


                   <div class="mb-3">
                    <label for="">Name Lessee</label>
                    <input class="form-control" name="name_lessee" type="text" placeholder="Enter Name Lessee">
                   </div>

                   <div class="mb-3">
                    <label for="">Address</label>
                    <input class="form-control" name="address" type="text" placeholder="Enter Address">
                   </div>

                   <div class="mb-3">
                    <label for="">Issue Date</label>
                    <input class="form-control" name="issue_date" type="date" placeholder="Enter Issue Date">
                   </div>

                   <div class="mb-3">
                    <label for="">Expired Date</label>
                    <input class="form-control" name="expired_date" type="date" placeholder="Enter Expired Date">
                   </div>

                   <div class="mb-3">
                    <label for="">Document</label>
                    <input class="form-control" name="document" type="file">
                   </div>

                   <div class="mb-3">
                    <label for="">Tenurial Number</label>
                    <input class="form-control" name="tenur_no" type="text" placeholder="Enter Tenurial Number">
                   </div>

                   <div class="mb-3">
                    <label for="">Total Area</label>
                    <input class="form-control" name="total_erea" type="text" placeholder="Enter Total Area">
                   </div>

                   <div class="mb-3">
                    <label for="">Status</label>
                    <input class="form-control" name="status" type="text" placeholder="Enter Status">
                   </div>

                   <div class="mb-3">
                    <label for="">Remarks</label>
                    <input class="form-control" name="remarks" type="text" placeholder="Enter Remarks">
                   </div>

                   <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Information</button>
                   </div>

                </div>

            </form>
        </div>
    </div>
</div>

