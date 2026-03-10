<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return response()->json([
        "status" => "success",
        "data" => ["Mazbaul", "Rahim", "Karim"]
    ]);
});