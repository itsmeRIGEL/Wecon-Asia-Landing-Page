<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insights', function () {
    return view('insights');
});

Route::get('/events', function () {
    return redirect()->away('https://marketech-apac.com/featured-events/');
});
