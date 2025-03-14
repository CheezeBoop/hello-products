<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LombaController;

Route::view('/lomba', 'lomba');

Route::post('/submit-lomba', [LombaController::class, 'submit']);

Route::get('/', function () {
    return view('welcome');
});
