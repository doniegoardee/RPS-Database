@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto">
        <h1 class="h3 mb-4 text-gray-800">Manage All Documents</h1>

        <div class="input-group mb-3">
            {{-- <input type="search" class="form-control" placeholder="Search...">
            <a href="#" class="btn btn-primary">Search</a> --}}
        </div>


        <hr>




<h4 class="mb-3"></h4>
<div class="card-body">
    <div class="d-flex justify-content-end mb-3">
        {{-- <a href="{{ route('tenurial.all') }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Report
        </a> --}}
    </div>


    <div class="mb-3">
    <input
        type="text"
        id="tableSearchInput"
        placeholder="Search documents..."
        style="
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        "
    >
</div>
    <div class="table-responsive" style="max-height: 400px; overflow-y: auto; border: solid 1px black;">
        <table class="table table-bordered mb-0">
            <thead class="text-center bg-light" style="position: sticky; top: 0; z-index: 1;">
                <tr>
                    <th></th>
                    <th>Type</th>
                    <th>Name / Applicant</th>
                    <th>Address / Location</th>
                    <th>Document</th>
                    <th>Actions</th>
                </tr>
            </thead>
           <tbody id="documentTableBody" class="text-center">
                @forelse ($data as $index => $doc)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $doc->type }}</td>
                        <td>{{ $doc->name }}</td>
                        <td>{{ $doc->location }}</td>
                        <td>
                            @if ($doc->document)
                                <a href="{{ asset('file/' . $doc->document) }}" target="_blank">
                                    {{ basename($doc->document) }}
                                </a>
                            @else
                                <span class="text-muted">No document uploaded</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('documents.view', ['type' => Str::slug($doc->type), 'id' => $doc->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            {{-- <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-box-archive"></i></a> --}}
                        </td>
                    </tr>
                @empty
                    <tr class="no-data-message">
                        <td colspan="7" class="text-center text-muted">No records found</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>

<script>
    document.getElementById('tableSearchInput').addEventListener('input', function () {
        const query = this.value.toLowerCase();
        const rows = document.querySelectorAll('#documentTableBody tr');
        let visibleCount = 0;

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            const match = text.includes(query);
            row.style.display = match ? '' : 'none';
            if (match) visibleCount++;
        });

        // Toggle the 'No records found' message row if needed
        const noDataRow = document.querySelector('.no-data-message');
        if (noDataRow) {
            noDataRow.style.display = visibleCount === 0 ? '' : 'none';
        }
    });
</script>


    </div>
</div>

@include('rps-database.contents.footer')
