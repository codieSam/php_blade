<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{name?}', function($name = null){
//     $demo = "<h2> Hey User </h2>";
//     $data = compact('name','demo');
// return view('home')->with($data);
// });
Route::get('/about', function(){
    return view('about');
});
Route::get('/', function(){
    return view('display');
});
