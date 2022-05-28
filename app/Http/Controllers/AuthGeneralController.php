<?php

namespace App\Http\Controllers;

use App\Models\PastQuestion;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AuthGeneralController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return Inertia::render('Dashboard',[
            'isAdmin' => Auth::user()->can('isAdmin'),
            'subjects' => $subjects
        ]);
    }

    public function storeQuestion(Request $request){
        $request->validate([
            'name' => 'required|unique:past_questions',
            'year' => 'required',
            'file' => 'required|mimes:pdf,doc,docx',
            'subject' => 'required'
        ]);

        $file = $request->file('file');
        $filename = time().$file->getClientOriginalName();
        $path = $file->storeAs('past_questions', $filename);

        Auth::user()->pastquestions()->create([
            'name'=>$request->name,
            'year'=>$request->year,
            'description'=>$request->description,
            'file'=>$path,
            'subject_id'=>$request->subject
        ]);

        return Redirect::route('dashboard')->with('message','Successfuly saved');
    }
}