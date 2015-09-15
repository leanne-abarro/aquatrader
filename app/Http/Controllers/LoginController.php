<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showLoginForm (){

    	return view("login");
    	//return "Hi Leanne";
    }

    public function processLogin (Request $request,\Illuminate\Contracts\Auth\Guard $auth){

    	$credential = $request -> only("username","password");

    	if ($auth -> attempt($credential)) {
            //can log in

            return "Yeah!";
        } else {

        	return "Nope!";

        }
    }

    public function logout (){

    

    }
}