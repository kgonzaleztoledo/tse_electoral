<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

   protected $table ="participants";



public function department(){
    return $this->belongsTo(Municipality::class,  'municipality_id', 'id');
    //return $this->belongsTo('App\Models\Municipality');
}

public function activity(){

    return $this->belongsTo(Type_activities::class,  'type_activities_id', 'id');
   // return $this->belongsTo('App\Models\Type_activities');
}

public function gender(){

    return $this->belongsTo(gender::class,  'genders_id', 'id');
   // return $this->belongsTo('App\Models\Type_activities');
}
public function identiti(){

    return $this->belongsTo(identity::class,  'identities_id', 'id');
   // return $this->belongsTo('App\Models\Type_activities');
}

public function linguistic(){

    return $this->belongsTo(linguistic::class,  'linguistics_id', 'id');
   // return $this->belongsTo('App\Models\Type_activities');
}


public function user(){
    return $this->belongsTo('App\Models\User');
}



//   use HasFactory;
}
