<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipality;
use App\Models\Department;


class Municipality extends Model
{

    protected $fillable = ['name','department_id'];

    public function Participants(){

        return $this->hasMany('App\Models\Participant', 'municipality_id', 'id');



    }

    public function Department(){

        return $this->belongsTo(Department::class);


    }

    //use HasFactory;
}
