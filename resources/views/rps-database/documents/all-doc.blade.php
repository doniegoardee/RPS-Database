@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto">
        <h1 class="h3 mb-4 text-gray-800">Manage Documents</h1>

        <div class="input-group mb-3">
            {{-- <input type="search" class="form-control" placeholder="Search...">
            <a href="#" class="btn btn-primary">Search</a> --}}
        </div>



        <h4 class="mb-3">Tenurial Instruments</h4>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('tenurial.all') }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Report
                </a>
            </div>
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto; border:solid black:1px">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name Lessee</th>
                            <th>Address</th>
                            {{-- <th>Issue Date</th>
                            <th>Expired Date</th>
                            <th>Tenurial Number</th>
                            <th>Total Area</th> --}}
                            <th>Tenurial Type</th>
                            <th>Document</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($tenurial as $doc)
                            <tr>
                                <td>{{ $doc['id'] }}</td>
                                <td>{{ $doc['name_lessee'] }}</td>
                                <td>{{ $doc['address'] }}</td>
                                {{-- <td>{{ $doc['issue_date'] }}</td>
                                <td>{{ $doc['expired_date'] }}</td>
                                <td>{{ $doc['tenur_no'] }}</td>
                                <td>{{ $doc['total_area'] }}</td> --}}
                                <td>{{ $doc['tenur_type'] }}</td>
                                <td>
                                    @if ($doc['document'])
                                        <a href="{{ url('file/' . $doc['document']) }}" target="_blank">
                                            {{ $doc['document'] }}
                                        </a>
                                    @else
                                        <span class="text-muted">No Document yet uploaded</span>
                                    @endif
                                </td>
                                <td>{{ $doc['status'] }}</td>
                                <td>{{ $doc['remarks'] ?: 'No Remarks' }}</td>
                                <td>
                                    <a href="{{ route('view.tenurial',$doc['id']) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fa-solid fa-box-archive"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted">No records found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>


        <h4 class="mt-4 mb-3">Permit List</h4>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('permit.all') }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
                    <i class="fa-solid fa-chart-simple me-1"></i> Generate Report
                </a>
            </div>
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Address</th>
                            {{-- <th>Brand</th>
                            <th>Date Registered/Renewal</th>
                            <th>Date Expiry</th>
                            <th>Control Number</th>
                            <th>Date Acquired</th>
                            <th>Horse Power</th>
                            <th>Length Guidebar</th>
                            <th>DENR Sticker Number</th>
                            <th>Purpose</th> --}}
                            <th>Document</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($permitList as $doc)
                            <tr>
                                <td>{{ $doc['id'] }}</td>
                                <td>{{ strtoupper($doc['permit_type']) }}</td>
                                <td>{{ $doc['name'] }}</td>
                                <td>{{ $doc['address'] }}</td>
                                {{-- <td>{{ $doc['brand'] }}</td>
                                <td>{{ $doc['date_registered'] }}</td>
                                <td>{{ $doc['date_expiry'] }}</td>
                                <td>{{ $doc['control_no'] }}</td>
                                <td>{{ $doc['date_acquired'] }}</td>
                                <td>{{ $doc['horse_power'] }}</td>
                                <td>{{ $doc['length_guidebar'] }}</td>
                                <td>{{ $doc['sticker'] }}</td>
                                <td>{{ $doc['purpose'] }}</td> --}}
                                <td>
                                    @if ($doc['document'])
                                        <a href="{{ url('file/' . $doc['document']) }}" target="_blank">
                                            {{ $doc['document'] }}
                                        </a>
                                    @else
                                        <span class="text-muted">No Document</span>
                                    @endif
                                </td>
                                <td>{{ $doc['remarks'] ?: 'No Remarks' }}</td>
                                <td>
                                    <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fa-solid fa-box-archive"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted">No records found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@include('rps-database.contents.footer')
