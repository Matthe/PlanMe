<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionPlanController extends Controller
{
    public function index(){
        return view('session_plan.index');
    }
}
