<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Municipality;
use App\Models\Department;
use App\Models\gender;
use App\Models\identity;
use App\Models\linguistic;


class ParticipantController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $departments= Department::all()->sortBy('name');
        $municipios= Municipality::all()->sortBy("name");
        $generos= gender::all()->sortBy("name");
        $identitys= identity::all()->sortBy("name");
        $linguistics= linguistic::all()->sortBy("name");

        // $participants = Participant::all()->sortBy("municipality_id");
        //dd($participants);
        return view('participants.index')->with(compact('departments','municipios','generos','identitys','linguistics'));

    }


    public function sendData(Request $request){
        //Validar Campos
        $rules = [
                'name' => 'required|min:3'
        ];

        $messages =[
            'name.required' => 'El ingreso de nombres obligatorio.',
            'name.min' => 'El campo nombres debe contener nombres propios.'
        ];
        $this->validate($request, $rules, $messages );
        //Fin de validar
        $participant =new Participant();
        $participant->activity_date =$request->input('activity_date');
        $participant->activity_name =$request->input('activity_name');
        $participant->name =$request->input('name');
        $participant->last_name =$request->input('last_name');
        $participant->cui =$request->input('cui');
        $participant->age =$request->input('age');
        $participant->disability =$request->input('disability');
        $participant->type_disability =$request->input('type_disability');
        $participant->generous_id =$request->input('generous_id');
        $participant->identities_id =$request->input('identities_id');
        $participant->linguistics_id =$request->input('linguistics_id');
        $participant->users_id =$request->input('users_id');
        $participant->municipality_id =$request->input('municipality_id');
        //dd($participant);
        $participant->save();
        $notification = 'El Participante se registro correctamente.';
        return redirect('participantes')->with(compact('notification'));
      }


    public function show($id){
        $participants = Participant::find($id);
        //dd($participants);
        return view('departments.show', compact('id'));


        //dd($department);
             return view('departments.show',compact('id'));

          }

        // $participants = Participant::all()->sortBy("municipality_id");
         //dd($participants);
        // return view('participants.index');




}
