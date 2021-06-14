<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {
        //echo "";
        return view('login.index');
    }

    /*public function verify(Request $req)
    {
        dd($req);
        echo "Posted!!" ;
        echo "Name: ". $req->username . "<br>";
        echo "Password: ". $req->password . "<br>" ;
        if($req->username == $req->password)
        {
            return redirect('/home');
        }
    }*/
    
}
