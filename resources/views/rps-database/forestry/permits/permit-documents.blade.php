@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $permit->permit_title }}</h1>

        </div>

        <div class="input-group mb-4">
            <input type="search" class="form-control" placeholder="Search...">
            <a href="#" class="btn btn-primary">Search</a>

        </div>

        <a href="{{ route('add.list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-circle-plus fa-sm text-white-50"></i> Add Document</a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Application No.</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Document</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    {{-- <tbody class="text-center">
                        @forelse ($type as $per)
                            <tr>
                                <td>{{ $per->app_no }}</td>
                                <td>{{ $per->name }}</td>
                                <td>{{ $per->subject }}</td>
                                <td>{{ $per->date }}</td>
                                <td>
                                    <a href="{{ url('rpsdocs/' . $per->document) }}" target="_blank">
                                        {{ $per->document }}
                                    </a>
                                </td>
                                <td>
                                    {{ empty($per->remarks) ? 'No Remarks' : $per->remarks }}
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">
                                    No documents uploaded yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody> --}}
                </table>
            </div>
        </div>

    </div>

</div>

@include('rps-database.contents.footer')
