<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index()
    {
        return view('adminn.index');

    }
    //
}
