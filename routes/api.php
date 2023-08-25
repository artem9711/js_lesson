<?php

use App\Http\Controllers\Person\IndexController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PersonController as PersonControllerA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'people'], function () {
    Route::post('/', [IndexController::class, 'store']);
    Route::get('/', [IndexController::class, 'index']);
    Route::patch('/{person}', [IndexController::class, 'update']);
    Route::delete('/{person}', [IndexController::class, 'delete']);
});
