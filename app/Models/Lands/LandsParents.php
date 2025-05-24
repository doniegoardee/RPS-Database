<?php

namespace App\Models\Lands;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LandsParents extends Model
{
   use HasFactory;

protected $fillable = [

'name',
'address',
'type',

];

public function Land()
{
    return $this->hasMany(Lands::class, 'client_id');
}

public function address() {
    return $this->belongsTo(Address::class, 'address', 'address');
}


}



