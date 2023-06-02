<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Teacher;

class PagesController extends Controller
{

    public function welcome(){
        $comments = Comment::latest()->take(3)->get();
        $teachers = Teacher::latest()->take(4)->get();
        return view('welcome', compact('comments', 'teachers'));
    }

    public function main(){
        return view('layouts.main');
    }

    public function class(){
        return view('class');
    }

    public function team(){
        $comments = Comment::latest()->take(6)->get();
        $teachers = Teacher::latest()->take(8)->get();
        return view('team', compact('comments', 'teachers'));
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

