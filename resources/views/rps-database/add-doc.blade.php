@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <!-- Scrollable Content -->
    <div class="flex-grow-1 overflow-auto custom-scroll">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Documents</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Page Heading -->
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="card shadow-sm mt-4">
            <div class="card-header text-white" style="background: rgb(63, 158, 63);">
                <h5 class="mb-0" style="color:black">Document</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('store.doc') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Tracking Number</label>
                        <input type="text" name="tracking_num" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <select name="type" id="type" class="form-control" onchange="toggleTenurType()" required>
                            <option value="">Choose Document Type</option>
                            <option value="Tenurial Instrument" {{ old('type') == 'Tenurial Instrument' ? 'selected' : '' }}>Tenurial Instrument</option>
                            <option value="Foreshore" {{ old('type') == 'Foreshore' ? 'selected' : '' }}>Foreshore</option>
                            <option value="API / PPI" {{ old('type') == 'API / PPI' ? 'selected' : '' }}>API / PPI</option>
                        </select>
                    </div>

                    <div class="form-group" id="tenur_type_container" style="display: none;">
                        <label>Tenurial Instrument Type</label>
                        <select name="tenur_type_id" id="tenur_type_id" class="form-control">
                            <option value="">Choose Type</option>
                            @foreach($tenur as $tenur)
                                <option value="{{ $tenur->id }}" {{ old('tenur_type_id') == $tenur->id ? 'selected' : '' }}>
                                    {{ $tenur->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <textarea name="remarks" class="form-control">{{ old('remarks') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Document</button>
                </form>

                <script>
                    function toggleTenurType() {
                        const typeSelect = document.getElementById('type');
                        const tenurContainer = document.getElementById('tenur_type_container');
                        tenurContainer.style.display = typeSelect.value === 'Tenurial Instrument' ? 'block' : 'none';
                    }
                    window.onload = toggleTenurType;
                </script>


            </div>
        </div>




    </div>

</div>

@include('rps-database.contents.footer')
