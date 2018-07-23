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
            $toReturn->stringDayCAT = utf8_encode($customDate->getDayCAT());
            $toReturn->stringDayES = utf8_encode($customDate->getDayES());
            $toReturn->isLeap = $customDate->isLeap();
        } catch (Exception $e) {
            $toReturn->success = false;
        }
        return response()->json($toReturn);
    }


}
