<?php

namespace App\Models\Lands;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FPAParents extends Model
{
     use HasFactory;

protected $fillable = [

'name',
'address',
'type',

];

public function FPA()
{
    return $this->hasMany(FPA::class, 'fpa_parent_id');
}

public function address() {
    return $this->belongsTo(Address::class, 'address', 'address');
}
}



