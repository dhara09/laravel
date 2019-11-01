<?php
namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Laravel\MyModel;
use Illuminate\Support\Facades\Input;
use Redirect;

class RegisterController extends Controller
{
    private $_MyModel;

    function __construct(){
      $this->setMyModel();
    }

    public function setMyModel(){
      $local = new MyModel();
      $this->_MyModel = $local; 
    }

    public function create(){
        return view('registration.create');   
    }

    public function store(Request $request) {
        $this->validate(request(),[
            'name' => 'required|Regex:/^[\D]+$/i',
            'email' => 'required|email|unique:registration',
            'contact' => 'required|min:10|numeric',
            'password' => 'required|min:5',
            'conf_password'=>'required|min:5',
            'gender'=>'required'
        ]);  
            $name = $request->get('name');
            $email = $request->input('email');
            $gender = $request->input('gender');
            $contact = $request->input('contact');
            $password = bcrypt($request->input('password'));
            $created_at=now();
            $updated_at=now();

            $this->_MyModel->InsertRecord($name,$email,$gender,$contact,$password,$created_at,$updated_at);
            return redirect('/registerview');
    } 
}
?>