<style>
    * {
        font-family: sans-serif;
    }

    .header-container {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .header-container .image1 {
        margin-right: 20px;
        width: 80px;
        height: 80px;
    }

    .header-container .image2 {
        margin-right: 20px;
        width: 110px;
        height: 80px;
        position: relative;
        left: 51rem;
    }

    .header-container h1,
    .header-container h2 {
        margin: 0;
        line-height: 1.2;
        text-align: center;
        bottom: 80px;
        position: relative;
    }

    .header-container h1 {
        font-size: 1.8em;
        font-weight: bold;
    }

    .header-container h2 {
        font-size: 1.4em;
        font-weight: normal;
        color: grey;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #ffffff;
        font-weight: bold;
    }

    .no-details {
        margin-top: 20px;
        color: #a00;
        font-weight: bold;
        text-align: center;
    }

    hr {
        height: 5px;
        background-color: red;
        border: none;
        margin-bottom: 20px;
    }
</style>

<div class="header-container">
    <img src="images/penro_cag.png" alt="PENRO Logo" class="image1">
    <img src="images/bagong_pilipinas.png" alt="PENRO Logo" class="image2">
    <div>
        <h1>Department of Environment and Natural Resources</h1>
        <h2>Provincial Environment and Natural Resources Office</h2>
        <h2>Province of Cagayan</h2>
    </div>
</div>

<hr>

@foreach($grouped as $type => $docs)
    <h3>{{ strtoupper($type) }}</h3>

    @if($docs->isEmpty())
        <p class="no-details">No Tenurial Instrument Found for {{ strtoupper($type) }}</p>
    @else
        <table>
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
    @endif
@endforeach
