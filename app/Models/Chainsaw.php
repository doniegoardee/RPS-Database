<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chainsaw extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address','brand', 'serial_num', 'date_registered', 'date_expiry', 'control_no',
        'date_acquired', 'horse_power', 'length_guidebar',
        'sticker', 'purpose', 'remarks','client_address','permit_type','user_id','chainsaw_parent_id',
    ];

    public function permit()
    {
        return $this->belongsTo(Permits::class, 'permit_id');
    }

    public function parent()
{
    return $this->belongsTo(ChainsawParent::class, 'chainsaw_parent_id');
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
