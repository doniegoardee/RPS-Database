<?php

namespace App\Models\Forestry\Permits;

use App\Models\Permits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Supplier extends Model
{
       use HasFactory;

     protected $fillable = [
        'name',
        'business_name',
        'location',
        'volume',
        'date_issuance',
        'date_expiration',
        'client_address',
        'permit_type',
        'user_id',
        'supplier_parent_id',
        'document',
    ];

    public function permit()
    {
        return $this->belongsTo(Permits::class, 'permit_id');
    }

    public function parent()
{
    return $this->belongsTo(SupplierParent::class, 'supplier_parent_id');
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
