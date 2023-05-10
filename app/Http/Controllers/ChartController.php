<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipality;
use App\Models\Participant;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
        public function appointments(){


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



              $sexCounts1 =  Participant::join('municipalities as muni','participants.municipality_id','=' ,'muni.id')
              ->join('departments as dep', 'muni.department_id','=' ,'dep.id')
              ->where('participants.generous_id', '1' )
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
              ->where('participants.generous_id', '2' )
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



               // dd($counts);

            return view('charts.appointments', compact('counts', 'sexcounts1', 'sexcounts2'));


        }
}
