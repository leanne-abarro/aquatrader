<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    
    // $product = \App\Models\Product::find(2);

    // return $product;

    // $product = \App\Models\Product::find(1);

    // return $product -> type;
    // $user = \App\Models\User::find(2);
    // return $user -> orders;

    // $order = \App\Models\Order::find(1);
    // return $order -> products;

    // $user = \App\Models\User::all();
    // return $user;

    // $type = new \App\Models\Type();
    // $type -> name = "Shark";
    // $type -> save();

    // $user = \App\Models\User::create([
    //     "username" => "JoeJai",
    //     "firstname" => "Joe",
    //     "lastname" => "Jai",
    //     "email" => "joe.jai@gmail.com",
    //     "password" => "1"
    //     ]);

    // return $user;

    return view('welcome');
});

Route::get('types', function (){
     
    $type = \App\Models\Type::find(4);

    return view('types',['type'=>$type]);
    
});

Route::get('about', function (){
     return view('about');
});

Route::get('contact', function (){
     return view('contact');
});
