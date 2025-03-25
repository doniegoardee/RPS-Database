<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RPSDocs extends Model
{

protected $fillable = [

'tracking_num',
'subject',
'date',
'file',
'type',
'tenur_type_id',
'remarks',

];

public function typeTI()
{
    return $this->belongsTo(TypeTI::class, 'tenur_type_id');
}

}
