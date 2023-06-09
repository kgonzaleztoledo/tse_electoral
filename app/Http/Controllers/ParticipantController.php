<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Municipality;
use App\Models\Department;
use App\Models\gender;
use App\Models\identity;
use App\Models\linguistic;
use App\Models\Type_activities;

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
        $type_activities= Type_activities::all()->sortBy("name");

        // $participants = Participant::all()->sortBy("municipality_id");
        //dd($participants);
        return view('participants.index')->with(compact('departments','municipios','generos','identitys','linguistics','type_activities'));

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
         //   dd($request);
        try {

            DB::beginTransaction();
        $participant =new Participant();
        $participant->activity_date =$request->input('activity_date');
        $participant->name_workshop =$request->input('name_workshop');
        $participant->type_activities_id =$request->input('activity_name');
        $participant->name =$request->input('name');
        $participant->last_name =$request->input('last_name');
        $participant->cui =$request->input('cui');
        $participant->age =$request->input('age');
        $participant->disability =$request->input('disability');
        $participant->type_disability =$request->input('type_disability');
        $participant->genders_id =$request->input('generous_id');
        $participant->identities_id =$request->input('identities_id');
        $participant->linguistics_id =$request->input('linguistics_id');
        $participant->user_id =$request->input('user_id');
        $participant->municipality_id =$request->input('municipality_id');
        //dd($participant);
        $participant->save();

        DB::commit();

        }
        catch(\Exception $e)
            {
                DB::rollback();


                $errorsa = 'Su no. de CUI no cumple con los 13 digitos '.$participant->cui =$request->input('cui').' por favor ingrese nuevamente';
                return redirect('participantes')->with(compact('errorsa'));
            //You are here means that the exception occurred now do something else here.
            }

        $notification = 'El Participante se registro correctamente.';
        return redirect('participantes')->with(compact('notification'));



    }


    public function show($id){


          $participants = Participant::find($id);
        //dd($participants);
        return view('departments.show', compact('id'));




          }


        public function edit($id){
            $linguistic= linguistic::all()->sortBy("name");
            $identiti= identity::all()->sortBy("name");
            $gender= gender::all()->sortBy("name");
            $category_activities= Type_activities::all()->sortBy("name");
            $municipios= Municipality::all()->sortBy("name");
            $participant =  Participant::find($id);
         // dd($participant);
            return view('participants.editparticipants', compact('participant','municipios','category_activities','gender','identiti','linguistic'));

              }

              public function updateParticipant(Request $request, Participant $participant){
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

                $participant->activity_date =$request->input('activity_date');
                $participant->name_workshop =$request->input('name_workshop');
                $participant->type_activities_id =$request->input('activity_name');
                $participant->name =$request->input('name');
                $participant->last_name =$request->input('last_name');
                $participant->cui =$request->input('cui');
                $participant->age =$request->input('age');
                $participant->disability =$request->input('disability');
                $participant->type_disability =$request->input('type_disability');
                $participant->genders_id =$request->input('generous_id');
                $participant->identities_id =$request->input('identities_id');
                $participant->linguistics_id =$request->input('linguistics_id');
              //  $participant->user_id =$request->input('user_id');
                $participant->municipality_id =$request->input('municipality_id');


              // dd($participant);
                $participant->save();
                $notification = 'El Participante sea actualizado correctamente.';

                return redirect('participantes')->with(compact('notification'));
              }





}
