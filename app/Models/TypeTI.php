<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTI extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function rpsDocs()
    {
        return $this->hasMany(TenurialInstrument::class, 'tenur_type_id');
    }
}
