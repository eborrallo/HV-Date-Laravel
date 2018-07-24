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
        $date = new \DateTime(customDate::INIT_DATE);
        return view('index', ['date' => $date->format('d-m-Y')]);
    }

    public function getDay(Request $request)
    {

        $toReturn = new \stdClass();
        try {

            if (empty($request->date)) {
                $toReturn->success = false;
            }
            $customDate = new customDate($request->date);
            $toReturn->stringDayCAT = $customDate->getDayCAT();
            $toReturn->stringDayES = $customDate->getDayES();
            $toReturn->isLeap = $customDate->isLeap();
            $toReturn->success = true;

        } catch (\Exception $e) {
            $toReturn->success = false;
            $toReturn->error=$e;
        }
        return response()->json($toReturn);
    }


}
