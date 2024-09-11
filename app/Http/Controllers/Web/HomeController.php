<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $activities=Activity::query()->orderBy('id','desc')->limit(10)->get();
        $slides=Activity::query()->orderBy('id','desc')->limit(4)->get();

        return view('webb.index',compact('activities','slides'));
        dd('sdssd');

    }




    //
}
