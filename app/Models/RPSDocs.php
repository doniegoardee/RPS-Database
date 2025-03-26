<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPSDocs extends Model
{
    use HasFactory;

    protected $table = 'r_p_s_docs';

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
}
