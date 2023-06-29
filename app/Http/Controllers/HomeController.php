<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;


use App\Models\Department;


use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        {
            $departments = Department::withCount(['municipalitys','department'])->orderBy('department_count', 'desc')->get();
       //  dd ($departments);

        }

        {
            $users1   = User::withCount('participants')->orderBy('participants_count', 'desc')->paginate(2);

    //     dd ($users);
        }

        $participants = Participant::count();
        $femenino = Participant::where('genders_id', '4')->count();
        $masculino = Participant::where('genders_id', '3')->count();
        $otros_sex = Participant::where('genders_id', '7')  ->orWhere('genders_id', '6')->orWhere('genders_id', '5')->count();

        $users = User::count();

        return view('home', compact('participants', 'femenino', 'masculino','otros_sex','departments', 'users1'));
    }
}
