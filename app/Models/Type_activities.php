<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_activities extends Model
{
    protected $table ="type_activities";

    public function participants()

    {

    return $this->hasMany('App\Models\Participant');

    }
   // use HasFactory;
}
