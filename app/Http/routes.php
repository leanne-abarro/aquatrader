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

Route::get('types/{id}', function ($id){
     
    $type = \App\Models\Type::find($id);

    return view('types',['type'=>$type]);

    //return $type;
    
});

Route::get('about', function (){
     return view('about');
});

Route::get('contact', function (){
     return view('contact');
});

Route::get('products/create', function (){
     return view('createProduct');
});

Route::post('products', function (App\Http\Requests\CreateProductRequest $request){
    $product = \App\Models\Product::create($request -> all());

    return redirect('types/'.$product -> type -> id);
});

Route::get('products/{id}/edit', function ($id){
    $product = \App\Models\Product::find($id);
    return view('editProduct',compact('product'));
});

Route::put('products/{id}', function ($id, \App\Http\Requests\UpdateProductRequest $request){
    
    $product = \App\Models\Product::find($id);

    $product -> fill($request -> all());

    $product -> save();
    return redirect('types/'.$product -> type -> id);

});

Route::get('users/create', function (){
     return view('createUser');
});


Route::get('users/{id}', function ($id){
     
    $user = \App\Models\User::find($id);

    return view('profile',['user' => $user]);
    
});

Route::post('users', function (App\Http\Requests\CreateUserRequest $request){
    $user = \App\Models\User::create($request -> all());

    return redirect('users/'.$user -> id);
});

Route::get('users/{id}/edit', function ($id){
    $user = \App\Models\User::find($id);
    return view('editUser',compact('user'));
});

Route::put('users/{id}', function ($id, \App\Http\Requests\UpdateUserRequest $request){
    
    $user = \App\Models\User::find($id);

    $user -> fill($request -> all());

    $user -> save();
    return redirect('users/'.$user -> id);

});


