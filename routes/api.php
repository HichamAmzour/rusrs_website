<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\EventController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('Article', 'API\ArticleController');
Route::resource('Event', 'API\EventController');

//Route::get('/Article/{q?}', [ArticleController::class,'index']);
// Route::get('/Event/{q?}', [EventController::class,'index']);

