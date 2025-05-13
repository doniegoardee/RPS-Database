<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
        </div>
        <div class="card-body">
            @forelse ($tenurial as $item)
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Name Lessee:</strong> {{ $item->name_lessee }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Address:</strong> {{ $item->address }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Issue Date:</strong> {{ $item->issue_date ? \Carbon\Carbon::parse($item->issue_date)->format('m/d/y') : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Expired Date:</strong> {{ $item->expired_date ? \Carbon\Carbon::parse($item->expired_date)->format('m/d/y') : 'N/A' }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Tenurial Number:</strong> {{ $item->tenur_no }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Total Area:</strong> {{ $item->total_area }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Status:</strong> {{ $item->status }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Remarks:</strong> {{ $item->remarks }}</p>
                    </div>
                </div>

                <hr class="mb-4">
            @empty
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i> No Tenurial Instrument details found.
                </div>
            @endforelse
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
