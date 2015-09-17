<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showLoginForm (){

    	return view("login");
    	//return "Hi Leanne";
    }

    public function processLogin (Request $request,Guard $auth){

    	$credential = $request -> only("username","password");

    	if ($auth -> attempt($credential)) {
            //can log in

            return redirect() -> intended('types/1');
        } else {

        	return redirect('login') -> with("message","Try again!");

        }
    }

    public function logout (\Illuminate\Contracts\Auth\Guard $auth){

        $auth -> logout();
        return redirect('login');

    }
}
