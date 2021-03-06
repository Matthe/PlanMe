<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome(){
        return view('pages.home');
    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function getTodo(){
        return view('todo.index');
    }
}
