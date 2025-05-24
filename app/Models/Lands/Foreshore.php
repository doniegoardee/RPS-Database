<?php

namespace App\Models\Lands;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Foreshore extends Model
{

    protected $fillable = [
        'applicant',
        'location',
        'fpa_no',
        'area',
        'remarks_status',
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
        return $this->belongsTo(ForeshoreParents::class, 'client_id');
    }
}
