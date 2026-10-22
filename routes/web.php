<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    $storeName = 'Mini Store';
    return view('home',['storeName' => $storeName]);
});

Route::get('/about',function(){
    return view('about');
});
