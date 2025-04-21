<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TIParent extends Model
{

    use HasFactory;


    protected $fillable = [

        'name',
        'address',
        'type',


    ];

    public function TI()
{
    return $this->hasMany(TenurialInstrument::class, 'tenur_type_id');
}

    public function ti_address() {
        return $this->belongsTo(Address::class, 'address', 'address');
    }
}
