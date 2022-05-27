<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return Inertia::render('Home',['subjects'=>$subjects]);
    }

    public function questions(){
        return Inertia::render('Questions');
    }
}