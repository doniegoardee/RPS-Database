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
        'date',
        'document',
        'user_id',
        'permit_type',
        'remarks',
    ];

    public function permit()
    {
        return $this->belongsTo(Permits::class, 'permit_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($permitList) {
            $permitList->permit_type = $permitList->permit->permit_title ?? null;
        });

        static::updating(function ($permitList) {
            $permitList->permit_type = $permitList->permit->permit_title ?? null;
        });
    }
}
