<style>

*{

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
        text-align:center;
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
    <img src="images/bagong_pilipinas.png" alt="PENRO Logo" class="image2">
    <div>
        <h1>Department of Environment and Natural Resources</h1>
        <h2>Provincial Environment and Natural Resources Office</h2>
        <h2>Province of Cagayan</h2>
    </div>
</div>



<hr style="font-weight: 900; color:red; height:5px; background:red;">

@forelse ($grouped as $type => $items)
    @foreach ($items as $index => $item)
        <div>
            <h3><strong>Name:</strong> {{ $item->name_permitee }}</h3>
            <h3><strong>Location:</strong> {{ $item->location }}</h3>
            <br>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>No. of Trees</th>
                        <th>Species</th>
                        <th>Approved Volume</th>
                        <th>Date Issuance</th>
                        <th>Expiration Date</th>
                        <th>Seed Requirements</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->no_trees }}</td>
                        <td>{{ $item->species }}</td>
                        <td>{{ $item->approved_volume }}</td>
                        <td>
                            @if ($item->date_issuance)
                                {{ \Carbon\Carbon::parse($item->date_issuance)->format('F j, Y') }}
                            @else
                            @endif
                        </td>
                        <td>
                            @if ($item->expiration_date)
                                {{ \Carbon\Carbon::parse($item->expiration_date)->format('F j, Y') }}
                            @else
                            @endif
                        </td>
                        <td>{{ $item->seed_requirements }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
@empty
    <div class="no-details">
        <i class="bi bi-exclamation-triangle-fill"></i> No Foreshore details found.
    </div>
@endforelse
