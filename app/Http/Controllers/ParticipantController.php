<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Municipality;
use App\Models\Department;


class ParticipantController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        $participants = Participant::all()->sortByDesc("municipality_id");
        //dd($participants);
        return view('participants.index', compact('participants'));

    }



}
