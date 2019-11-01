<?php

namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    public function index()
    {
         $demos= MyModel::all();
         return view('MyController.index',compact('demos'));
    }
    
}
?>