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
                @forelse ($documents as $doc)
                    <tr>
                        <td>{{ $doc->id }}</td>
                        <td>{{ $doc->tracking_num }}</td>
                        <td>{{ $doc->subject }}</td>
                        <td>{{ $doc->date }}</td>
                        <td>
                            <a href="{{ url('file/' . $doc->file) }}" target="_blank">
                                {{ $doc->file }}
                            </a>
                        </td>
                        <td>{{ empty($doc->remarks) ? 'No Remarks' : $doc->remarks }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-danger">
                            No matching documents found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
