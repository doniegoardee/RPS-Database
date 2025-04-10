<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChainsawParent extends Model
{
    use HasFactory;

protected $fillable = [

'name',
'address',
'type',

];

public function chainsaws()
{
    return $this->hasMany(Chainsaw::class, 'chainsaw_parent_id');
}

public function address() {
    return $this->belongsTo(Address::class, 'address', 'address');
}

}
