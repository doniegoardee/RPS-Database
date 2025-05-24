<?php

namespace App\Models\Forestry\Permits;

use App\Models\Permits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TreeCutting extends Model
{
       use HasFactory;

     protected $fillable = [
        'name_permitee',
        'location',
        'no_trees',
        'species',
        'approved_volume',
        'date_issuance',
        'expiration_date',
        'seed_requirements',
        'client_address',
        'permit_type',
        'user_id',
        'cutting_parent_id',
        'document',
    ];

    public function permit()
    {
        return $this->belongsTo(Permits::class, 'permit_id');
    }

    public function parent()
{
    return $this->belongsTo(TreeCuttingParent::class, 'cutting_parent_id');
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
