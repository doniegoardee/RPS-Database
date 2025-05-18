@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Foreshore</h1>
                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Page Heading -->

        <div class="input-group">
            <input type="search" class="form-control" name="" id="" placeholder="Search...">
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
                        @foreach ($for as $for)

                        <tr>
                            <td>{{ $for->id }}</td>
                            <td>{{ $for->tracking_num }}</td>
                            <td>{{ $for->subject }}</td>
                            <td>{{ $for->date }}</td>

                            <td>
                                <a href="{{ url('file/' . $for->file) }}" target="_blank"   class="">
                                    {{$for->file  }}
                                    </a>
                            </td>
                            <td>
                                {{ empty($for->remarks) ? 'No Remarks' : $for->remarks }}
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>





</div>

</div>

@include('rps-database.contents.footer')
