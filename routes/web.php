<?php

use Illuminate\Support\Facades\Route;
Route::get('lang/{locale}', function ($lang) {

    // if (array_key_exists($lang, Config::get('locale'))) {
        Session::put('locale', $lang);
    // }

    return redirect()->back();
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();