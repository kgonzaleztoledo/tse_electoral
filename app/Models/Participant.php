<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

   protected $table ="participants";


public function department(){
    return $this->belongsTo('App\Models\Municipality');
}



    use HasFactory;
}
