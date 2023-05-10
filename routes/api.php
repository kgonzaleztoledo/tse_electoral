<?php

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;
use App\Models\Municipality;
use App\Models\Department;
use App\Models\Participant;


Route::get('/department/{id}/municipios', [App\Http\Controllers\ComboController::class, 'byDepartment'])->name('byDepartment');;
/*

Route::get('Participants', function (){

    $participant = Participant::join('municipalities','participants.municipality_id','=' ,'municipalities.id') ->orderBy('id', 'desc')
    ->select('participants.id','participants.activity_date','participants.activity_name','participants.name','participants.last_name',
    'participants.age','municipalities.name As municipio');

    return datatables()
    ->eloquent($participant)
    ->addColumn('btn','participants.actions')
    ->rawColumns(['btn'])
    ->toJson();
   // return App\Participant::all()->sortBy("municipality_id");

});
*/
Route::get('Participants', function (){

    $participants = Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
                            ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
                            ->orderBy('id', 'desc')
                            ->select(
                            'participants.id',
                            'participants.activity_date',
                            'participants.activity_name',
                            'participants.name',
                            'participants.last_name',
                            'participants.age',
                            'muni.name As municipio',
                            'dep.name As departamento',

                            );

                         //   dd($participants);
                            return datatables()
                            ->eloquent($participants)
                            ->addColumn('btn','participants.actions')
                            ->rawColumns(['btn'])
                            ->toJson();
   // return App\Participant::all()->sortBy("municipality_id");

});








