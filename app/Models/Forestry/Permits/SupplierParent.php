<?php

namespace App\Models\Forestry\Permits;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forestry\Permits\Supplier;

class SupplierParent extends Model
{
        use HasFactory;

protected $fillable = [

'name',
'address',
'type',

];

public function suppliers()
{
    return $this->hasMany(Supplier::class, 'supplier_parent_id');
}

public function address() {
    return $this->belongsTo(Address::class, 'address', 'address');
}

}
