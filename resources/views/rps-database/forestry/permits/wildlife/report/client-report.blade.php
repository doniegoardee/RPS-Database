<style>
    * {
        font-family: sans-serif;
        font-size: 8px;
    }

    .header-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        position: relative;
    }

    .header-container .image1 {
        margin-right: 20px;
        width: 80px;
        height: 80px;
        position: relative;
        top: 3.1rem;
        left: 13rem;
    }

    .header-container .image2 {
        margin-right: 20px;
        width: 110px;
        height: 80px;
        position: relative;
        left: 45rem;
        bottom: 5rem;
    }

    .header-container h1,
    .header-container h2 {
        margin: 0;
        text-align: center;
        font-size: 14px;
        line-height: 1.1;
    }

    .header-container h1 {
        font-size: 16px;
        font-weight: bold;
    }

    .header-container h2 {
        font-size: 12px;
        font-weight: normal;
        color: grey;
    }

    hr {
        height: 2px;
        background-color: red;
        border: none;
        margin: 10px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
        table-layout: fixed;
    }

    th, td {
        border: 1px solid #000;
        padding: 2px 4px;
        word-wrap: break-word;
        font-size: 7px;
    }

    th {
        background-color: #ddd;
        font-weight: bold;
        font-size: 8px;
    }

    .address {
        font-size: 7px;
    }
</style>

<div class="header-container">
    <img src="images/penro_cag.png" alt="PENRO Logo" class="image1">
    <div>
        <h1>Department of Environment and Natural Resources</h1>
        <h2>Provincial Environment and Natural Resources Office</h2>
        <h2>Province of Cagayan</h2>
    </div>
    <img src="images/bagong_pilipinas.png" alt="Bagong Pilipinas Logo" class="image2">
</div>

<hr>

@forelse($grouped as $type => $docs)
    <h3>{{ strtoupper('wildlife') }}</h3>
    <table>
        <thead>
            <tr>
                <th style="width: 10%;">Name</th>
                <th style="width: 15%;">Address</th>
                <th style="width: 8%;">Permit No.</th>
                <th style="width: 10%;">Date Issuance</th>
                <th style="width: 10%;">Date Expiry</th>
                <th style="width: 10%;">Fee</th>
                <th style="width: 8%;">Species Name</th>
                <th style="width: 10%;">Description</th>
                <th style="width: 7%;">Quantity</th>
                <th style="width: 7%;">Unit Measure</th>
                <th style="width: 7%;">Origin</th>
                <th style="width: 7%;">Destination</th>
                <th style="width: 7%;">Purpose</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docs as $doc)
                <tr>
                    <td>{{ $doc->name }}</td>
                    <td>{{ $doc->address }}</td>
                    <td>{{ $doc->permit_no }}</td>
                    <td>
                        @if ($doc->date_issuance)
                            {{ \Carbon\Carbon::parse($doc->date_issuance)->format('F j, Y') }}
                        @endif
                    </td>
                    <td>
                        @if ($doc->date_expiry)
                            {{ \Carbon\Carbon::parse($doc->date_expiry)->format('F j, Y') }}
                        @endif
                    </td>
                    <td>{{ $doc->fee }}</td>
                    <td>{{ $doc->species_name }}</td>
                    <td>{{ $doc->description }}</td>
                    <td>{{ $doc->quantity }}</td>
                    <td>{{ $doc->unit_measure }}</td>
                    <td>{{ $doc->origin }}</td>
                    <td>{{ $doc->destination }}</td>
                    <td>{{ $doc->purpose }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@empty
    <p>No documents available.</p>
@endforelse
