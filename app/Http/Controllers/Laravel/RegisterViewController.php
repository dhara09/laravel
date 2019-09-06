<?php

namespace App\Http\Controllers\Laravel;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Laravel\MyModel;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\Http\Controllers\Controller;

class RegisterViewController extends Controller
{
    private $_MyModel;

    function __construct()
    {
      $this->setMyModel();
    }

    public function setMyModel()
    {
      $local = new MyModel();
      $this->_MyModel= $local; 
    }

    public function show(){
        $register = DB::table('registration')->select('id','name','email','gender','contact')->latest()->get();
        return view('RegisterView.fetch')->with('regis',$register);
    }

    public function edit($id){
        $register = DB ::table('registration')->find($id);
        return view('registration.edit')->with('regis',$register);
    }
    
    public function update(Request $request){
        $this->validate($request, [
            'name'=>'required|Regex:/^[\D]+$/i',
            'email'=> 'required|email',
            'contact'=>'required|numeric|min:10',
            'gender'=>'required'
        ]);
        $id= $request->input('register_user_id');
        $name = $request->get('name');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $contact = $request->input('contact');
        $created_at=now();
        $updated_at=now();

        $this->_MyModel->UpdateRecord($id,$name,$email,$gender,$contact,$created_at,$updated_at);
        return redirect('/registerview');
    }

    public function destroy($id){
        $this->_MyModel->DeleteRecord($id);
        return redirect('/registerview');
    }

    public function apicreate(){
        //
    }
    public function apilogin(){
//
    }
}