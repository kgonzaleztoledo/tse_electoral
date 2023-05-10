<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Municipality;


class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $departments = Department::paginate(5);
        $municipalitys = Municipality::orderBy(asc)->paginate(5);
        //dd($departments, $municipalitys);
        return view('departments.index', compact('departments','municipalitys'));

    }

    public function create(){

        return view('departments.create');

    }

    public function sendDataDepartment(Request $request){
        //Validar Campos
        $rules = [
                'name' => 'required|min:3'
        ];

        $messages =[
            'name.required' => 'El campo nombre departamento es obligatorio.',
            'name.min' => 'El campo nombre departamento debe contener 3 caracteres mínimos.'
        ];
        $this->validate($request, $rules, $messages );
        //Fin de validar
        $department =new Department();
        $department->name =$request->input('name');
        $department->description =$request->input('description');
        //dd($department);
        $department->save();
        $notification = 'El departamento sea creado correctamente.';
        return redirect('categorias')->with(compact('notification'));
      }

      public function editDepartment(Department $department){

        //dd($department);
         return view('departments.editdepartment',compact('department'));

      }

      public function updateDepartment(Request $request, Department $department){
        //Validar Campos
        $rules = [
                'name' => 'required|min:3'
        ];

        $messages =[
            'name.required' => 'El campo nombre departamento es obligatorio.',
            'name.min' => 'El campo nombre departamento debe contener 3 caracteres mínimos.'
        ];
        $this->validate($request, $rules, $messages );
        //Fin de validar

        $department->name =$request->input('name');
        $department->description =$request->input('description');
        //dd($department);
        $department->save();
        $notification = 'El departamento sea actualizado correctamente.';

        return redirect('categorias')->with(compact('notification'));
      }

     public function sendDataMunicipality(){



      }

      public function sendDataIdentity(){



      }

      public function sendDataGender(){



      }

      public function sendDataLinguistic(){



      }



}
