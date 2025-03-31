@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <!-- Back Button Positioned Properly -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center">
            <a href="{{ route('tenur.doc') }}" class="btn btn-sm btn-primary shadow-sm me-2">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">{{ $tenur->title }}</h1>
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
        <a href="{{ route('add.tenurial', ['title' => $tenur->title]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-file-circle-plus fa-sm text-white-50"></i> Add Document
        </a>
    </div>

    <div id="searchResults">
        @include('rps-database.forestry.tenurial-instrument.tenurial-doc.search-table', ['documents' => $type])
    </div>

        {{-- <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Tracking Number</th>
                            <th>Subject</th>
                            <th>File Date</th>
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
                                    <a href="{{ url('file/' . $for->file) }}" target="_blank">
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
        </div> --}}

    </div>

</div>

@include('rps-database.contents.footer')


<script>
    $(document).ready(function() {
        $('#searchBtn').on('click', function() {
            let query = $('#searchInput').val();

            $.ajax({
                url: "{{ route('tenurial.search') }}",
                type: "GET",
                data: { search: query },
                success: function(response) {
                    $('#searchResults').html(response);
                }
            });
        });

        $('#clearSearchBtn').on('click', function() {
            $('#searchInput').val('');
            $.ajax({
                url: "{{ route('tenurial.search') }}",
                type: "GET",
                data: { search: '' },
                success: function(response) {
                    $('#searchResults').html(response);
                }
            });
        });
    });
</script>
