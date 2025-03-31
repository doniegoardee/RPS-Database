@include('rps-database.contents.header')

<div class="container-fluid">

    <div class="d-flex align-items-center mb-3">
        <a href="{{ route('permit.doc') }}" class="btn btn-sm btn-primary shadow-sm me-2">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
        </a>
        <h1 class="h3 mb-0 text-gray-800">GSUP</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="input-group mb-4">
        <input type="search" class="form-control" id="search_gsup" placeholder="Search...">
        <button class="btn btn-primary ms-2" id="btn_search">Search</button>
        <button class="btn btn-secondary ms-2" id="btn_clear">Clear</button>
    </div>

    <a href="{{ route('add.gsup') }}" class="btn btn-sm btn-primary mb-3">
        <i class="fas fa-file-circle-plus"></i> Add Document
    </a>

    <div class="table-responsive">
        <table class="table table-bordered" id="gsupTable">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Tracking Number</th>
                    <th>Subject</th>
                    <th>File Date</th>
                    <th>Document</th>
                    <th>Remarks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="gsup_list" class="text-center">
                @foreach ($gsup as $list)
                    <tr>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->tracking_num }}</td>
                        <td>{{ $list->subject }}</td>
                        <td>{{ $list->file_year }}</td>
                        <td>
                            @if ($list->document)
                                <a href="{{ url($list->document) }}" target="_blank">{{ $list->document }}</a>
                            @else
                                No document uploaded
                            @endif
                        </td>
                        <td>{{ $list->remarks ?? 'No Remarks' }}</td>
                        <td>
                            <a class="btn btn-primary" href="">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('rps-database.contents.footer')


<script>

$(document).ready(function () {
    $('#btn_search').on('click', function () {
        let query = $('#search_gsup').val();
        $.ajax({
            url: "{{ route('gsup.search') }}",
            type: "GET",
            data: { search: query },
            success: function (data) {
                $('#gsup_list').html(data);
            }
        });
    });

    $('#btn_clear').on('click', function () {
        $('#search_gsup').val('');
        $.ajax({
            url: "{{ route('gsup.search') }}",
            type: "GET",
            data: { search: '' },
            success: function (data) {
                $('#gsup_list').html(data);
            }
        });
    });
});

</script>
