<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitList extends Model
{
    use HasFactory;

    protected $fillable = [
        'permit_id',
        'app_no',
        'name',
        'subject',
        'year',
        'document',
        'remarks',
    ];

    public function permit()
    {
        return $this->belongsTo(Permits::class);
    }
}
