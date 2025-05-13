@foreach($grouped as $type => $docs)
    <h3>{{ strtoupper($type) }}</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="4">
        <thead>
            <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Address</th>
                <th>Brand</th>
                <th>Date Registered/Renewal</th>
                <th>Date Expiry</th>
                <th>Control Number</th>
                <th>Date Acquired</th>
                <th>Horse Power</th>
                <th>Length Guidebar</th>
                <th>DENR Sticker Number </th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docs as $doc)
            {{-- @php use Carbon\Carbon; @endphp --}}

                <tr>
                    <td>{{ strtoupper($doc['permit_type']) }}</td>
                    <td>{{ $doc['name'] }}</td>
                    <td>{{ $doc['address'] }}</td>
                    <td>{{ $doc['brand'] }}</td>
                    <td>{{ date('m/d/y', strtotime($doc['date_registered'])) }}</td>
                    <td>{{ date('m/d/y', strtotime($doc['date_expiry'])) }}</td>
                    <td>{{ $doc['control_no'] }}</td>
                    <td>{{ date('m/d/y', strtotime($doc['date_acquired'])) }}</td>
                    <td>{{ $doc['horse_power'] }}</td>
                    <td>{{ $doc['length_guidebar'] }}</td>
                    <td>{{ $doc['sticker'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
@endforeach
