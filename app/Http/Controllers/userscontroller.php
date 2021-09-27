<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    //
    function overload(){
        $data =['Anu', 'Manisha', 'Priya'];
        return view('todo',['user'=>'Sap'], ['array'=>$data]);
    }
}
