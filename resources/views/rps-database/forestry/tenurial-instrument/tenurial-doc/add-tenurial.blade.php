@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <!-- Scrollable Content -->
    <div class="flex-grow-1 overflow-auto custom-scroll">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Document for {{ $tenurType->title }}</h1>
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

    <a href="{{ url()->previous() }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
    </a>
            <div class="card shadow-sm mt-4">
                <div class="card-header text-white" style="background: rgb(63, 158, 63);">
                    <h5 class="mb-0" style="color:rgb(255, 255, 255)">Document</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('tenurial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="tenur_type_id" value="{{ $tenurType->id }}">
                        <input type="hidden" name="tenur_type" value="{{ $tenurType->title }}">

                        <div class="mb-3">
                            <label for="tracking_num" class="form-label">Tracking Number</label>
                            <input type="text" name="tracking_num" class="form-control" required placeholder="TN xxxx xxxxx">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" required placeholder="Enter Subject">
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Upload File</label>
                            <input type="file" name="file" class="form-control">
                        </div>

                        <div class="mb-3">
                            {{-- <label for="type" class="form-label">Type</label> --}}
                         <input type="hidden" name="tenur_type" value="{{ $tenurType->title }}">
                        </div>

                        <div class="mb-3">
                            <label for="remarks" class="form-label">Remarks</label>
                            <textarea name="remarks" class="form-control" placeholder="Enter Remarks(Optional)"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Add Document</button>
                    </form>

        </div>


</div>

</div>

@include('rps-database.contents.footer')

