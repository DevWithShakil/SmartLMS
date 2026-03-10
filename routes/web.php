<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task-1', [TestController::class, 'taskOne']);
Route::get('/task-2', [TestController::class, 'taskTwo']);
