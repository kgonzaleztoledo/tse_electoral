<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Municipality extends Model

{
    protected $table ="municipalities";






    public function participants()

    {
        return $this->hasMany(Participant::class);

   // return $this->hasMany('App\Models\Participant');

    }

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }



    //use HasFactory;
}
