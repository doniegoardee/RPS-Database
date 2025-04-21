<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TenurialInstrument extends Model
{

    protected $table = 'tenurial_instruments';

    protected $fillable = [
        'name_lessee',
        'address',
        'issue_date',
        'expired_date',
        'document',
        'tenur_no',
        'total_erea',
        'tenur_type',
        'tenur_type_id',
        'user_id',
        'status',
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

    public function ti_parent()
    {
        return $this->belongsTo(TIParent::class, 'tenur_type_id');
    }

}
