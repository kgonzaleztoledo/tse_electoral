<?php

namespace App\Models;
use App\Models\Municipality;
use App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    //protected $fillable = ['id','name','municipality_id'];

    public function Municipality(){

        return $this->belongsTo(Municipality::class);


    }
    use HasFactory;
}
