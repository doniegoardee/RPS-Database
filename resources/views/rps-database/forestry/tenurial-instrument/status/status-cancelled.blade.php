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
        transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .address-container:hover {
        background-color: #f0f4f8;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .no-client-message {
        color: #0d6efd;
        font-style: italic;
        text-align: center;
        margin: 50px 0;
        font-size: 1.25rem;
    }
</style>

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">

        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <a href="{{ route('tenur.client', ['title'=>$title,'add' => $add->address]) }}" class="btn btn-sm btn-primary shadow-sm me-3">
                    <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
                </a>
                <h1 class="h4 mb-0 text-gray-800"><b>{{ $add->address }}'s Status: Cancelled</b></h1>
            </div>
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

        <!-- Search Bar -->
        <div class="input-group mb-4">
            <input type="search" id="searchInput" class="form-control" placeholder="Search clients...">
            <button class="btn btn-primary" id="searchBtn">Search</button>
            <button class="btn btn-secondary ms-2" id="clearBtn">Clear</button>
        </div>
        <a href="{{ route('pdf.status.new',['add' => $add->address , 'type' => $title ]) }}" class="btn btn-sm btn-danger shadow-sm ms-auto" target="_blank">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Pdf Report
        </a>

        <a href="#" class="btn btn-sm btn-success shadow-sm ms-auto">
            <i class="fa-solid fa-chart-simple me-1"></i> Generate Excel Report
        </a>

<hr>


        <!-- Client List -->
        <div class="container-fluid px-0" id="clientList">
            @foreach ($client as $item)
                <a href="{{ route('ti.expired', ['title' => $title, $item->id]) }}"
                   class="d-flex align-items-center gap-3 py-3 px-4 mb-2 bg-light rounded shadow-sm text-decoration-none address-container hover-shadow">
                    <i class="fa-regular fa-circle-user fa-lg text-primary"></i>
                    <span class="fw-medium text-dark">{{ $item->name }}</span>
                </a>
            @endforeach
        </div>

        <p id="noClientMessage" class="no-client-message" style="display: {{ $client->isEmpty() ? 'block' : 'none' }};">
            No client found.
        </p>

    </div>

</div>

@include('rps-database.contents.footer')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("searchInput");
        const searchBtn = document.getElementById("searchBtn");
        const clearBtn = document.getElementById("clearBtn");
        const clientList = document.getElementById("clientList");
        const noClientMessage = document.getElementById("noClientMessage");
        const title = "{{ $title }}";
        const address = "{{ $add->address }}";

        function searchClients(query) {
            fetch(`/clients/search?title=${title}&address=${address}&query=${query}`)
                .then(response => response.json())
                .then(data => {
                    clientList.innerHTML = "";
                    if (data.length > 0) {
                        data.forEach(client => {
                            const clientItem = `
                                <a href="/clients/${client.id}" class="d-flex align-items-center gap-3 py-3 px-4 mb-2 bg-light rounded shadow-sm text-decoration-none address-container hover-shadow">
                                    <i class="fa-regular fa-circle-user fa-lg text-primary"></i>
                                    <span class="fw-medium text-dark">${client.name}</span>
                                </a>
                            `;
                            clientList.insertAdjacentHTML("beforeend", clientItem);
                        });
                        noClientMessage.style.display = "none";
                    } else {
                        noClientMessage.style.display = "block";
                    }
                })
                .catch(error => console.error("Error fetching clients:", error));
        }

        searchBtn.addEventListener("click", () => {
            const query = searchInput.value.trim();
            searchClients(query);
        });

        clearBtn.addEventListener("click", () => {
            searchInput.value = "";
            searchClients("");
        });

        searchInput.addEventListener("keyup", (event) => {
            if (event.key === "Enter") {
                const query = searchInput.value.trim();
                searchClients(query);
            }
        });
    });
</script>
