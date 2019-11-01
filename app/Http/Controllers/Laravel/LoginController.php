<?php

namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests;
use App\Laravel\MyModel;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;

class LoginController extends Controller
{
    private $MyModel;

    function __construct(){
        $this->setMyModel();
    }

    public function setMyModel(){
        $local = new MyModel();
        $this->_MyModel =$local;
    }

    public function create(){
        return view('login.create');   
    }

    public function store(Request $request){
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]); 
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        
        $this->_MyModel->LoginCheck($email,$password);
        session()->flash('message','Successfully Logged!!');
        return redirect('/registerview');
    } 

    public function forgotPassword(Request $request){
        // $password = bcrypt($request->input('password'));
        // $email = $request->input('email');
        // $checkPass=$this->_MyModel->retriveUserPass($password,$email);
        return view('login.forgotPassword');
    }   
}