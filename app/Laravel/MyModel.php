<?php

namespace App\Laravel;
use App\Http\Controllers\Laravel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MyModel extends Model
{
    public function InsertRecord($name,$email,$gender,$contact,$password,$created_at,$updated_at)
    {
        $query=DB::table('registration')->insert(['name' =>$name,'email' =>$email,'gender' =>$gender,'contact' =>$contact,'password' =>$password,'created_at' =>now(),'updated_at' =>now()]);
        return $query; 
    }

    public function ShowRecord($id,$name,$email,$gender,$contact){
        $show = DB::table('registration')->select('id','name','email','gender','contact')->latest()->get();
        return $show;
    }
    
    public function UpdateRecord($id,$name,$email,$gender,$contact,$created_at,$updated_at)
    {
        $update = DB::table('registration')->where('id',$id)->update(['id'=>$id,'name' =>$name,'email' =>$email,'gender' =>$gender,'contact' =>$contact,'created_at' =>now(),'updated_at' =>now()]);
        return $update;
    }
    public function DeleteRecord($id)
    {
        $del = DB::table('registration')->where('id',$id)->delete();
        return $del;
    }

    public function LoginCheck($email)
    {
        $check = DB::table('registration')->select('email')-> where('email','=',$email)->get();
        count($check);
        if(count($check) !== 0){
            return $check;
        }
        else{
            echo "Details are incorrect !! Try again";
        }      
    }

    public function getDriverOrders(){
        $getData= DB::table('registration')->select('payment_status','payment_title')->get()->toArray();
        return $getData;
    }
}