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
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Tracking Number</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Document</th>
                            <th>Type</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($tenurial as $doc)
                            <tr>
                                <td>{{ $doc['id'] }}</td>
                                <td>{{ $doc['tracking_num'] }}</td>
                                <td>{{ $doc['subject'] }}</td>
                                <td>{{ $doc['date'] }}</td>
                                <td>
                                    @if ($doc['file'])
                                        <a href="{{ url('file/' . $doc['file']) }}" target="_blank">
                                            {{ $doc['file'] }}
                                        </a>
                                    @else
                                        <span class="text-muted">No Document</span>
                                    @endif
                                </td>
                                <td>{{ $doc['type'] }}</td>
                                <td>{{ $doc['remarks'] ?: 'No Remarks' }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">View</a>
                                    <a href="" class="btn btn-danger">Archive</a>
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

        <h4 class="mt-4 mb-3">GSUP</h4>
        <div class="card-body">
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Tracking Number</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Document</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($gsup as $doc)
                            <tr>
                                <td>{{ $doc['id'] }}</td>
                                <td>{{ $doc['tracking_num'] }}</td>
                                <td>{{ $doc['subject'] }}</td>
                                <td>{{ $doc['date'] }}</td>
                                <td>
                                    @if ($doc['file'])
                                        <a href="{{ url('file/' . $doc['file']) }}" target="_blank">
                                            {{ $doc['file'] }}
                                        </a>
                                    @else
                                        <span class="text-muted">No Document</span>
                                    @endif
                                </td>
                                <td>{{ $doc['remarks'] ?: 'No Remarks' }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">View</a>
                                    <a href="" class="btn btn-danger">Archive</a>
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
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Application No.</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Document</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($permitList as $doc)
                            <tr>
                                <td>{{ $doc['id'] }}</td>
                                <td>{{ $doc['tracking_num'] }}</td>
                                <td>{{ $doc['name'] }}</td>
                                <td>{{ $doc['subject'] }}</td>
                                <td>{{ $doc['date'] }}</td>
                                <td>
                                    @if ($doc['file'])
                                        <a href="{{ url('file/' . $doc['file']) }}" target="_blank">
                                            {{ $doc['file'] }}
                                        </a>
                                    @else
                                        <span class="text-muted">No Document</span>
                                    @endif
                                </td>
                                <td>{{ $doc['remarks'] ?: 'No Remarks' }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">View</a>
                                    <a href="" class="btn btn-danger">Archive</a>
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
