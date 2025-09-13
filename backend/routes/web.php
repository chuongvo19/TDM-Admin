<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Test api router
Route::middleware('api')->prefix('api')->group(function () {
    Route::get('/test-api', function () {
        return response()->json([
            'name'   => 'chuong',
            'action' => 'test'
        ]);
    });
});