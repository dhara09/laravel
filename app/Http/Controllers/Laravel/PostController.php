<?php
namespace App\Http\Controllers\Laravel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=> 'required|max=4',
            'email' =>'required'
        ]);

        Post ::create(request(['name','email']));
        return redirect('/');
    }  
}
?>