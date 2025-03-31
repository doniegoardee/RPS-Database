    @include('rps-database.contents.header')

    <div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

        <!-- Scrollable Content -->
        <div class="flex-grow-1 overflow-auto custom-scroll">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add Document</h1>
                    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
            </div>

            <a href="{{ url()->previous() }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <!-- Page Heading -->


                <div class="card shadow-sm mt-4">
                    <div class="card-header text-white" style="background: rgb(63, 158, 63);">
                        <h5 class="mb-0" style="color:rgb(255, 255, 255)">Document</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('gsup.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <label for="tracking_num">Tracking Number:</label>
                            <input class="form-control" type="text" name="tracking_num" id="tracking_num" placeholder="TN xxxx xxxxx"><br>

                            <label for="subject">Subject:</label>
                            <input class="form-control" type="text" name="subject" id="subject" placeholder="Enter subject"><br>

                            <label for="file_year">File Date:</label>
                            <input class="form-control" type="date" name="file_year" id="file_year"><br>

                            <label for="document">Document (optional):</label>
                            <input class="form-control" type="file" name="document" id="document"><br>

                            <label for="remarks">Remarks:</label>
                            <textarea name="remarks" class="form-control" cols="30" rows="10" placeholder="Enter remarks"></textarea>
                            <br>

                            <input type="submit" class="btn btn-success" value="Add Document">
                        </form>

            </div>


    </div>

    </div>

    @include('rps-database.contents.footer')

