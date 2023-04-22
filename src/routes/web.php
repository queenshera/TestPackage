<?php

use Illuminate\Support\Facades\Route;

Route::get('/ptest1', function () {
    return 'ptest route successfull';
});

Route::get('/contactus',[\Ashish\MyPackage\App\Http\Controllers\MainController::class,'contactus']);
