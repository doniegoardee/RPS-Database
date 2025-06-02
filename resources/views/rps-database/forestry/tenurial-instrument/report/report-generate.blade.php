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
    }
</style>

<title>Generate Report</title>

<div class="header-container">
    <img src="images/penro_cag.png" alt="PENRO Logo" class="image1">
    <img src="images/bagong_pilipinas.png" alt="Bagong Pilipinas Logo" class="image2">
    <div>
        <h1>Department of Environment and Natural Resources</h1>
        <h2>Provincial Environment and Natural Resources Office</h2>
        <h2>Province of Cagayan</h2>
    </div>
</div>

<hr style="font-weight: 900; color:red; height:5px; background:red;">

@if ($tenurial->isNotEmpty())
    {{-- Display Name and Address from the first record --}}
    <div>
        <h3><strong>Name:</strong> {{ $tenurial[0]->name_lessee }}</h3>
        <h3><strong>Location:</strong> {{ $tenurial[0]->address }}</h3>
        <br>
    </div>

    @foreach ($tenurial as $index => $item)
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tenur Type</th>
                    <th>{{ $item->tenur_type }} Number</th>
                    <th>Issue Date</th>
                    <th>Expired Date</th>
                    <th>Total Area</th>
                    <th>Status</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->tenur_type }}</td>
                    <td>{{ $item->tenur_no ?? 'N/A' }}</td>
                    <td>{{ $item->issue_date ? \Carbon\Carbon::parse($item->issue_date)->format('m/d/Y') : 'N/A' }}</td>
                    <td>{{ $item->expired_date ? \Carbon\Carbon::parse($item->expired_date)->format('m/d/Y') : 'N/A' }}</td>
                    <td>{{ $item->total_area ?? 'N/A' }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->remarks ?? 'No Remarks' }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
@else
    <div class="no-details">
        <i class="bi bi-exclamation-triangle-fill"></i> No Tenurial Instrument details found.
    </div>
@endif
