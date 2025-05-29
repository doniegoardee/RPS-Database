<?php

namespace App\Models\Forestry\Permits;

use App\Models\Permits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TFPL extends Model
{
       use HasFactory;

     protected $fillable = [
        'name_permitee',
        'place_of_loading',
        'destination',
        'species',
        'permit_no',
        'volume_to_transport',
        'no_finish_product',
        'no_finish_lumber',
        'date_transport',
        'cert_and_oath',
        'inspection',
        'remarks',
        'client_address',
        'permit_type',
        'user_id',
        'tfpl_parent_id',
        'document',
    ];

    public function permit()
    {
        return $this->belongsTo(Permits::class, 'permit_id');
    }

    public function parent()
{
    return $this->belongsTo(TFPLParent::class, 'tfpl_parent_id');
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
