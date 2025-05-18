<style>
    * {
        font-family: sans-serif;
        font-size: 8px; /* Smaller global font size */
    }

    .header-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        position: relative;
    }

    .header-container .image1 {
        width: 60px;
        height: 60px;
        margin-right: 20px;
    }

    .header-container .image2 {
        width: 80px;
        height: 60px;
        position: absolute;
        right: 0;
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
        font-size: 7px; /* Further reduce address size */
    }
</style>

<div class="header-container">
    <img src="images/penro_cag.png" alt="PENRO Logo" class="image1">
    <div>
        <h1>Department of Environment and Natural Resources</h1>
        <h2>Provincial Environment and Natural Resources Office</h2>
        <h2>Province of Cagayan</h2>
    </div>
    <img src="images/bagong_pilipinas.jpg" alt="Bagong Pilipinas Logo" class="image2">
</div>

<hr>

@foreach($grouped as $type => $docs)
    <h3>{{ strtoupper($type) }}</h3>
    <table>
        <thead>
            <tr>
                <th style="width: 60px;">Type</th>
                <th style="width: 100px;">Name</th>
                <th style="width: 120px;">Address</th>
                <th style="width: 80px;">Brand</th>
                <th style="width: 100px;">Date Registered / Renewal</th>
                <th style="width: 100px;">Date Expiry</th>
                <th style="width: 80px;">Control Number</th>
                <th style="width: 80px;">Date Acquired</th>
                <th style="width: 60px;">Horse Power</th>
                <th style="width: 80px;">Length Guidebar</th>
                <th style="width: 100px;">DENR Sticker Number</th>
                <th style="width: 120px;">Remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docs as $doc)
                <tr>
                    <td>{{ strtoupper($doc['permit_type']) }}</td>
                    <td>{{ $doc['name'] }}</td>
                    <td class="address">{{ $doc['address'] }}</td>
                    <td>{{ $doc['brand'] }}</td>
                    <td>{{ date('m/d/Y', strtotime($doc['date_registered'])) }}</td>
                    <td>{{ date('m/d/Y', strtotime($doc['date_expiry'])) }}</td>
                    <td>{{ $doc['control_no'] }}</td>
                    <td>{{ date('m/d/Y', strtotime($doc['date_acquired'])) }}</td>
                    <td>{{ $doc['horse_power'] }}</td>
                    <td>{{ $doc['length_guidebar'] }}</td>
                    <td>{{ $doc['sticker'] }}</td>
                    <td>{{ $doc['remarks'] ?? 'No Remarks' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach
