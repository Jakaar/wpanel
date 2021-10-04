<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin', 'namespace'=>'admin'], function (){
   Route::get('/users', [\App\Http\Controllers\admin\SettingsController::class, 'users']);
   Route::get('/contact-us', [\App\Http\Controllers\admin\ContactController::class, 'index']);
});
