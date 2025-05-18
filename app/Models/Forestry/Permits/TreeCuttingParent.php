<?php

namespace App\Models\Forestry\Permits;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forestry\Permits\TreeCutting;

class TreeCuttingParent extends Model
{
        use HasFactory;

protected $fillable = [

'name',
'address',
'type',

];

public function tree_cuttings()
{
    return $this->hasMany(TreeCutting::class, 'cutting_parent_id');
}

public function address() {
    return $this->belongsTo(Address::class, 'address', 'address');
}

}
