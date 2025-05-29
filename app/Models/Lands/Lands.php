<?php

namespace App\Models\Lands;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lands extends Model
{
    protected $table = 'lands';

    protected $fillable = [
        'applicant',
        'applicant_no',
        'lot_no',
        'area',
        'location',
        'dpli_mi_si',
        'lands_type',
        'client_address',
        'client_id',
        'user_id',
        'document',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Parent()
    {
        return $this->belongsTo(LandsParents::class, 'client_id');
    }

}

