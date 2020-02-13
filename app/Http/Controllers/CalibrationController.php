<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalibrationController extends Controller
{
    public function index()
    {
        return view('calibration.index', ["calibration"=>[]]);
    }

    public function create()
    {
        return view('calibration.create', ["calibration"=>[]]);
    }
}
