<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    public function Municipality(){

        return $this->hasOne('App\Models\Municipality', 'id', 'municipality_id');

    }
    use HasFactory;
}
