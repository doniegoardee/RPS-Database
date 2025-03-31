@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto custom-scroll">

        <a href="{{ url()->previous() }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
        </a>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Document</h1>
        </div>
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
                <h5 class="mb-0">Document</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('store.list') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="permit_id" value="{{ $permit->id }}">

                    <label>Application No.:</label>
                    <input class="form-control" type="text" name="app_no" placeholder="Enter Application No."><br>

                    <label>Name:</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter name"><br>

                    <label>Subject:</label>
                    <input class="form-control" type="text" name="subject" placeholder="Enter subject"><br>

                    <label>File Date:</label>
                    <input class="form-control" type="date" name="date"><br>

                    <label>Document (optional):</label>
                    <input class="form-control" type="file" name="document"><br>

                    <input type="submit" class="btn btn-success" value="Add Document">
                </form>


            </div>
        </div>

    </div>

</div>

@include('rps-database.contents.footer')
