@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $tenur->title }}</h1>
        </div>

        <div class="input-group mb-4">
            <input type="search" class="form-control" placeholder="Search...">
            <a href="#" class="btn btn-primary">Search</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Tracking Number</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Document</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @forelse ($type as $for)
                            <tr>
                                <td>{{ $for->id }}</td>
                                <td>{{ $for->tracking_num }}</td>
                                <td>{{ $for->subject }}</td>
                                <td>{{ $for->date }}</td>
                                <td>
                                    <a href="{{ url('rpsdocs/' . $for->file) }}" target="_blank">
                                        {{ $for->file }}
                                    </a>
                                </td>
                                <td>
                                    {{ empty($for->remarks) ? 'No Remarks' : $for->remarks }}
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">
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
