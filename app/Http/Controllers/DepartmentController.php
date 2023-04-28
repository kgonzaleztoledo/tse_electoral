<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Municipality;


class DepartmentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $departments = Department::all();
        $municipalitys = Municipality::all();
        //dd($departments, $municipalitys);
        return view('departments.index', compact('departments','municipalitys'));

    }

    public function create(){

        return view('departments.create');

    }

    public function sendData(Request $request){

        $department =new Department();
        $department->name =$request->input('name');
        $department->description =$request->input('description');
        //dd($department);
        $department->save();

        return redirect('/categorias/departamentos');
      }

}
