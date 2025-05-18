<?php

namespace App\Models\Forestry\Tenurial;

use App\Models\User;
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
        'tenur_no',
        'total_area',
        'tenur_type',
        'tenur_type_id',
        'client_id',
        'user_id',
        'status',
        'remarks',
        'document',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tenurType()
    {
        return $this->belongsTo(TypeTI::class, 'tenur_type_id');
    }

    public function TI()
    {
        return $this->belongsTo(TIParent::class, 'client_id');
    }

}
