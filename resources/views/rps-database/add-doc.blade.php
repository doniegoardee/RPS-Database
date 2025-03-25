@include('rps-database.contents.header')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Documents</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <!-- Page Heading -->


    <div class="card shadow-sm mt-4">
        <div class="card-header text-white" style="background: rgb(63, 158, 63);">
            <h5 class="mb-0" style="color:black">Document</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('store.doc') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="tracking_num" class="form-label">Tracking Number:</label>
                    <input type="text" name="tracking_num" class="form-control" placeholder="Enter tracking number" value="{{ old('tracking_num') }}">
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject:</label>
                    <input type="text" name="subject" class="form-control" placeholder="Enter subject" value="{{ old('subject') }}">
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Upload File:</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date:</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label fw-semibold">Type:</label>
                    <select name="type" id="type" class="form-select" aria-label="Select Type" onchange="toggleTenurType()">
                        <option selected>Select Type</option>
                        <option value="Tenurial Instrument" {{ old('type') == 'Tenurial Instrument' ? 'selected' : '' }}>
                            Tenurial Instrument (TI)
                        </option>
                        <option value="Foreshore" {{ old('type') == 'Foreshore' ? 'selected' : '' }}>
                            Foreshore
                        </option>
                        <option value="API / PPI" {{ old('type') == 'API / PPI' ? 'selected' : '' }}>
                            API / PPI
                        </option>
                    </select>
                </div>

                <div id="tenur_type_container" class="mb-3" style="display: none;">
                    <label for="tenur_type" class="form-label fw-semibold">Tenurial Type:</label>
                    <select name="tenur_type" class="form-select" aria-label="Select Tenurial Type">
                        <option selected>Select Tenurial Type</option>
                        <option value="Tree Cutting" {{ old('tenur_type') == 'Tree Cutting' ? 'selected' : '' }}>
                            Tree Cutting
                        </option>
                        <option value="SIFMA" {{ old('tenur_type') == 'SIFMA' ? 'selected' : '' }}>
                            SIFMA
                        </option>
                        <option value="GSUP" {{ old('tenur_type') == 'GSUP' ? 'selected' : '' }}>
                            GSUP
                        </option>
                        <option value="Gratious Permit" {{ old('tenur_type') == 'Gratious Permit' ? 'selected' : '' }}>
                            Gratious Permit
                        </option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="remarks" class="form-label">Remarks:</label>
                    <input type="text" name="remarks" class="form-control" placeholder="Enter remarks" value="{{ old('remarks') }}">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn" style="color:black; background: rgb(63, 158, 63);">Create Document</button>
                </div>
            </form>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    toggleTenurType();
                });

                function toggleTenurType() {
                    const typeField = document.getElementById('type');
                    const tenurTypeContainer = document.getElementById('tenur_type_container');
                    tenurTypeContainer.style.display = (typeField.value === 'Tenurial Instrument') ? 'block' : 'none';
                }
            </script>


            <script>
                function toggleTenurType() {
                    const typeSelect = document.getElementById('type');
                    const tenurTypeContainer = document.getElementById('tenur_type_container');

                    if (typeSelect.value === 'Tenurial Instrument') {
                        tenurTypeContainer.style.display = 'block';
                    } else {
                        tenurTypeContainer.style.display = 'none';
                        document.querySelector('[name="tenur_type"]').value = '';
                    }
                }

                document.addEventListener('DOMContentLoaded', toggleTenurType);
            </script>


        </div>
    </div>



</div>

@include('rps-database.contents.footer')
