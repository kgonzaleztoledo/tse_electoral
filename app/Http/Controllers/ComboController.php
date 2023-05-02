<?php

namespace App\Http\Controllers;
use App\Models\Participant;
use App\Models\Municipality;
use App\Models\Department;

use Illuminate\Http\Request;

class ComboController extends Controller
{

    public function byDepartment($id){

        // dd($id);
         return Municipality::where('department_id', $id)->get();


     }
}
