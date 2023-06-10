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

public function activity(){
    return $this->belongsTo('App\Models\Type_activities');
}


public function user(){
    return $this->belongsTo('App\Models\User');
}



//   use HasFactory;
}
