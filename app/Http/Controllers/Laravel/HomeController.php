<?php

namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show(){
        return view('Home.home');
    }
}
