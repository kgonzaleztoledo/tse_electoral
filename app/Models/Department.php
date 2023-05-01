<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];

    public function Municipalitys()

    {

        return $this->hasMany('App\Models\Municipality', 'department_id', 'id');


    }
   // use HasFactory;
}
