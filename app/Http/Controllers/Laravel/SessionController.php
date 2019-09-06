<?php

namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function __contruct(){
        $this->middleware('guest',['except'=>'destroy']);
    }
    public function create(){
        return view('login.create');
    }

    public function store(){
        if(!auth()->attempt(['email','password']))
        return back()->withErrors([
            'message'=>'please enter valid ',
        ]);
    }
    
    public function destroy(){
        auth()->logout();
        return redirect('/');                                                             
    }
}