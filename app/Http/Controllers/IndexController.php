<?php

namespace App\Http\Controllers;

use App\Classes\customDate;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date=  new \DateTime(customDate::INIT_DATE);
        return view('index',['date' => $date->format('d-m-Y') ]);
    }

   public function getDay(Request $request){

       $date=$request->date;
       $customDate=new customDate($date);
       $stringDay=$customDate->getDayCAT();
       return response()->json($stringDay);
   }
}
