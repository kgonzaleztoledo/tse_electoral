<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipality;
use App\Models\Participant;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
        public function appointments(){

            //serie totales
              $monthCounts =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              //->where('participants.generous_id', '2' )
              ->select(
                    DB::raw('MONTH(activity_date) as month'),
                    DB::raw('COUNT(1) as count'))
                    ->groupBy('month')
                    ->get()
                    ->toArray();

                $counts = array_fill(0, 12, 0);
                foreach($monthCounts as $monthCount){
                    $index = $monthCount ['month']-1;
                    $counts[$index] = $monthCount['count'];
                 }


                 $Guatemalas =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
                 ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
                 ->where('dep.id', '1' )
                 ->select(
                       DB::raw('MONTH(activity_date) as month'),
                       DB::raw('COUNT(1) as count'))
                       ->groupBy('month')
                       ->get()
                       ->toArray();

                   $guatemalas = array_fill(0, 12, 0);
                   foreach($Guatemalas as $Guatemala){
                       $index = $Guatemala ['month']-1;
                       $guatemalas[$index] = $Guatemala['count'];
                    }

                    $Elprogresos =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
                    ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
                    ->where('dep.id', '2' )
                    ->select(
                          DB::raw('MONTH(activity_date) as month'),
                          DB::raw('COUNT(1) as count'))
                          ->groupBy('month')
                          ->get()
                          ->toArray();

                      $elprogresos = array_fill(0, 12, 0);
                      foreach($Elprogresos as $Elprogreso){
                          $index = $Elprogreso ['month']-1;
                          $elprogresos[$index] = $Elprogreso['count'];
                       }

                       $Sacatepequezs =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
                       ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
                       ->where('dep.id', '3' )
                       ->select(
                             DB::raw('MONTH(activity_date) as month'),
                             DB::raw('COUNT(1) as count'))
                             ->groupBy('month')
                             ->get()
                             ->toArray();

                         $sacatepequezs = array_fill(0, 12, 0);
                         foreach($Sacatepequezs as $Sacatepequez){
                             $index = $Sacatepequez ['month']-1;
                             $sacatepequezs[$index] = $Sacatepequez['count'];
                          }

                          $Chimaltenangos =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
                          ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
                          ->where('dep.id', '4' )
                          ->select(
                                DB::raw('MONTH(activity_date) as month'),
                                DB::raw('COUNT(1) as count'))
                                ->groupBy('month')
                                ->get()
                                ->toArray();

                            $chimaltenangos = array_fill(0, 12, 0);
                            foreach($Chimaltenangos as $Chimaltenango){
                                $index = $Chimaltenango ['month']-1;
                                $chimaltenangos[$index] = $Chimaltenango['count'];
                             }










           //Inicia consulta de Genero
              $sexCounts1 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              ->where('participants.genders_id', '3' )
              ->select(
                    DB::raw('MONTH(activity_date) as month'),
                    DB::raw('COUNT(1) as count'))
                    ->groupBy('month')
                    ->get()
                    ->toArray();

                $sexcounts1 = array_fill(0, 12, 0);
                foreach($sexCounts1 as $sexCount1){
                    $index = $sexCount1 ['month']-1;
                    $sexcounts1[$index] = $sexCount1['count'];
                 }


              $sexCounts2 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              ->where('participants.genders_id', '4' )
              ->select(
                    DB::raw('MONTH(activity_date) as month'),
                    DB::raw('COUNT(1) as count'))
                    ->groupBy('month')
                    ->get()
                    ->toArray();

                $sexcounts2 = array_fill(0, 12, 0);
                foreach($sexCounts2 as $sexCount2){
                    $index = $sexCount2 ['month']-1;
                    $sexcounts2[$index] = $sexCount2['count'];
                 }



                 $sexCounts3 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
                 ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
                 ->where('participants.genders_id', '5' )
                 ->select(
                       DB::raw('MONTH(activity_date) as month'),
                       DB::raw('COUNT(1) as count'))
                       ->groupBy('month')
                       ->get()
                       ->toArray();

                   $sexcounts3 = array_fill(0, 12, 0);
                   foreach($sexCounts3 as $sexCount3){
                       $index = $sexCount3 ['month']-1;
                       $sexcounts3[$index] = $sexCount3['count'];
                    }


              $sexCounts4 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              ->where('participants.genders_id', '6' )
              ->select(
                    DB::raw('MONTH(activity_date) as month'),
                    DB::raw('COUNT(1) as count'))
                    ->groupBy('month')
                    ->get()
                    ->toArray();

                $sexcounts4 = array_fill(0, 12, 0);
                foreach($sexCounts4 as $sexCount4){
                    $index = $sexCount4 ['month']-1;
                    $sexcounts4[$index] = $sexCount4['count'];
                 }


              $sexCounts5 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              ->where('participants.genders_id', '7' )
              ->select(
                    DB::raw('MONTH(activity_date) as month'),
                    DB::raw('COUNT(1) as count'))
                    ->groupBy('month')
                    ->get()
                    ->toArray();

                $sexcounts5 = array_fill(0, 12, 0);
                foreach($sexCounts5 as $sexCount5){
                    $index = $sexCount5 ['month']-1;
                    $sexcounts5[$index] = $sexCount5['count'];
                 }
                //finaliza consulta genero


               // dd($counts);



           //Inicia idiomar
              $idiomaCounts1 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              ->where('participants.linguistics_id', '1' )
              ->select(
                    DB::raw('MONTH(activity_date) as month'),
                    DB::raw('COUNT(1) as count'))
                    ->groupBy('month')
                    ->get()
                    ->toArray();

                $idiomacounts1 = array_fill(0, 12, 0);
                foreach($idiomaCounts1 as $idiomaCount1){
                    $index = $idiomaCount1 ['month']-1;
                    $idiomacounts1[$index] = $idiomaCount1['count'];
                 }


              $idiomaCounts2 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              ->where('participants.linguistics_id', '2' )
              ->select(
                    DB::raw('MONTH(activity_date) as month'),
                    DB::raw('COUNT(1) as count'))
                    ->groupBy('month')
                    ->get()
                    ->toArray();

                $idiomacounts2 = array_fill(0, 12, 0);
                foreach($idiomaCounts2 as $idiomaCount2){
                    $index = $idiomaCount2 ['month']-1;
                    $idiomacounts2[$index] = $idiomaCount2['count'];
                 }



                 $idiomaCounts3 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
                 ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
                 ->where('participants.linguistics_id', '3' )
                 ->select(
                       DB::raw('MONTH(activity_date) as month'),
                       DB::raw('COUNT(1) as count'))
                       ->groupBy('month')
                       ->get()
                       ->toArray();

                   $idiomacounts3 = array_fill(0, 12, 0);
                   foreach($idiomaCounts3 as $idiomaCount3){
                       $index = $idiomaCount3 ['month']-1;
                       $idiomacounts3[$index] = $idiomaCount3['count'];
                    }






               return view('charts.appointments', compact('counts','guatemalas', 'elprogresos','sacatepequezs','chimaltenangos','sexcounts1', 'sexcounts2','sexcounts3', 'sexcounts4', 'sexcounts5', 'idiomacounts1', 'idiomacounts2','idiomacounts3'));


        }
}
