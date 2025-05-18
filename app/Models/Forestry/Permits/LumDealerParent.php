<?php

namespace App\Models\Forestry\Permits;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forestry\Permits\LumDealer;

class LumDealerParent extends Model
{
        use HasFactory;

protected $fillable = [

'name',
'address',
'type',

];

public function lumber_dealers()
{
    return $this->hasMany(LumDealer::class, 'dealer_parent_id');
}

public function address() {
    return $this->belongsTo(Address::class, 'address', 'address');
}

}
