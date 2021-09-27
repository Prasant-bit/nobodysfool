<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    //
    function login(Request $req){

        $req->validate([
            'username'=>"required | min:4 | max:12",
            'password'=>"required | min:6"
        ]);

        return $req;
    }
}
