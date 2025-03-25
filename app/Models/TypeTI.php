<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeTI extends Model
{

protected $fillable = [

'title',

];

public function rpsDocs()
{
    return $this->hasMany(RPSDocs::class, 'tenur_type_id');
}


}
