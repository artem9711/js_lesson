<?php

use App\Http\Controllers\Person\StoreController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PersonController as PersonControllerA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'people'], function () {
    Route::post('/', [StoreController::class, '__invoke']);
});
