<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    protected $table ="departments";

    public function municipalitys()

    {

        return $this->hasMany('App\Models\Municipality');


    }


   // use HasFactory;
}
