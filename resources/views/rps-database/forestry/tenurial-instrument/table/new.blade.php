@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center">
            <a href="{{ route('tenurial.new',['title'=>$title, 'add'=>$client->address]) }}" class="btn btn-sm btn-primary shadow-sm me-2">
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

    @if(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
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


        <a href="{{ route('ti.new.report', ['id'=>$client->id]) }}" class="btn btn-danger btn-sm shadow-sm" target="_blank">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Pdf Report
        </a>

        <a href="{{ route('excel-data.tenurial', ['id' => $client->id, 'status' => 'new']) }}" class="btn btn-success btn-sm shadow-sm">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Excel Report
        </a>


    </div>



        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>NO</th>
                            <th>Name Lessee</th>
                            <th>Address</th>
                            <th>Issue Date</th>
                            <th>Expired Date</th>
                            <th>{{ $client->type }} Number</th>
                            <th>Total Area</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Document</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @forelse ($data as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->name_lessee }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    @if ($item->issue_date)
                                        {{ \Carbon\Carbon::parse($item->issue_date)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if ($item->expired_date)
                                        {{ \Carbon\Carbon::parse($item->expired_date)->format('F j, Y') }}
                                    @else
                                    @endif
                                </td>
                                <td>{{ $item->tenur_no }}</td>
                                <td>{{ $item->total_area }}</td>
                                <td>{{ $item->status }}</td>
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
                                        <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#EditModal{{ $item->id }}"><i class="fas fa-edit"></i></button>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('tenurial.delete', $item->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger delete-btn" data-id="{{ $item->id }}"><i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const deleteButtons = document.querySelectorAll('.delete-btn');

                                            deleteButtons.forEach(button => {
                                                button.addEventListener('click', function () {
                                                    const id = this.getAttribute('data-id');
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#d33',
                                                        cancelButtonColor: '#3085d6',
                                                        confirmButtonText: 'Yes, delete it!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById(`delete-form-${id}`).submit();
                                                        }
                                                    });
                                                });
                                            });
                                        });
                                    </script>
                                </td>

                            </tr>
                            <div class="modal fade" id="EditModal{{ $item->id }}" tabindex="-1" aria-labelledby="EditModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditModal">Edit Information</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="close"></button>
                                        </div>

                                        @php
                                        $issueDate = $item->issue_date ? \Carbon\Carbon::parse($item->issue_date)->format('Y-m-d') : '';
                                        $expiredDate = $item->expired_date ? \Carbon\Carbon::parse($item->expired_date)->format('Y-m-d') : '';
                                       @endphp

                                        <form action="{{ route('tenurial.update', $item->id)}}" method="post" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf

                                            <div class="modal-body">


                                            <div class="mb-3">
                                                <label for="">Name Lessee</label>
                                                <input type="text" name="name_lessee" class="form-control" placeholder="Edit Name" value="{{ old('name_lessee',$item->name_lessee) }}" id="">
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Edit Address" value="{{ old('address',$item->address) }}" id="">
                                            </div>

                                            <div class="mb-3">
                                                <label for="issue_date" class="form-label">Issue Date</label>
                                                <input type="date" class="form-control" id="issue_date" name="issue_date"
                                                    value="{{ old('issue_date', $issueDate) }}"
                                                    placeholder="Enter Issue Date">
                                            </div>

                                            <div class="mb-3">
                                                <label for="expired_date" class="form-label">Expired Date</label>
                                                <input type="date" class="form-control" id="expired_date" name="expired_date"
                                                    value="{{ old('expired_date', $expiredDate) }}"
                                                    placeholder="Enter Expired Date">
                                            </div>

                                            <div class="mb-3">
                                                <label for="">{{ $client->type }} Number</label>
                                                <input type="text" name="tenur_no" class="form-control" placeholder="Edit {{ $client->type }} Number" value="{{ old('tenur_no',$item->tenur_no) }}" id="">
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Total Area</label>
                                                <input type="text" name="total_area" class="form-control" placeholder="Edit Total Area" value="{{ old('total_area',$item->total_area) }}" id="">
                                            </div>

                                            <div class="mb-3">
                                                <label for="status">Status</label>
                                                <select name="status" class="form-control" id="status">
                                                    <option value="NEW" {{ old('status', $item->status) == 'NEW' ? 'selected' : '' }}>New</option>
                                                    <option value="EXISTING" {{ old('status', $item->status) == 'EXISTING' ? 'selected' : '' }}>Existing</option>
                                                    <option value="RENEWAL" {{ old('status', $item->status) == 'RENEWAL' ? 'selected' : '' }}>Renewal</option>
                                                    <option value="EXPIRED" {{ old('status', $item->status) == 'EXPIRED' ? 'selected' : '' }}>Expired</option>
                                                    <option value="CANCELLED" {{ old('status', $item->status) == 'CANCELLED' ? 'selected' : '' }}>Cancelled</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Remarks</label>
                                                <input type="text" name="remarks" class="form-control" placeholder="Edit Remarks" value="{{ old('remarks',$item->remarks) }}" id="">
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Documents</label>
                                                <input type="file" name="document" class="form-control" value="{{ old('document',$item->document) }}" id="">
                                                <i style="color:red; text-decoration:underline">PDF ONLY</i>
                                            </div>



                                        </div>

                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary" value="">Edit Information</button>
                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" >close</button>

                                        </div>

                                        </form>


                                    </div>
                                </div>
                            </div>
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
                    <input class="form-control" name="name_lessee" type="text" value="{{old('name',$client->name)  }}" placeholder="Enter Name Lessee">
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
                    <select class="form-control" name="status" id="">
                        <option value="NEW">New</option>
                        <option value="EXISTING">Existing</option>
                        <option value="RENEWAL">Renewal</option>
                        <option value="EXPIRED">Expired</option>
                        <option value="CANCELLED">Cancelled</option>
                    </select>
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



