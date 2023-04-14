<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function welcome(){
        return view('welcome');
    }

    public function main(){
        return view('layouts.main');
    }

    public function class(){
        return view('class');
    }

    public function team(){
        return view('team');
    }

    public function gallery(){
        return view('gallery');
    }

    public function achievements(){
        return view('achievements');
    }

    public function article(){
        return view('article');
    }

    public function blog(){
        return view('blog');
    }
}

