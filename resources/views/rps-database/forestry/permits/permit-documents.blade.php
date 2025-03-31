@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('permit.doc') }}" class="btn btn-sm btn-primary shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">{{ $permit->permit_title }}</h1>
        </div>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <div class="input-group mb-4">
            <input type="search" id="searchInput" class="form-control" placeholder="Search...">
            <button class="btn btn-primary" id="searchBtn">Search</button>
            <button class="btn btn-secondary ms-2" id="clearBtn">Clear</button>
        </div>

        <a href="{{ route('add.list', $permit->permit_title) }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-file-circle-plus fa-sm text-white-50"></i> Add Document
        </a>

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
                    <tbody class="text-center" id="tableBody">
                        @forelse ($permitLists as $list)
                            <tr>
                                <td>{{ $list->app_no }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->subject }}</td>
                                <td>{{ $list->date }}</td>
                                <td>
                                    @if (!empty($list->document))
                                        <a href="{{ url('file/' . $list->document) }}" target="_blank">
                                            {{ $list->document }}
                                        </a>
                                    @else
                                        <span class="text-muted">No document uploaded</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-info">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">No documents available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

@include('rps-database.contents.footer')

<script>
$(document).ready(function() {
    let permitTitle = "{{ $permit->permit_title }}";

    $('#searchBtn').click(function() {
        let query = $('#searchInput').val();

        $.ajax({
            url: "{{ route('search.permitList') }}",
            type: "GET",
            data: { query: query, permit_title: permitTitle },
            success: function(data) {
                let tableBody = '';
                if (data.length > 0) {
                    data.forEach(function(list) {
                        tableBody += `<tr>
                            <td>${list.app_no}</td>
                            <td>${list.name}</td>
                            <td>${list.subject}</td>
                            <td>${list.date}</td>
                            <td>
                                ${list.document
                                    ? `<a href="/file/${list.document}" target="_blank">${list.document}</a>`
                                    : '<span class="text-muted">No document uploaded</span>'}
                            </td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>`;
                    });
                } else {
                    tableBody = '<tr><td colspan="6" class="text-center text-danger">No matching results found.</td></tr>';
                }
                $('#tableBody').html(tableBody);
            }
        });
    });

    $('#clearBtn').click(function() {
        $('#searchInput').val('');
        $('#searchBtn').click();
    });
});

</script>
