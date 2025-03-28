@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <!-- Scrollable Content -->
    <div class="flex-grow-1 overflow-auto custom-scroll">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Document</h1>
                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Page Heading -->


            <div class="card shadow-sm mt-4">
                <div class="card-header text-white" style="background: rgb(63, 158, 63);">
                    <h5 class="mb-0" style="color:rgb(255, 255, 255)">Document</h5>
                </div>
                <div class="card-body">

            <form action="" method="post">

                @csrf

                <label for="">Tracking Number:</label>
                <input class="form-control" type="text" name="" id="" placeholder="Enter Application No."><br>

                <label for="">Subject:</label>
                <input class="form-control" type="text" name="" id="" placeholder="Enter subject"><br>

                <label for="">Date:</label>
                <input class="form-control" type="text" name="" id="" placeholder="Enter name"><br>

                <label for="">Document(optional):</label>
                <input class="form-control" type="file" name="" id=""><br>


                <input type="submit" class="btn btn-success" value="Add Document">
            </form>

        </div>


</div>

</div>

@include('rps-database.contents.footer')

