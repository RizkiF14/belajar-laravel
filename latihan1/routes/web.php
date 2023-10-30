<?php

use App\Http\Controllers\Barang;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertama', function () {
    return view('home');
});

Route::get('/kedua', function () {
    echo "how are you ?";
});

Route::view('/panggilan_view', 'welcome');

Route::redirect('/alihkan','/');

Route::get('/parameter/{id}', function($id){
    echo "how are you ?".$id;
});

Route::prefix(['prefix' => 'admin'], function(){

    Route::get('/parameter/{id}', function($id){
        echo "how are you ?".$id;
    });

    Route::get('/dashboard', function($id){
        echo "ini dashboard";
    });
});

Route::get('/route_cont/{id}',[Barang::class, 'index']);
