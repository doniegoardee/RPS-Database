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
    <h3>{{ strtoupper($type) }}</h3>

    @foreach ($items as $index => $item)
        <div>
            <table>
                <thead>
                    <tr>
                    <th style="width: 3%;">NO.</th>
                        <th style="width: 10%;">Name Permitee</th>
                        <th style="width: 10%;">Place of Loading</th>
                        <th style="width: 15%;">Destination</th>
                        <th style="width: 8%;">Species</th>
                        <th style="width: 10%;">Volume to be Transport</th>
                        <th style="width: 15%;">No of Finish Product</th>
                        <th style="width: 15%;">No of Finish Lumber/Timber</th>
                        <th style="width: 10%;">Date Transport</th>
                        <th style="width: 10%;">Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name_permitee }}</td>
                        <td>{{ $item->place_of_loading }}</td>
                        <td>{{ $item->destination }}</td>
                        <td>{{ $item->species }}</td>
                        <td>{{ $item->volume_to_transport }}</td>
                        <td>{{ $item->no_finish_product }}</td>
                        <td>{{ $item->no_finish_lumber }}</td>
                        <td>
                            @if ($item->date_transport)
                                {{ \Carbon\Carbon::parse($item->date_transport)->format('F j, Y') }}
                            @else
                            @endif
                        </td>
                        <td>{{ $item->remarks }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
@empty
    <div class="no-details">
        <i class="bi bi-exclamation-triangle-fill"></i> No Lumber Supplier details found.
    </div>
@endforelse
