<?php

namespace App\Models\Forestry\Permits;

use App\Models\Permits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WildLife extends Model
{
       use HasFactory;

     protected $fillable = [
        'name',
        'address',
        'permit_no',
        'date_issuance',
        'date_expiry',
        'fee',
        'species_name',
        'description',
        'quantity',
        'unit_measure',
        'origin',
        'destination',
        'purpose',
        'client_address',
        'permit_type',
        'user_id',
        'wildlife_parent_id',
        'document',
    ];

    public function permit()
    {
        return $this->belongsTo(Permits::class, 'permit_id');
    }

    public function parent()
{
    return $this->belongsTo(WildLifeParent::class, 'wildlife_parent_id');
}

    public function getPermitTitleAttribute()
    {
        return $this->permit->permit_title ?? $this->permit_type;
    }

    public function getPermitAddressAttribute()
    {
        return $this->permit->address ?? $this->address;
    }
}
