@foreach($grouped as $type => $docs)
    <h3>{{ strtoupper($type) }}</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name Lessee</th>
                <th>Address</th>
                <th>Issue Date</th>
                <th>Expired Date</th>
                <th>Tenurial No.</th>
                <th>Total Area</th>
                <th>Status</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docs as $doc)
                <tr>
                    <td>{{ $doc->id }}</td>
                    <td>{{ $doc->name_lessee }}</td>
                    <td>{{ $doc->address }}</td>
                    <td>{{ $doc->issue_date }}</td>
                    <td>{{ $doc->expired_date }}</td>
                    <td>{{ $doc->tenur_no }}</td>
                    <td>{{ $doc->total_area }}</td>
                    <td>{{ $doc->status }}</td>
                    <td>{{ $doc->remarks ?? 'No Remarks' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
@endforeach
