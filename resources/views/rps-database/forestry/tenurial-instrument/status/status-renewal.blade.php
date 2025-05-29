@include('rps-database.contents.header')

<style>
    .address-container {
        width: 100%;
        max-width: 100%;
        background: #f8f9fa;
        padding: 12px 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .address-text {
        font-weight: bold;
        flex-grow: 1;
        text-align: left;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .icon-folder {
        font-size: 1.5rem;
        margin-right: 10px;
    }

    .hover-shadow:hover {
        background-color: #f0f4f8;
        transition: background-color 0.2s ease-in-out;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

</style>

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <a href="{{ route('tenur.client', ['title' => $title,'add' => $add->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
                    <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
                </a>
                <h1 class="h4 mb-0 text-gray-800"><b>{{ $add->address }}'s Status:Renewal</b></h1>
            </div>

        </div>

        <div>
        </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-warning">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        {{-- <a href="#" class="btn btn-sm btn-primary shadow-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addClientModal">
            <i class="fas fa-user-plus fa-sm text-white-50"></i> Add Client
        </a> --}}
        <a href="{{ route('pdf.status.renewal',['add' => $add->address , 'type' => $title ]) }}" class="btn btn-sm btn-danger shadow-sm ms-auto" target="_blank">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Pdf Report
        </a>

        <a href="{{ route('excel-status.tenurial', ['address' => $add->address, 'status' => 'renewal', 'type' => $title]) }}" class="btn btn-sm btn-success shadow-sm ms-auto">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Excel Report
        </a>





      <hr>


              <!-- Search Input -->
<div style="margin-bottom: 1rem;">
    <input
        type="text"
        id="searchInput"
        placeholder="Search clients..."
        style="
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        "
    >
</div>

<!-- Client List -->
<div id="clientList" style="display: flex; flex-direction: column; gap: 0.5rem;">
    @foreach ($client as $item)
    <a
        href="{{ route('ti.renewal', ['title' => $title, $item->id]) }}"
        class="client-item"
        style="
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: #222;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        "
        onmouseover="this.style.backgroundColor='#f0f0f0';"
        onmouseout="this.style.backgroundColor='';"
    >
        <i class="fa-regular fa-circle-user" style="font-size: 1.2rem; color: #0d6efd;"></i>
        <span>{{ $item->name }}</span>
    </a>
    @endforeach
</div>

<p id="noClientMessage" style="margin-top: 1rem; color: #888; display: {{ $client->isEmpty() ? 'block' : 'none' }};">
    No client found.
</p>

<!-- Search Filter Script -->
<script>
    document.getElementById('searchInput').addEventListener('input', function () {
        const query = this.value.toLowerCase();
        const clients = document.querySelectorAll('#clientList .client-item');
        let visibleCount = 0;

        clients.forEach(function (client) {
            const name = client.textContent.toLowerCase();
            const match = name.includes(query);
            client.style.display = match ? 'flex' : 'none';
            if (match) visibleCount++;
        });

        document.getElementById('noClientMessage').style.display = visibleCount === 0 ? 'block' : 'none';
    });
</script>




    </div>

</div>

@include('rps-database.contents.footer')


<!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClientModalLabel">Add New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('client.chainsaw',[ 'address'=> $add->address]) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="clientName" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="clientName" name="name" placeholder="Enter client name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Client</button>
                </div>
            </form>
        </div>
    </div>
</div>

