<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');


Route::get('/', function () {
    return response()->json(['status' => 'Changed on my local code and its updated on the live server awesome']);
});