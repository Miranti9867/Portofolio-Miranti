<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {return view('welcome');});
Route::post('/submit-message', [MessageController::class, 'store']);

