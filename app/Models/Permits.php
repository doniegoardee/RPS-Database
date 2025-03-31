<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permits extends Model
{

    use HasFactory;

    protected $fillable = ['permit_title'];

    public function permitLists()
    {
        return $this->hasMany(PermitList::class, 'permit_id');
    }

}
