<?php

namespace App\Models\Lands;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FPA extends Model
{

    use HasFactory;

     protected $fillable = [
        'name',
        'address',
        'date_registered',
        'date_expiry',
        'control_no',
        'purpose',
        'remarks',
        'client_address',
        'permit_type',
        'user_id',
        'fpa_parent_id',
        'document',
    ];

    public function parent()
{
    return $this->belongsTo(FPAParents::class, 'fpa_parent_id');
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





