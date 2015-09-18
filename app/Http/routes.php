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

// ===== types routes =====

Route::get('types/{id}', function ($id){
     
    $type = \App\Models\Type::find($id);

    return view('types',['type'=>$type]);

    //return $type;
    
});

// ===== products routes =====

// Route::get('about', 'PagesController@showAbout');

// Route::get('contact', 'PagesController@showContact');

// Route::get('products/create', 'ProductsController@create');

// Route::post('products', 'ProductsController@store');

// Route::get('products/{id}/edit', 'ProductsController@edit');

// Route::put('products/{id}', 'ProductsController@update');

Route::resource('products','ProductsController');
Route::resource('product','ProductsController');


// ===== user routes =====

// Route::get('users/create', 'UsersController@create');

// Route::get('users/{id}', 'UsersController@show');

// Route::post('users', 'UsersController@store');

// Route::get('users/{id}/edit', 'UsersController@edit');

// Route::put('users/{id}', 'UsersController@update');

Route::resource('users','UsersController');

// ===== login routes =====

Route::get('login','LoginController@showLoginForm');

Route::post('login','LoginController@processLogin');

Route::get('logout','LoginController@logout');

// ===== cart routes =====

Route::get('cart','CartController@showCart');
Route::post('cartitems','CartController@addItem');
Route::post('orders','CartController@checkout');



