<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [

    'address',
    'type',


    ];

    public function clients() {
        return $this->hasMany(ChainsawParent::class, 'address', 'address');
    }

}
