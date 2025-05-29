@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('all.doc') }}" class="btn btn-primary btn-sm shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm me-1"></i> Back
            </a>
            <h1 class="h4 mb-0 text-primary">View Information</h1>
        </div>

        <div class="input-group mb-3">
            {{-- <a href="{{ route('tenurial.all') }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
                <i class="fa-solid fa-chart-simple me-1"></i> Generate Report
            </a> --}}
        </div>


        <div class="container my-4">
            <div class="card shadow-sm">

<div class="container">
    <h3 class="mb-4 text-capitalize">{{ str_replace('-', ' ', $type) }} Document Details</h3>
    <div class="card">
        <div class="card-body">
@php
    // List of fields to exclude
    $excludeFields = [
        'id',
        'user_id',
        'client_address',
        'created_at',
        'updated_at',
        'client_id',
        'permit_type',
        'lands_type',
        'tenur_type',
        'tenur_type_id',
        'cutting_parent_id',
        'dealer_parent_id',
        'supplier_parent_id',
        'wildlife_parent_id',
        'tfpl_parent_id',
        'chainsaw_parent_id',

    ];
@endphp

@foreach ($record->getAttributes() as $field => $value)
    @if (!in_array($field, $excludeFields))
        <p><strong>{{ ucwords(str_replace('_', ' ', $field)) }}:</strong> {{ $value ?: 'N/A' }}</p>
    @endif
@endforeach

            @if (!empty($record->document))
                <p><strong>Document File:</strong>
                    <a href="{{ asset('storage/' . $record->document) }}" target="_blank">View Document</a>
                </p>
            @endif

        </div>
    </div>
</div>
            </div>
        </div>




    </div>
</div>

@include('rps-database.contents.footer')
