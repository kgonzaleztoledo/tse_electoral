<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{

    protected $fillable = ['name'];

    public function Participants(){

        return $this->hasMany('App\Models\Participant', 'municipality_id', 'id');



    }
    public function Department(){

        return $this->hasOne('App\Models\Department', 'id', 'department_id');

    }

    //use HasFactory;
}
