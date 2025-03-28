<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TenurialInstrument extends Model
{

    protected $table = 'tenurial_instruments';

    protected $fillable = [
        'tracking_num',
        'subject',
        'date',
        'file',
        'type',
        'tenur_type_id',
        'tenur_type',
        'user_id',
        'remarks',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tenurType()
    {
        return $this->belongsTo(TypeTI::class, 'tenur_type_id');
    }

    // protected static function booted()
    // {
    //     static::addGlobalScope('userDocuments', function (Builder $builder) {
    //         if (Auth::check()) {
    //             $builder->where('user_id', Auth::id());
    //         }
    //     });

    // }
}
